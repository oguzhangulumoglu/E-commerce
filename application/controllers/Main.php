<?php
    defined ('BASEPATH') OR exit( 'No direct script access allowed' );

    date_default_timezone_set ('Europe/Istanbul');

    class Main extends CI_Controller
    {
        public $data = array ();
        public $SMTP_HOST = "smtp.yandex.com.tr";
        public $SMTP_USER = "info@lastikkent.com.tr";
        public $SMTP_PASS = "Aziz2016";
        public $SMTP_PORT = "587";
        public $allow_ips = array (
            // '162.158.111.236',
            '0.0.0.0'
        );

        function __construct ()
        {
            parent::__construct ();
            if ( in_array ($this->tools->get_ip_address () , $this->allow_ips) )
                exit( 'Inappropriate access detected' );
        }

        public function getSeo ($tag)
        {
            $this->load->library ('Memcached_library');
            if ( $cache = $this->memcached_library->get ('cache_' . $tag) === false ) {
                $results = $this->db->get_where ("settings" , array ( "tag" => $tag ))->row ();
                $this->memcached_library->add ('cache_' . $tag , $results , 10);
            } else {
                $results = $this->memcached_library->get ('cache_' . $tag);
            }

            return $results;
        }

        private function getCacheData ($tag)
        {
            $this->load->library ('Memcached_library');
            if ( $cache = $this->memcached_library->get ($tag) === false ) {
                $results = $this->db->get ($tag)->result ();
                $this->memcached_library->add ($tag , $results , 10);
            } else {
                $results = $this->memcached_library->get ($tag);
            }

            return $results;
        }

        private function getCachePage ($id)
        {
            $this->load->library ('Memcached_library');
            if ( $cache = $this->memcached_library->get ("get_page_" . $id) === false ) {
                $results = $this->db->get_where ("page" , array ( "category" => $id ))->result ();
                $this->memcached_library->add ("get_page_" . $id , $results , 10);
            } else {
                $results = $this->memcached_library->get ("get_page_" . $id);
            }

            return $results;
        }

        public function mail ()
        {

            echo self::email_send ("wast16@gmail.com" , "TEST" , "TEST");
        }

        private function email_send ($sTo , $sSubject , $sMessage)
        {

            $this->load->library ('email');

            $this->email->set_newline ("\r\n");

            // Set the default email config and Initialize
            $config[ 'protocol' ] = 'smtp';
            $config[ 'smtp_host' ] = $this->SMTP_HOST;
            $config[ 'smtp_user' ] = $this->SMTP_USER;
            $config[ 'smtp_pass' ] = $this->SMTP_PASS;
            $config[ 'smtp_port' ] = $this->SMTP_PORT;
            $config[ 'smtp_crypto' ] = 'tls';
            $config[ 'charset' ] = 'iso-8859-9';

            $this->email->initialize ($config);

            $this->email->from ('info@lastikkent.com.tr' , 'Lastikkent Bilgilendirme');
            $this->email->to ($sTo);
            $this->email->subject ($sSubject);
            $this->email->message ($sMessage);

            if ( ! $this->email->send () ) {
                //return - 1;
                echo $this->email->print_debugger ();
            } else {
                return 1;
            }

        }

        function index ()
        {
            //memcached : enabled
            $this->load->library ('Memcached_library');
            if ( $this->memcached_library->get ('index_lastik2') == false ) {
                $lastik = $this->db->query ("select * from product where popular!='' order by product.popular asc limit 0,4")->result ();
                $this->memcached_library->add ('index_lastik2' , $lastik , 10);
            } else {
                $lastik = $this->memcached_library->get ('index_lastik2');
            }

            $data = array (
                "select_brand" => self::getCacheData ("brand") ,
                "select_tire_rate" => self::getCacheData ("tire_rate") ,
                "select_tire_width" => self::getCacheData ("tire_width") ,
                "select_rim_diameter" => self::getCacheData ("rim_diameter") ,
                "select_speed_index" => self::getCacheData ("speed_index") ,
                "select_season" => self::getCacheData ("season") ,
                "select_category" => self::getCacheData ("category") ,
                "title" => self::getSeo ("index_title")->name ,
                "description" => self::getSeo ("index_description")->name ,
                "keywords" => self::getSeo ("index_keywords")->name ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "populer_lastik" => $lastik ,
                "merchant" => $this->db->query ("select * from merchant where status='normal' && accepts='on' order by hit desc limit 0,8")->result () ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "ads" => array (
                    "reklam_1" => self::getSeo ("reklam_1")->name ,
                    "reklam_2" => self::getSeo ("reklam_2")->name ,
                ) ,
                "tire_merchant" => $this->db->get_where ("merchant" , array ( "status" => "normal" , "latlng !=" => "" ))->result_array () ,
                "battery_merchant" => $this->db->select ('*')->join ('merchant_duty' , 'merchant.id = merchant_duty.m_id')->join ('merchant_detail' , 'merchant.id = merchant_detail.merchartID')->get_where ("merchant" , array ( "merchant_detail.words" => "brand_aku" , "merchant.status" => "normal" , "merchant.latlng !=" => "" ))->result_array ()
            );

            $this->smarty->view ('index' , $data);
        }

        /*
         * @param Auth method
         * @param output view
         */

        public
        function register ($e = "main" , $complate = null)
        {

            if ( $this->session->userdata ('logged_in') )
                redirect (base_url ());

            $data = array (
                'title' => self::getSeo ("register_title")->name ,
                "keywords" => self::getSeo ("register_keywords")->name ,
                "description" => self::getSeo ("register_description")->name ,
                "complete" => $e ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "sales" => $this->db->get ("sales")->result_array () ,
            );

            if ( $this->input->post () ) {

                switch ( $this->input->post ("status" , true) ) {

                    case "users":

                        if (
                            $this->input->post ("status" , true) &&
                            $this->input->post ("email" , true) &&
                            $this->input->post ("password" , true) &&
                            $this->input->post ("adress" , true) &&
                            $this->input->post ("city" , true) &&
                            $this->input->post ("state" , true) &&
                            $this->input->post ("name" , true) &&
                            $this->input->post ("g-recaptcha-response" , true)
                        ) {

                            $verifyResponse = file_get_contents ('https://www.google.com/recaptcha/api/siteverify?secret=6LfcFx4UAAAAAJrmxRMgyXbebWJI40gYbPtaa5Sa&response=' . $this->input->post ("g-recaptcha-response" , true));

                            $responseData = json_decode ($verifyResponse);

                            if ( $responseData->success ) {

                                $this->db->where ("email" , $this->input->post ("email" , true));

                                if ( $this->db->get ("merchant")->num_rows () < 1 ) {

                                    $arr = array (
                                        "accepts" => "on" ,
                                        "status" => $this->input->post ("status" , true) ,
                                        "name" => $this->input->post ("name" , true) ,
                                        "email" => $this->input->post ("email" , true) ,
                                        "password" => md5 ($this->input->post ("password" , true)) ,
                                        "adress" => $this->input->post ("adress" , true) ,
                                        "homephone" => $this->input->post ("homephone" , true) ,
                                        "city" => ! $this->input->post ("city" , true) ? "0" : $this->input->post ("city" , true) ,
                                        "state" => ! $this->input->post ("state" , true) ? "0" : $this->input->post ("state" , true) ,
                                        "search" => "0" ,
                                    );

                                    $query = $this->db->insert ("merchant" , $arr);

                                    if ( $query ) {

                                        redirect (base_url ("main/register/complete"));

                                    } else {

                                        $data[ "error" ] = array (
                                            "code" => 2 ,
                                            "msg" => "Üzgünüm, sorun oluştu lütfen yöneticinize iletiniz!"
                                        );

                                    }

                                } else {

                                    $data[ "error" ] = array (
                                        "code" => 2 ,
                                        "msg" => "Üzgünüm, girdiğiniz kullanıcı adında kayıtlı kullanıcı mevcut. İsterseniz yöneticinize iletiniz!"
                                    );
                                }

                            } else {

                                $data[ "error" ] = array (
                                    "code" => 2 ,
                                    "msg" => "Robot verification failed, please try again.'"
                                );
                            }

                        } else {

                            $data[ "error" ] = array (
                                "code" => 2 ,
                                "msg" => "Üzgünüm, gönderdiğiniz verilerde boş alana rastladık. Lütfen yeniden giriniz!"
                            );
                        }

                        break;

                    case "normal":
                    case "online":
                    default:

                        if (
                            $this->input->post ("status" , true) &&
                            $this->input->post ("name" , true) &&
                            $this->input->post ("email" , true) &&
                            $this->input->post ("password" , true) &&
                            $this->input->post ("company" , true) &&
                            $this->input->post ("adress" , true) &&
                            $this->input->post ("g-recaptcha-response" , true)
                        ) {

                            $verifyResponse = file_get_contents ('https://www.google.com/recaptcha/api/siteverify?secret=6LfcFx4UAAAAAJrmxRMgyXbebWJI40gYbPtaa5Sa&response=' . $this->input->post ("g-recaptcha-response" , true));
                            $responseData = json_decode ($verifyResponse);

                            if ( $responseData->success ) {

                                $this->db->where ("email" , $this->input->post ("email" , true));

                                if ( $this->db->get ("merchant")->num_rows () < 1 ) {

                                    $arr = array (
                                        "status" => $this->input->post ("status" , true) ,
                                        "name" => $this->input->post ("name" , true) ,
                                        "email" => $this->input->post ("email" , true) ,
                                        "password" => md5 ($this->input->post ("password" , true)) ,
                                        "company" => $this->input->post ("company" , true) ,
                                        "web" => $this->input->post ("web" , true) ,
                                        "vergino" => $this->input->post ("vergino" , true) ,
                                        "adress" => $this->input->post ("adress" , true) ,
                                        "latlng" => '00,00',
                                        "homephone" => $this->input->post ("homephone" , true) ,
                                        "uri" => $this->tools->permalink ($this->input->post ("company" , true)) ,
                                        "cellphone" => $this->input->post ("cellphone" , true) ,
                                        "city" => ! $this->input->post ("city" , true) ? "0" : $this->input->post ("city" , true) ,
                                        "state" => ! $this->input->post ("state" , true) ? "0" : $this->input->post ("state" , true) ,
                                        "sales" => $this->input->post ("sales" , true) ,
                                        "search" => "0" ,
                                    );

                                    $query = $this->db->insert ("merchant" , $arr);

                                    if ( $query ) {

                                        $last_id = $this->db->insert_id ();

                                        $this->db->insert ("merchant_detail" , array (
                                            "merchartID" => $last_id ,
                                            "words" => "brand" ,
                                            "data" => ""
                                        ));

                                        $this->db->insert ("merchant_detail" , array (
                                            "merchartID" => $last_id ,
                                            "words" => "brand_aku" ,
                                            "data" => ""
                                        ));

                                        $this->db->insert ("merchant_duty" , array (
                                            "m_id" => $last_id
                                        ));

                                        redirect (base_url ("main/register/complete"));

                                    } else {

                                        $data[ "error" ] = array (
                                            "code" => 2 ,
                                            "msg" => "Üzgünüm, sorun oluştu lütfen yöneticinize iletiniz!"
                                        );

                                    }

                                } else {

                                    $data[ "error" ] = array (
                                        "code" => 2 ,
                                        "msg" => "Üzgünüm, girdiğiniz kullanıcı adında kayıtlı kullanıcı mevcut. İsterseniz yöneticinize iletiniz!"
                                    );
                                }

                            } else {

                                $data[ "error" ] = array (
                                    "code" => 2 ,
                                    "msg" => "Robot verification failed, please try again.'"
                                );
                            }

                        } else {

                            $data[ "error" ] = array (
                                "code" => 2 ,
                                "msg" => "Üzgünüm, gönderdiğiniz verilerde boş alana rastladık. Lütfen yeniden giriniz!"
                            );
                        }

                        break;
                }

            }

            switch ( $e ) {

                case "bireysel":

                    $data[ 'contract' ] = $this->db->get_where ("contract" , array ( "type" => "bireysel" ))->row ()->description;

                    $this->smarty->view ('register_bireysel' , $data);

                    break;

                case "kurumsal";

                    $data[ 'contract' ] = $this->db->get_where ("contract" , array ( "type" => "kurumsal" ))->row ()->description;

                    $this->smarty->view ('register_kurumsal' , $data);

                    break;

                case "complete":

                    $this->smarty->view ('register_notify' , $data);

                    break;

                case "main";
                default:
                    $this->smarty->view ('register' , $data);
            }

        }

        public function activation ($id , $hash)
        {

            if ( ! $id )
                redirect (base_url ());

            $query = $this->db->get_where ("merchant" , array ( "id" => $id ));

            if ( $query->num_rows () > 0 ) {

                $this->db->where ("id" , $id);

                if ( $this->db->update ("merchant" , array (
                    "accepts" => "on"
                ))
                ) {

                    $user = array (
                        'email' => $query->row ()->email ,
                        'logged_in' => true
                    );

                    $this->session->set_userdata ($user);

                    redirect (base_url ("/main/profile"));
                }

            } else {

                redirect (base_url ());

            }

        }

        public
        function login ($e = null)
        {

            if ( $this->session->userdata ('logged_in') )
                redirect (base_url ());

            $data = array (
                'title' => self::getSeo ("login_title")->name ,
                "keywords" => self::getSeo ("login_keywords")->name ,
                "description" => self::getSeo ("login_description")->name ,
                "complete" => $e ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2)
            );

            if ( $this->input->post () ) {

                if (
                    $this->input->post ("email" , true) &&
                    $this->input->post ("password" , true)
                ) {

                    $this->db->where ("email" , $this->input->post ("email" , true));
                    $this->db->where ("password" , md5 ($this->input->post ("password" , true)));

                    if ( $this->db->get ("merchant")->num_rows () > 0 ) {

                        $row = $this->db->get_where ("merchant" , array ( "email" => $this->input->post ("email" , true) ))->row_array ();

                        if ( $row[ "accepts" ] == "on" ) {

                            $user = array (
                                'email' => $this->input->post ("email" , true) ,
                                'logged_in' => true ,
                                'info' => $row
                            );

                            $this->session->set_userdata ($user);

                            if ( $this->input->get ('redict') ) {

                                redirect (base64_decode ($this->input->get ('redict')));

                            } else {

                                redirect (base_url ("/main/profile"));

                            }

                        } else {

                            $data[ "error" ] = array (
                                "code" => 2 ,
                                "msg" => "Üzgünüm, onaysız hesapla giriş yapmayı denediniz. Lütfen bekleyiniz, kısa sürede onaylanacaktır hesabınız.!"
                            );

                        }

                    } else {

                        $data[ "error" ] = array (
                            "code" => 2 ,
                            "msg" => "Üzgünüm, eksik yada hatalı bilgilerle giriş yapmayı denediniz. Yeniden giriş yapmayı deneyiniz!"
                        );
                    }

                } else {

                    $data[ "error" ] = array (
                        "code" => 2 ,
                        "msg" => "Üzgünüm, gönderdiğiniz verilerde boş alana rastladık. Lütfen yeniden giriniz!"
                    );
                }

            }

            $this->smarty->view ('login' , $data);

        }

        public
        function lost ($e = null)
        {

            if ( $this->session->userdata ('logged_in') )
                redirect (base_url ());

            $data = array (
                'title' => self::getSeo ("lost_title")->name ,
                "keywords" => self::getSeo ("lost_keywords")->name ,
                "description" => self::getSeo ("lost_description")->name ,
                "complete" => $e ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2)
            );

            if ( $this->input->post () ) {

                if (
                $this->input->post ("email" , true)
                ) {

                    if ( $this->db->get_where ("merchant" , array ( "email" => $this->input->post ("email" , true) , "accepts" => "on" ))->num_rows () > 0 ) {

                        $rand = rand (11111 , 999999);

                        if ( self::email_send ($this->input->post ("email" , true) , 'Şifremi Unuttum' , str_replace (
                            array (
                                '{PASS}'
                            ) ,
                            array (
                                $rand
                            ) ,
                            file_get_contents ("assets/email/lost.html")
                        ))
                        ) {

                            $this->db->where ("email" , $this->input->post ("email" , true));

                            $this->db->update ("merchant" , array ( "password" => md5 ($rand) ));

                            $data[ "error" ] = array (
                                "code" => 1 ,
                                "msg" => "Tebrikler, geçiçi şifreniz mail adresinize gönderilmiştir. Hemen Gelen/Gereksiz kutusunu kontrol ediniz!"
                            );

                        } else {

                            redirect (base_url ("/main/lost?error=1"));

                        }

                    } else {

                        $data[ "error" ] = array (
                            "code" => 2 ,
                            "msg" => "Üzgünüm, eksik yada hatalı veya onaylanmamış bir email ile şifre almayı denediniz. Lütfen, Yeniden deneyiniz veya yöneticiye iletiniz!"
                        );
                    }

                } else {

                    $data[ "error" ] = array (
                        "code" => 2 ,
                        "msg" => "Üzgünüm, gönderdiğiniz verilerde boş alana rastladık. Lütfen yeniden giriniz!"
                    );
                }

            }

            $this->smarty->view ('lost' , $data);

        }

        public
        function logout ()
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->session->sess_destroy ();

            redirect (base_url ("main/login"));

        }

        public
        function contact ($e)
        {

            $merchant = $this->db->get_where ("merchant" , array ( "uri" => $e ))->row_array ();

            $data = array (
                'title' => $merchant[ "company" ] . " " . self::getSeo ("contact_title")->name ,
                "keywords" => self::getSeo ("contact_keywords")->name ,
                "description" => self::getSeo ("contact_description")->name ,
                "complete" => $e ,
                "error" => array () ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "merchant" => $merchant
            );

            if ( $this->input->post () ) {

                if (
                    $this->input->post ("name" , true) &&
                    $this->input->post ("email" , true) &&
                    $this->input->post ("text" , true)
                ) {

                    if ( $this->db->insert ("message" , array (
                        "mid" => $merchant[ "id" ] ,
                        "name" => $this->input->post ("name" , true) ,
                        "email" => $this->input->post ("email" , true) ,
                        "text" => $this->input->post ("text" , true)
                    ))
                    ) {

                        $data[ "error" ] = array (
                            "code" => 3 ,
                            "msg" => "Tebrikler, Mesajınız alınmıştır. Kısa süre içinde size geri dönüş yapılacaktır!"
                        );

                    } else {

                        $data[ "error" ] = array (
                            "code" => 2 ,
                            "msg" => "Üzgünüm, gönderdiğiniz verilerde boş alana rastladık. Lütfen yeniden giriniz!"
                        );
                    }

                } else {
                    $data[ "error" ] = array (
                        "code" => 2 ,
                        "msg" => "Üzgünüm, gönderdiğiniz verilerde boş alana rastladık. Lütfen yeniden giriniz!"
                    );
                }

            }


            $this->smarty->view ('contact' , $data);
        }

        public
        function orders ($e = 1)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $arr = array (
                'title' => self::getSeo ("profile_title")->name ,
                "keywords" => self::getSeo ("profile_keywords")->name ,
                "description" => self::getSeo ("profile_description")->name ,
                "complete" => $e ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "list" => $this->db->order_by ('id' , 'desc')->get_where ("orders" , array ( "m_id" => $data[ "id" ] ))->result () ,
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            $this->smarty->view ('orders' , $data);

        }

        public function sepet ()
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $data = array ();

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $arr = array (
                'title' => "Sepetim" ,
                "keywords" => self::getSeo ("profile_keywords")->name ,
                "description" => self::getSeo ("profile_description")->name ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "list" => $this->db->get_where ("product" , array ( "myamount !=" => "" ))->result () ,
                "sepet" => $this->db->select ("*,cart.id as cid,product.id as pid")->join ('product' , 'product.id=cart.p_id')->get_where ("cart" , array ( "m_id" => $data[ "id" ] ))->result () ,
                "total" => ( $this->db->select ("*, sum(product.myamount * cart.quantity) as total")->join ('product' , 'product.id=cart.p_id')->get_where ("cart" , array ( "m_id" => $data[ "id" ] ))->row ()->total * 0.18 ) + $this->db->select ("*, sum(product.myamount * cart.quantity) as total")->join ('product' , 'product.id=cart.p_id')->get_where ("cart" , array ( "m_id" => $data[ "id" ] ))->row ()->total ,
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            if ( $this->input->post () ) {

                if ( count (array_filter ($this->input->post ())) > 0 ) {

                    $this->db->insert ("orders" , array (
                        "m_id" => $data[ "id" ] ,
                        "total" => $this->input->post ("total_amount" , true) ,
                        "status" => 1
                    ));

                    $lastID = $this->db->insert_id ();

                    if ( $lastID ) {

                        $this->db->delete ("cart" , array (
                            "m_id" => $data[ "id" ]
                        ));
                    }
                }

                if ( $lastID ) {

                    foreach ( array_filter ($this->input->post ()) as $key => $val ) {

                        $key_parse = explode ("_" , $key);

                        $this->db->insert ("orders_detail" , array (
                            "o_id" => $lastID ,
                            "product_code" => $key_parse[ 1 ] ,
                            "stock" => $val
                        ));

                    }

                    redirect (base_url ("main/orders"));
                }

            }

            $this->smarty->view ('sepet' , $data);
        }

        public function addCart ($productID)
        {

            if ( ! $this->session->userdata ('logged_in') )
                exit();

            if ( ! $productID )
                exit();

            $arr = array ();

            $query = $this->db->get_where ("product" , array ( "id" => $productID ));

            $mID = $this->db->get_where ("merchant" , array ( "email" => $this->session->userdata ('email') ))->row ()->id;

            if ( $query->num_rows () > 0 ) {

                if ( $this->db->get_where ("cart" , array (
                        "m_id" => $mID ,
                        "p_id" => $productID
                    ))->num_rows () < 1
                ) {

                    if ( $this->db->insert ("cart" , array (
                        "m_id" => $mID ,
                        "p_id" => $productID ,
                        "quantity" => "1"
                    ))
                    ) {

                        $arr = array (
                            "cart" => $this->db->get_where ("cart" , array ( "m_id" => $mID ))->num_rows ()
                        );

                    } else {

                        $arr = array (
                            "cart" => $this->db->get_where ("cart" , array ( "m_id" => $mID ))->num_rows ()
                        );

                    }

                } else {

                    $arr = array (
                        "cart" => $this->db->get_where ("cart" , array ( "m_id" => $mID ))->num_rows ()
                    );

                }

                header ('Content-Type: application/json');
                echo json_encode ($arr);

            } else

                exit();

        }

        public function cartCalc ($pID , $quantity)
        {

            if ( ! $pID || ! $quantity )
                exit();

            if ( $quantity < 0 )
                $quantity = 1;

            $mID = $this->db->get_where ("merchant" , array ( "email" => $this->session->userdata ('email') ))->row ()->id;

            $arr = array ();

            $query = $this->db->get_where ("cart" , array (
                "m_id" => $mID
            ));

            if ( $query->num_rows () > 0 ) {

                if ( $this->db->get_where ("cart" , array (
                        "m_id" => $mID ,
                        "p_id" => $pID
                    ))->num_rows () > 0
                ) {

                    $this->db->where ("m_id" , $mID);
                    $this->db->where ("p_id" , $pID);

                    $this->db->update ("cart" , array (
                        "m_id" => $mID ,
                        "p_id" => $pID ,
                        "quantity" => $quantity
                    ));

                }

                $arr = array (
                    "subtotal" => number_format ($this->db->get_where ("product" , array ( "id" => $pID ))->row ()->myamount * $quantity , 2 , '.' , '') ,
                    "total" => number_format (( $this->db->select ("*, sum(product.myamount * cart.quantity) as total")->join ('product' , 'product.id=cart.p_id')->get_where ("cart" , array ( "m_id" => $mID ))->row ()->total * 0.18 ) + $this->db->select ("*, sum(product.myamount * cart.quantity) as total")->join ('product' , 'product.id=cart.p_id')->get_where ("cart" , array ( "m_id" => $mID ))->row ()->total , 2 , '.' , '') ,
                );

                header ('Content-Type: application/json');
                echo json_encode ($arr);
            }

        }

        public function deleteCart ($cartID)
        {

            if ( ! $this->session->userdata ('logged_in') )
                exit();

            if ( ! $cartID )
                exit();

            $arr = array ();

            $mID = $this->db->get_where ("merchant" , array ( "email" => $this->session->userdata ('email') ))->row ()->id;

            if ( $this->db->get_where ("cart" , array (
                    "id" => $cartID
                ))->num_rows () > 0
            ) {

                if ( $this->db->delete ("cart" , array (
                    "id" => $cartID ,
                ))
                ) {

                    $arr = array (
                        "cart" => $this->db->get_where ("cart" , array ( "m_id" => $mID ))->num_rows ()
                    );

                } else {

                    $arr = array (
                        "cart3" => $this->db->get_where ("cart" , array ( "m_id" => $mID ))->num_rows ()
                    );

                }

            } else {

                $arr = array (
                    "cart2" => $this->db->get_where ("cart" , array ( "m_id" => $mID ))->num_rows ()
                );

            }

            header ('Content-Type: application/json');
            echo json_encode ($arr);

        }

        public
        function order ($e = 1)
        {

            if ( $e == 3 ) {

                if ( $this->input->post () ) {

                    $total = 0;

                    if (
                        $this->input->post ("name" , true) &&
                        $this->input->post ("price" , true) &&
                        $this->input->post ("m_id" , true)
                    ) {

                        if ( ! $this->input->post ("min_val" , true) ) {

                            $this->db->delete ("calc" , array (
                                "name" => $this->input->post ("name" , true)
                            ));

                        } else {

                            $query2 = $this->db->get_where ("calc" , array (
                                "m_id" => $this->input->post ("m_id" , true) ,
                                "name" => $this->input->post ("name" , true)
                            ));

                            if ( $query2->num_rows () > 0 ) {

                                $this->db->where ("m_id" , $this->input->post ("m_id" , true));
                                $this->db->where ("name" , $this->input->post ("name" , true));

                                $this->db->update ("calc" , array (
                                    "stock" => $this->input->post ("min_val" , true)
                                ));

                            } else {

                                $this->db->insert ("calc" , array (
                                    "m_id" => $this->input->post ("m_id" , true) ,
                                    "name" => $this->input->post ("name" , true) ,
                                    "amount" => $this->input->post ("price" , true) ,
                                    "stock" => $this->input->post ("min_val" , true)
                                ));

                            }

                        }

                        $query = $this->db->get_where ("calc" , array ( "m_id" => $this->input->post ("m_id" , true) ));

                        foreach ( $query->result () as $row ) {
                            $total += ( $row->amount * $row->stock );
                        }

                        echo $total + ( ( $total / 100 ) * 18 );
                    }

                }

                exit;
            }

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $this->db->delete ("calc" , array (
                "m_id" => $data[ "id" ]
            ));

            $arr = array (
                'title' => self::getSeo ("profile_title")->name ,
                "keywords" => self::getSeo ("profile_keywords")->name ,
                "description" => self::getSeo ("profile_description")->name ,
                "complete" => $e ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "list" => $this->db->get_where ("product" , array ( "myamount !=" => "" ))->result () ,
                "sepet" => $this->db->get_where ("cart" , array ( "m_id" => $data[ "id" ] ))->num_rows ()
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            if ( $this->input->post () ) {

                if ( count (array_filter ($this->input->post ())) > 0 ) {

                    $this->db->insert ("orders" , array (
                        "m_id" => $data[ "id" ] ,
                        "total" => $this->input->post ("total_amount" , true) ,
                        "status" => 1
                    ));

                    $lastID = $this->db->insert_id ();
                }

                if ( $lastID ) {

                    foreach ( array_filter ($this->input->post ()) as $key => $val ) {

                        $key_parse = explode ("_" , $key);

                        $this->db->insert ("orders_detail" , array (
                            "o_id" => $lastID ,
                            "product_code" => $key_parse[ 1 ] ,
                            "stock" => $val
                        ));

                    }

                    redirect (base_url ("main/orders"));
                }

            }

            $this->smarty->view ('order' , $data);

        }

        public
        function profile ($e = null)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $arr = array (
                'title' => self::getSeo ("profile_title")->name ,
                "keywords" => self::getSeo ("profile_keywords")->name ,
                "description" => self::getSeo ("profile_description")->name ,
                "complete" => $e ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2)
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            if ( $this->input->post () ) {

                if (
                    $this->input->post ("name" , true) &&
                    $this->input->post ("adress" , true) &&
                    $this->input->post ("homephone" , true)
                ) {

                    if ( $_FILES ) {

                        if ( $_FILES[ "file" ][ "name" ] ) {

                            $upload = $_FILES[ 'file' ][ 'tmp_name' ];
                            $name = "assets/upload/" . rand (112 , 99999) . ".jpg";

                            if ( move_uploaded_file ($upload , FCPATH . $name) ) {

                                $this->db->where ("email" , $this->session->userdata ('email'));

                                $this->db->update ("merchant" , array ( "logo" => $name ));

                                self::thumb_create ($name , 100 , 100 , 80);
                            }
                        }
                    }

                    $userdata = array (
                        "name" => $this->input->post ("name" , true) ,
                        "web" => $this->input->post ("web" , true) ,
                        "adress" => $this->input->post ("adress" , true) ,
                        "homephone" => $this->input->post ("homephone" , true) ,
                        "cellphone" => $this->input->post ("cellphone" , true) ,
                        "city" => $this->input->post ("city2" , true) ,
                        "state" => $this->input->post ("state2" , true) ,
                        "vergino" => $this->input->post ("vergino" , true)
                    );

                    $this->db->where ("email" , $this->session->userdata ('email'));

                    if ( $this->db->update ("merchant" , $userdata) ) {

                        redirect (base_url ("main/profile"));

                    } else {

                        $error = array (
                            "code" => 2 ,
                            "msg" => "Üzgünüm, bir hatayla karşılaşıldı. Lütfen yeniden giriniz!"
                        );

                        foreach ( $error as $key => $val ) {

                            $data[ "error" ][ $key ] = $val;

                        }
                    }

                } else {

                    $error = array (
                        "code" => 2 ,
                        "msg" => "Üzgünüm, gönderdiğiniz verilerde boş alana rastladık. Lütfen yeniden giriniz!"
                    );

                    foreach ( $error as $key => $val ) {

                        $data[ "error" ][ $key ] = $val;

                    }

                }
            }

            $this->smarty->view ('profile' , $data);

        }

        public
        function message_delete ($e)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $message = $this->db->get_where ("message" , array ( "id" => $e , "mid" => $data[ "id" ] ));

            if ( $message->num_rows () > 0 ) {

                $this->db->where ("id" , $e);

                $this->db->delete ("message");

            }

            redirect (base_url ("main/message"));

        }

        public
        function gallery ()
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            if ( $_FILES ) {

                if ( $_FILES[ "file" ][ "name" ] ) {

                    $upload = $_FILES[ 'file' ][ 'tmp_name' ];
                    $name = "assets/upload/" . rand (112 , 99999) . ".jpg";

                    if ( move_uploaded_file ($upload , FCPATH . $name) ) {

                        if ( $this->db->insert ("gallery" , array ( "merchantID" => $data[ "id" ] , "name" => $name )) ) {

                            redirect (base_url ("main/gallery"));

                        } else

                            redirect (base_url ("main/gallery"));
                    }
                }
            }

            $arr = array (
                'title' => self::getSeo ("gallery_title")->name ,
                "keywords" => self::getSeo ("gallery_keywords")->name ,
                "description" => self::getSeo ("gallery_description")->name ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "gallery" => $this->db->get_where ("gallery" , array ( "merchantID" => $data[ "id" ] ))->result () ,
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            $this->smarty->view ('gallery' , $data);

        }

        public
        function gallery_delete ($e)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $gallery = $this->db->get_where ("gallery" , array ( "id" => $e , "merchantID" => $data[ "id" ] ));

            if ( $gallery->num_rows () > 0 ) {

                $this->db->where ("id" , $e);

                $this->db->delete ("gallery");

            }

            redirect (base_url ("main/gallery"));

        }

        public
        function message ($e = 1)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $page = 10;

            $limit = ( $e * $page ) - $page;

            $message = $this->db->limit ($limit , $page)->get_where ("message" , array ( "mid" => $data[ "id" ] ));

            $arr = array (
                'title' => self::getSeo ("message_title")->name ,
                "keywords" => self::getSeo ("message_keywords")->name ,
                "description" => self::getSeo ("message_description")->name ,
                "complete" => $e ,
                "total" => $message->num_rows () ,
                "page" => ceil ($message->num_rows () / $page) ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "message" => $message->result () ,
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            $this->smarty->view ('message' , $data);

        }

        public
        function changepass ($e = null)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $arr = array (
                'title' => self::getSeo ("changepass_title")->name ,
                "keywords" => self::getSeo ("changepass_keywords")->name ,
                "description" => self::getSeo ("changepass_description")->name ,
                "complete" => $e ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2)
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            if ( $this->input->post () ) {

                if (
                    $this->input->post ("password" , true) &&
                    $this->input->post ("repassword" , true)
                ) {

                    if ( $this->input->post ("repassword" , true) === $this->input->post ("password" , true) ) {

                        $this->db->where ("id" , $data[ "id" ]);

                        if ( $this->db->update ("merchant" , array (
                            "password" => md5 ($this->input->post ("password" , true))
                        ))
                        ) {

                            redirect (base_url ("main/profile"));

                        } else {

                            $error = array (
                                "code" => 2 ,
                                "msg" => "Üzgünüm, bir hatayla karşılaşıldı. Lütfen yeniden giriniz!"
                            );

                            foreach ( $error as $key => $val ) {

                                $data[ "error" ][ $key ] = $val;

                            }
                        }
                    } else {

                        $error = array (
                            "code" => 2 ,
                            "msg" => "Üzgünüm, şifreleriniz eşleşmiyor. Yeniden deneyiniz!"
                        );

                        foreach ( $error as $key => $val ) {

                            $data[ "error" ][ $key ] = $val;

                        }

                    }

                } else {

                    $error = array (
                        "code" => 2 ,
                        "msg" => "Üzgünüm, gönderdiğiniz verilerde boş alana rastladık. Lütfen yeniden giriniz!"
                    );

                    foreach ( $error as $key => $val ) {

                        $data[ "error" ][ $key ] = $val;

                    }

                }
            }

            $this->smarty->view ('changepass' , $data);
        }


        public
        function services ($e = null)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $arr = array (
                'title' => self::getSeo ("services_title")->name ,
                "keywords" => self::getSeo ("services_keywords")->name ,
                "description" => self::getSeo ("services_description")->name ,
                "complete" => $e ,
                "brand" => null ,
                "brand_aku" => null ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2)
            );

            $getDataBrand = explode (',' , $this->db->get_where ('merchant_detail' , array ( 'words' => 'brand' , 'merchartID' => $data[ 'id' ] ))->row ()->data);
            $getDataBrandAku = explode (',' , $this->db->get_where ('merchant_detail' , array ( 'words' => 'brand_aku' , 'merchartID' => $data[ 'id' ] ))->row ()->data);

            foreach ( self::getCacheData ("brand") as $brands ) {
                $arr[ 'brand' ][ ] = array (
                    'id' => $brands->id ,
                    'name' => ucfirst ($brands->name) ,
                    'select' => in_array ($brands->id , $getDataBrand) ? true : false
                );
            }

            foreach ( self::getCacheData ("brand_aku") as $brands ) {
                $arr[ 'brand_aku' ][ ] = array (
                    'id' => $brands->id ,
                    'name' => ucfirst ($brands->name) ,
                    'select' => in_array ($brands->id , $getDataBrandAku) ? true : false
                );
            }

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            if ( $_SERVER[ 'REQUEST_METHOD' ] == "POST" ) {

                if ( ! $_POST[ "brand_aku" ] ) {


                    $this->db->where ("merchartID" , $data[ "id" ]);
                    $this->db->where ("words" , "brand_aku");

                    $this->db->update ("merchant_detail" , array (
                        "merchartID" => $data[ "id" ] ,
                        "words" => "brand_aku" ,
                        "data" => ""
                    ));

                } else {

                    $this->db->where ("merchartID" , $data[ "id" ]);
                    $this->db->where ("words" , "brand_aku");

                    if ( $this->db->get ("merchant_detail")->num_rows () < 1 ) {

                        $this->db->insert ("merchant_detail" , array (
                            "merchartID" => $data[ "id" ] ,
                            "words" => "brand_aku" ,
                            "data" => count ($this->input->post ("brand_aku" , true)) > 0 ? implode ("," , $this->input->post ("brand_aku" , true)) : null
                        ));

                    } else {

                        $this->db->where ("merchartID" , $data[ "id" ]);
                        $this->db->where ("words" , "brand_aku");

                        $this->db->update ("merchant_detail" , array (
                            "merchartID" => $data[ "id" ] ,
                            "words" => "brand_aku" ,
                            "data" => count ($this->input->post ("brand_aku" , true)) > 0 ? implode ("," , $this->input->post ("brand_aku" , true)) : null
                        ));

                    }

                }


                if ( ! $_POST[ "brand" ] ) {

                    $this->db->where ("merchartID" , $data[ "id" ]);
                    $this->db->where ("words" , "brand");

                    $this->db->update ("merchant_detail" , array (
                        "merchartID" => $data[ "id" ] ,
                        "words" => "brand" ,
                        "data" => ""
                    ));

                } else {

                    $this->db->where ("merchartID" , $data[ "id" ]);
                    $this->db->where ("words" , "brand");

                    if ( $this->db->get ("merchant_detail")->num_rows () < 1 ) {

                        $this->db->insert ("merchant_detail" , array (
                            "merchartID" => $data[ "id" ] ,
                            "words" => "brand" ,
                            "data" => implode ("," , $this->input->post ("brand" , true))
                        ));

                    } else {

                        $this->db->where ("merchartID" , $data[ "id" ]);
                        $this->db->where ("words" , "brand");

                        $this->db->update ("merchant_detail" , array (
                            "merchartID" => $data[ "id" ] ,
                            "words" => "brand" ,
                            "data" => implode ("," , $this->input->post ("brand" , true))
                        ));

                    }
                }

                redirect (base_url ("main/services"));
            }

            $this->smarty->view ('services' , $data);
        }

        public function stock ($e = null)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            if ( $this->input->get ("search" , true) ) {
                $this->db->like ("name" , $this->input->get ("search" , true) , 'both');
            }
            if ( $this->input->get ("category" , true) ) {
                $this->db->where ("brand" , $this->input->get ("category" , true));
            }
            if ( $this->input->get ("tire_width" , true) ) {
                $this->db->where ("tire_width" , $this->input->get ("tire_width" , true));
            }
            if ( $this->input->get ("tire_rate" , true) ) {
                $this->db->where ("tire_rate" , $this->input->get ("tire_rate" , true));
            }
            if ( $this->input->get ("rim_diameter" , true) ) {
                $this->db->where ("rim_diameter" , $this->input->get ("rim_diameter" , true));
            }
            if ( $this->input->get ("season" , true) ) {
                $this->db->where ("season" , $this->input->get ("season" , true));
            }

            $list = $this->db->join ("product" , "product.id=product_amount.pid")->get_where ("product_amount" , array ( "product_amount.mid" => $data[ "id" ] ))->result ();

            $arr = array (
                'title' => self::getSeo ("duty_title")->name ,
                "keywords" => self::getSeo ("duty_keywords")->name ,
                "description" => self::getSeo ("duty_description")->name ,
                "complete" => $e ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "list" => $list ,
                "category" => self::getCacheData ("brand") ,
                "select_tire_rate" => self::getCacheData ("tire_rate") ,
                "select_tire_width" => self::getCacheData ("tire_width") ,
                "select_rim_diameter" => self::getCacheData ("rim_diameter") ,
                "select_speed_index" => self::getCacheData ("speed_index") ,
                "select_season" => self::getCacheData ("season") ,
                "select_category" => self::getCacheData ("category") ,
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            $this->smarty->view ('stock' , $data);

        }

        public
        function duty ($e = null)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            if ( $data[ "status" ] != "normal" )
                redirect (base_url ("main"));

            $arr = array (
                'title' => self::getSeo ("duty_title")->name ,
                "keywords" => self::getSeo ("duty_keywords")->name ,
                "description" => self::getSeo ("duty_description")->name ,
                "complete" => $e ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "data" => $this->db->get_where ("merchant_duty" , array ( "m_id" => $data[ "id" ] ))->row () ,
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            if ( $this->input->post () ) {

                $subdata = array (
                    "service_1" => $this->input->post ("service_1" , true) ,
                    "service_1_amount" => $this->input->post ("service_1" , true) ? $this->input->post ("service_1_amount" , true) ? $this->input->post ("service_1_amount" , true) : "0" : "0" ,
                    "service_2" => $this->input->post ("service_2" , true) ,
                    "service_2_amount" => $this->input->post ("service_2" , true) ? $this->input->post ("service_2_amount" , true) ? $this->input->post ("service_2_amount" , true) : "0" : "0" ,
                    "service_3" => $this->input->post ("service_3" , true) ,
                    "service_3_amount" => $this->input->post ("service_3" , true) ? $this->input->post ("service_3_amount" , true) ? $this->input->post ("service_3_amount" , true) : "0" : "0" ,
                    "service_4" => $this->input->post ("service_4" , true) ,
                    "service_4_amount" => $this->input->post ("service_4" , true) ? $this->input->post ("service_4_amount" , true) ? $this->input->post ("service_4_amount" , true) : "0" : "0" ,
                    "service_5" => $this->input->post ("service_5" , true) ,
                    "service_5_amount" => $this->input->post ("service_5" , true) ? $this->input->post ("service_5_amount" , true) ? $this->input->post ("service_5_amount" , true) : "0" : "0" ,
                    "service_6" => $this->input->post ("service_6" , true) ,
                    "service_6_amount" => $this->input->post ("service_6" , true) ? $this->input->post ("service_6_amount" , true) ? $this->input->post ("service_6_amount" , true) : "0" : "0" ,
                    "service_7" => $this->input->post ("service_7" , true) ,
                    "service_7_amount" => $this->input->post ("service_7" , true) ? $this->input->post ("service_7_amount" , true) ? $this->input->post ("service_7_amount" , true) : "0" : "0" ,
                    "service_8" => $this->input->post ("service_8" , true) ,
                    "service_8_amount" => $this->input->post ("service_8" , true) ? $this->input->post ("service_8_amount" , true) ? $this->input->post ("service_8_amount" , true) : "0" : "0" ,
                    "service_9" => $this->input->post ("service_9" , true) ,
                    "service_9_amount" => $this->input->post ("service_9" , true) ? $this->input->post ("service_9_amount" , true) ? $this->input->post ("service_9_amount" , true) : "0" : "0" ,
                    "service_10" => $this->input->post ("service_10" , true) ,
                    "service_10_amount" => $this->input->post ("service_10" , true) ? $this->input->post ("service_10_amount" , true) ? $this->input->post ("service_10_amount" , true) : "0" : "0" ,
                    "service_11" => $this->input->post ("service_11" , true) ,
                    "service_11_amount" => $this->input->post ("service_11" , true) ? $this->input->post ("service_11_amount" , true) ? $this->input->post ("service_11_amount" , true) : "0" : "0" ,
                    "service_12" => $this->input->post ("service_12" , true) ,
                    "service_12_amount" => $this->input->post ("service_12" , true) ? $this->input->post ("service_12_amount" , true) ? $this->input->post ("service_12_amount" , true) : "0" : "0" ,
                    "service_13" => $this->input->post ("service_13" , true) ,
                    "service_13_amount" => $this->input->post ("service_13" , true) ? $this->input->post ("service_13_amount" , true) ? $this->input->post ("service_13_amount" , true) : "0" : "0" ,
                    "service_14" => $this->input->post ("service_14" , true) ,
                    "service_14_amount" => $this->input->post ("service_14" , true) ? $this->input->post ("service_14_amount" , true) ? $this->input->post ("service_14_amount" , true) : "0" : "0" ,
                );

                $this->db->where ("m_id" , $data[ "id" ]);

                $this->db->update ("merchant_duty" , $subdata);

                redirect (base_url ("main/duty"));
            }

            $this->smarty->view ('duty' , $data);
        }

        public
        function product_update ($e = 1)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $page = 10;

            $limit = ( $e * $page ) - $page;

            $link = "https://" . $_SERVER[ 'HTTP_HOST' ] . "" . $_SERVER[ 'REQUEST_URI' ];

            if ( $this->input->post () ) {

                if (
                    ! $this->input->post ("stock" , true) && $this->input->post ("url" , true) && $this->input->post ("id" , true) && $this->input->post ("amount" , true)
                ) {

                    $subdata = array (
                        "url" => $this->input->post ("url" , true) ,
                        "mid" => $data[ 'id' ] ,
                        "pid" => $this->input->post ("id" , true) ,
                        "amount" => $this->input->post ("amount" , true)
                    );

                    $this->db->where ("pid" , $this->input->post ("id" , true));

                    $this->db->where ("mid" , $data[ 'id' ]);

                    $sdata = $this->db->get ("product_amount");

                    if ( $sdata->num_rows () > 0 ) {

                        $this->db->where ("pid" , $this->input->post ("id" , true));

                        $this->db->where ("mid" , $data[ 'id' ]);

                        $this->db->update ("product_amount" , $subdata);

                    } else {

                        $this->db->insert ("product_amount" , $subdata);

                    }

                } else {

                    if ( $this->input->post ("id" , true) && $this->input->post ("stock" , true) && $this->input->post ("amount" , true) && $this->input->post ("year" , true) ) {

                        $subdata = array (
                            "stock" => $this->input->post ("stock" , true) ,
                            "amount" => $this->input->post ("amount" , true) ,
                            "mid" => $data[ 'id' ] ,
                            "pid" => $this->input->post ("id" , true) ,
                            "year" => $this->input->post ("year" , true)
                        );

                        $this->db->where ("pid" , $this->input->post ("id" , true));

                        $this->db->where ("mid" , $data[ 'id' ]);

                        $sdata = $this->db->get ("product_amount");

                        if ( $sdata->num_rows () > 0 ) {

                            $this->db->where ("pid" , $this->input->post ("id" , true));

                            $this->db->where ("mid" , $data[ 'id' ]);

                            $this->db->update ("product_amount" , $subdata);

                        } else {

                            $this->db->insert ("product_amount" , $subdata);
                        }

                    } else {

                        if ( ! $this->input->post ("stock" , true) && ! $this->input->post ("amount" , true) ) {

                            $this->db->where ("pid" , $this->input->post ("id" , true));

                            $this->db->where ("mid" , $data[ 'id' ]);

                            $sdata = $this->db->get ("product_amount");

                            if ( $sdata->num_rows () > 0 ) {

                                $this->db->delete ("product_amount" , array ( "pid" => $this->input->post ("id" , true) , "mid" => $data[ 'id' ] ));
                            }
                        }

                    }

                }

                redirect ($this->input->post ("link"));
            }

            $arr = array (
                'title' => self::getSeo ("product_update_title")->name ,
                "keywords" => self::getSeo ("product_update_keywords")->name ,
                "description" => self::getSeo ("product_update_description")->name ,
                "complete" => $e ,
                "total" => $this->db->get ("product")->num_rows () ,
                "page" => ceil ($this->db->get ("product")->num_rows () / $page) ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "category" => self::getCacheData ("brand") ,
                "link" => $link ,
                "select_tire_rate" => self::getCacheData ("tire_rate") ,
                "select_tire_width" => self::getCacheData ("tire_width") ,
                "select_rim_diameter" => self::getCacheData ("rim_diameter") ,
                "select_speed_index" => self::getCacheData ("speed_index") ,
                "select_season" => self::getCacheData ("season") ,
                "select_category" => self::getCacheData ("category") ,

            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            $data[ "list" ] = $this->db->query ("select * from product order by id desc limit $limit, $page")->result ();

            $this->smarty->view ('product_update' , $data);
        }

        public
        function merchant_search ($t , $e = 1)
        {

            $page = 50;
            $limit = ( $e * $page ) - $page;

            $city = $this->input->get ("city" , true);
            $state = $this->input->get ("state" , true);

            $cityDb = $this->db->get_where ("city" , array ( "id" => $city ))->row ();
            $stateDb = $this->db->get_where ("state" , array ( "id" => $state ))->row ();

            $search = array ();

            if ( $t == 1 ) {

                // Lastik search

                if ( $this->input->get ("city" , true) && $this->input->get ("state" , true) ) {

                    $search = array ( "merchant.city" => $this->input->get ("city" , true) , "merchant.state" => $this->input->get ("state" , true) );

                } elseif ( $this->input->get ("city" , true) ) {

                    $search = array ( "merchant.city" => $this->input->get ("city" , true) );

                } elseif ( $this->input->get ("state" , true) ) {

                    $search = array ( "merchant.state" => $this->input->get ("state" , true) );
                }

                $this->db->select ('*');
                $this->db->join ('merchant_duty' , 'merchant.id = merchant_duty.m_id');
                $this->db->limit ($limit , $page);
                $this->db->where ("merchant.status" , "normal");

                $query = $this->db->get_where ("merchant" , $search);

            } elseif ( $t == 2 ) {

                if ( $this->input->get ("city" , true) && $this->input->get ("state" , true) ) {

                    $search = array ( "merchant.city" => $this->input->get ("city" , true) , "merchant.state" => $this->input->get ("state" , true) );

                } elseif ( $this->input->get ("city" , true) ) {

                    $search = array ( "merchant.city" => $this->input->get ("city" , true) );

                } elseif ( $this->input->get ("state" , true) ) {

                    $search = array ( "merchant.state" => $this->input->get ("state" , true) );
                }

                $this->db->select ('*');
                $this->db->join ('merchant_duty' , 'merchant.id = merchant_duty.m_id');
                $this->db->join ('merchant_detail' , 'merchant.id = merchant_detail.merchartID');
                $this->db->limit ($limit , $page);
                $this->db->where ("merchant_detail.words" , "brand_aku");
                $this->db->where ("merchant.status" , "normal");

                $query = $this->db->get_where ("merchant" , $search);
            } else if ( $t == 3 ) {

                // Lastik search

                if ( $this->input->get ("city" , true) && $this->input->get ("state" , true) ) {

                    $search = array ( "merchant.city" => $this->input->get ("city" , true) , "merchant.state" => $this->input->get ("state" , true) );

                } elseif ( $this->input->get ("city" , true) ) {

                    $search = array ( "merchant.city" => $this->input->get ("city" , true) );

                } elseif ( $this->input->get ("state" , true) ) {

                    $search = array ( "merchant.state" => $this->input->get ("state" , true) );
                }

                $this->db->select ('*');
                $this->db->join ('merchant_duty' , 'merchant.id = merchant_duty.m_id');
                $this->db->limit ($limit , $page);
                $this->db->where ("merchant.status" , "normal");
                $this->db->where ("merchant.sales" , $this->input->get ("sales" , true));

                $query = $this->db->get_where ("merchant" , $search);

            }

            $title = "";
            $keywords = "";
            $description = "";

            switch ( $t ) {

                case "1":

                    $city_param = $this->input->get ("city" , true) ? ucfirst (mb_strtolower ($cityDb->city)) . " ili" : 'Türkiyede';
                    $state_param = $this->input->get ("state" , true) ? ucfirst (mb_strtolower ($stateDb->state)) . " ilçesinde" : '';

                    $state_param_last = $this->input->get ("state" , true) ? " " . mb_strtolower ($stateDb->state) : '';

                    $app = ! $this->input->get ("state" , true) ? "nde" : "";

                    $title = $city_param . $app . " " . $state_param . " bulunan lastik bayileri";

                    $keywords = ucfirst (mb_strtolower ($cityDb->city)) . $state_param_last . " lastikçileri," . ucfirst (mb_strtolower ($cityDb->city)) . $state_param_last . " lastik bayileri," . ucfirst (mb_strtolower ($cityDb->city)) . $state_param_last . " lastik satıcıları";

                    $description = $city_param . $app . " " . $state_param . " bulunan bütün lastik bayilerine burdan ulaşabilirsiniz.";

                    break;

                case "2":

                    $city_param = $this->input->get ("city" , true) ? ucfirst (mb_strtolower ($cityDb->city)) . " ili" : 'Türkiyede';
                    $state_param = $this->input->get ("state" , true) ? ucfirst (mb_strtolower ($stateDb->state)) . " ilçesinde" : '';
                    $state_param_last = $this->input->get ("state" , true) ? " " . mb_strtolower ($stateDb->state) : '';

                    $app = ! $this->input->get ("state" , true) ? "nde" : "";

                    $title = $city_param . $app . " " . $state_param . " de bulunan akü bayileri";

                    $keywords = ucfirst (mb_strtolower ($cityDb->city)) . $state_param_last . " akücüleri ," . ucfirst (mb_strtolower ($cityDb->city)) . $state_param_last . " akü bayileri," . ucfirst (mb_strtolower ($cityDb->city)) . $state_param_last . " akü satıcıları";

                    $description = $city_param . $app . " " . $state_param . " bulunan bütün akü bayilerine burdan ulaşabilirsiniz.";

                    break;

                case "3":

                    $city_param = $this->input->get ("city" , true) ? ucfirst (mb_strtolower ($cityDb->city)) . " ili" : 'Türkiyede';
                    $state_param = $this->input->get ("state" , true) ? ucfirst (mb_strtolower ($stateDb->state)) . " ilçesinde" : '';
                    $state_param_last = $this->input->get ("state" , true) ? " " . mb_strtolower ($stateDb->state) : '';

                    $app = ! $this->input->get ("state" , true) ? "nde" : "";

                    $title = $city_param . $app . " " . $state_param . " de bulunan satıcılar";

                    $keywords = ucfirst (mb_strtolower ($cityDb->city)) . $state_param_last . " akücüleri ," . ucfirst (mb_strtolower ($cityDb->city)) . $state_param_last . " akü bayileri," . ucfirst (mb_strtolower ($cityDb->city)) . $state_param_last . " akü satıcıları";

                    $description = $city_param . $app . " " . $state_param . " bulunan bütün akü bayilerine burdan ulaşabilirsiniz.";

                    break;
            }

            $arr = array (
                'title' => $title ,
                "keywords" => $keywords ,
                "description" => $description ,
                "complete" => $e ,
                "searchs" => $query->result () ,
                "total" => $query->num_rows () ,
                "page" => ceil ($query->num_rows () / $page) ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "ads" => array (
                    "reklam_6" => self::getSeo ("reklam_6")->name ,
                )
            );

            $this->smarty->view ('merchant_search' , $arr);

        }

        public
        function merchants_search ($m , $e = 1)
        {
            $page = 10;

            $limit = ( $e * $page ) - $page;

            $merchant = $this->db->get_where ("merchant" , array ( "uri" => $m ))->row_array ();

            if (
                $this->input->get ("brand" , true) ||
                $this->input->get ("tire_width" , true) ||
                $this->input->get ("tire_rate" , true) ||
                $this->input->get ("rim_diameter" , true) ||
                $this->input->get ("speed_index" , true) ||
                $this->input->get ("season" , true) ||
                $this->input->get ("city" , true) ||
                $this->input->get ("state" , true) ||
                $this->input->get ("category" , true)
            ) {

                $this->db->select ('*');
                $this->db->from ('product_amount');
                $this->db->join ('product' , 'product_amount.pid = product.id');

                if ( $this->input->get ("brand" , true) ) {
                    $this->db->where ("brand" , $this->input->get ("brand" , true));
                }

                if ( $this->input->get ("tire_width" , true) ) {
                    $this->db->where ("tire_width" , $this->input->get ("tire_width" , true));
                }

                if ( $this->input->get ("tire_rate" , true) ) {
                    $this->db->where ("tire_rate" , $this->input->get ("tire_rate" , true));
                }

                if ( $this->input->get ("rim_diameter" , true) ) {
                    $this->db->where ("rim_diameter" , $this->input->get ("rim_diameter" , true));
                }

                if ( $this->input->get ("speed_index" , true) ) {
                    $this->db->where ("speed_index" , $this->input->get ("speed_index" , true));
                }

                if ( $this->input->get ("season" , true) ) {
                    $this->db->where ("season" , $this->input->get ("season" , true));
                }

                if ( $this->input->get ("category" , true) ) {
                    $this->db->where ("category" , $this->input->get ("category" , true));
                }

                $this->db->where ("mid" , $merchant[ "id" ]);
                $this->db->limit ($limit , $page);
                $search = $this->db->get ();

            } else {

                $this->db->select ('*');
                $this->db->from ('product_amount');
                $this->db->join ('product' , 'product_amount.pid = product.id');
                $this->db->where ("mid" , $merchant[ "id" ]);
                $this->db->limit ($limit , $page);
                $search = $this->db->get ();

            }

            $data = array (
                'title' => $merchant[ "company" ] . " Lastik Arama Motoru" ,
                "keywords" => "Lastik Arama Motoru" ,
                "description" => "Lastik Arama Motoru" ,
                "complete" => $e ,
                "searchs" => $search->result () ,
                "total" => $search->num_rows () ,
                "page" => ceil ($search->num_rows () / $page) ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "merchant" => $merchant , "ads" => array (
                    "reklam_7" => self::getSeo ("reklam_7")->name ,
                ) ,
                "select_brand" => self::getCacheData ("brand") ,
                "select_tire_rate" => self::getCacheData ("tire_rate") ,
                "select_tire_width" => self::getCacheData ("tire_width") ,
                "select_rim_diameter" => self::getCacheData ("rim_diameter") ,
                "select_speed_index" => self::getCacheData ("speed_index") ,
                "select_season" => self::getCacheData ("season") ,
                "select_category" => self::getCacheData ("category") ,
                "select_patern" => $this->db->get_where ("patern" , array ( "brand" => $this->input->get ("brand" , true) ))->result ()

            );

            $this->smarty->view ('merchants_search' , $data);
        }

        public
        function search ($e = 1)
        {

            $page = 50;

            $arr = array ();

            $limit = ( $e * $page ) - $page;

            if ( $this->input->get ("menu") != "on" ) {

                if ( $this->input->get ("keywords" , true) ) {

                    $search = $this->db->query ("select * from product where name like '%{$this->input->get ("keywords" , true)}%' order by id desc limit {$limit}, {$page}");
                    $search2 = $this->db->query ("select * from product where name like '%{$this->input->get ("keywords" , true)}%'");

                } elseif (
                    $this->input->get ("car" , true) ||
                    $this->input->get ("car_model" , true)
                ) {

                    $search = $this->db->query ("select * from product where car like '%{$this->input->get ("car_model" , true)}%' order by id desc limit {$limit},{$page}");
                    $search2 = $this->db->query ("select * from product where car like '%{$this->input->get ("car_model" , true)}%'");

                } elseif (
                    $this->input->get ("brand" , true) ||
                    $this->input->get ("tire_width" , true) ||
                    $this->input->get ("tire_rate" , true) ||
                    $this->input->get ("rim_diameter" , true) ||
                    $this->input->get ("speed_index" , true) ||
                    $this->input->get ("season" , true) ||
                    $this->input->get ("city" , true) ||
                    $this->input->get ("patern" , true) ||
                    $this->input->get ("state" , true) ||
                    $this->input->get ("category" , true)
                ) {

                    if ( $this->input->get ("city" , true) ) {

                        if ( $this->input->get ("brand" , true) ) {
                            $this->db->where ("brand" , $this->input->get ("brand" , true));
                        }

                        if ( $this->input->get ("tire_width" , true) ) {
                            $this->db->where ("tire_width" , $this->input->get ("tire_width" , true));
                        }

                        if ( $this->input->get ("tire_rate" , true) ) {
                            $this->db->where ("tire_rate" , $this->input->get ("tire_rate" , true));
                        }

                        if ( $this->input->get ("rim_diameter" , true) ) {
                            $this->db->where ("rim_diameter" , $this->input->get ("rim_diameter" , true));
                        }

                        if ( $this->input->get ("speed_index" , true) ) {
                            $this->db->where ("speed_index" , $this->input->get ("speed_index" , true));
                        }

                        if ( $this->input->get ("season" , true) ) {
                            $this->db->where ("season" , $this->input->get ("season" , true));
                        }

                        if ( $this->input->get ("category" , true) ) {
                            $this->db->where ("category" , $this->input->get ("category" , true));
                        }

                        if ( $this->input->get ("patern" , true) ) {
                            $this->db->where ("patern" , $this->input->get ("patern" , true));
                        }

                        $this->db->select ('
                        product.id,
                        product.id as proid,
                        product.uri,
                        product.name,
                        product.description,
                        product.keywords,
                        product.brand,
                        product.patern,
                        product.rim_diameter,
                        product.tire_rate,
                        product.tire_width,
                        product.speed_index,
                        product.season,
                        product.year,
                        product.category,
                        product.guvenlik,
                        product.tasarruf,
                        product.konfor,
                        product.hit,
                        product_amount.mid,
                        product_amount.pid,
                        product_amount.amount,
                        merchant.id,
                        merchant.city,
                        merchant.state
                    ');
                        $this->db->join ('product_amount' , 'product.id = product_amount.pid');
                        $this->db->join ('merchant' , 'product_amount.mid = merchant.id');
                        if ( $this->input->get ("state" , true) ) {
                            $this->db->where ('merchant.state' , $this->input->get ("state" , true));
                        }

                        $this->db->where ('merchant.city' , $this->input->get ("city" , true));
                        $this->db->group_by ('product_amount.pid');
                        $this->db->order_by ('product_amount.amount' , 'asc');

                        $search = $this->db->limit ($page , $limit)->get ("product");

                        $this->db->select ('
                        product.id,
                        product.id as proid,
                        product.uri,
                        product.name,
                        product.description,
                        product.keywords,
                        product.brand,
                        product.rim_diameter,
                        product.tire_rate,
                        product.tire_width,
                        product.speed_index,
                        product.season,
                        product.year,
                        product.patern,
                        product.category,
                        product.guvenlik,
                        product.tasarruf,
                        product.konfor,
                        product.hit,
                        product_amount.mid,
                        product_amount.pid,
                        product_amount.amount,
                        merchant.id,
                        merchant.city,
                        merchant.state
                    ');
                        $this->db->join ('product_amount' , 'product.id = product_amount.pid');
                        $this->db->join ('merchant' , 'product_amount.mid = merchant.id');
                        if ( $this->input->get ("state" , true) ) {
                            $this->db->where ('merchant.state' , $this->input->get ("state" , true));
                        }

                        $this->db->where ('merchant.city' , $this->input->get ("city" , true));
                        $this->db->group_by ('product_amount.pid');
                        $this->db->order_by ('product_amount.amount' , 'asc');

                        $search2 = $this->db->get ("product");

                    } else {

                        if ( $this->input->get ("brand" , true) ) {
                            $this->db->where ("brand" , $this->input->get ("brand" , true));
                        }

                        if ( $this->input->get ("tire_width" , true) ) {
                            $this->db->where ("tire_width" , $this->input->get ("tire_width" , true));
                        }

                        if ( $this->input->get ("tire_rate" , true) ) {
                            $this->db->where ("tire_rate" , $this->input->get ("tire_rate" , true));
                        }

                        if ( $this->input->get ("rim_diameter" , true) ) {
                            $this->db->where ("rim_diameter" , $this->input->get ("rim_diameter" , true));
                        }

                        if ( $this->input->get ("speed_index" , true) ) {
                            $this->db->where ("speed_index" , $this->input->get ("speed_index" , true));
                        }

                        if ( $this->input->get ("season" , true) ) {
                            $this->db->where ("season" , $this->input->get ("season" , true));
                        }

                        if ( $this->input->get ("category" , true) ) {
                            $this->db->where ("category" , $this->input->get ("category" , true));
                        }

                        if ( $this->input->get ("patern" , true) ) {
                            $this->db->where ("patern" , $this->input->get ("patern" , true));
                        }

                        $search = $this->db->limit ($page , $limit)->get ("product");

                        if ( $this->input->get ("brand" , true) ) {
                            $this->db->where ("brand" , $this->input->get ("brand" , true));
                        }

                        if ( $this->input->get ("tire_width" , true) ) {
                            $this->db->where ("tire_width" , $this->input->get ("tire_width" , true));
                        }

                        if ( $this->input->get ("tire_rate" , true) ) {
                            $this->db->where ("tire_rate" , $this->input->get ("tire_rate" , true));
                        }

                        if ( $this->input->get ("rim_diameter" , true) ) {
                            $this->db->where ("rim_diameter" , $this->input->get ("rim_diameter" , true));
                        }

                        if ( $this->input->get ("speed_index" , true) ) {
                            $this->db->where ("speed_index" , $this->input->get ("speed_index" , true));
                        }

                        if ( $this->input->get ("season" , true) ) {
                            $this->db->where ("season" , $this->input->get ("season" , true));
                        }

                        if ( $this->input->get ("category" , true) ) {
                            $this->db->where ("category" , $this->input->get ("category" , true));
                        }

                        if ( $this->input->get ("patern" , true) ) {
                            $this->db->where ("patern" , $this->input->get ("patern" , true));
                        }

                        $search2 = $this->db->get ("product");

                    }

                } else {

                    $search = $this->db->limit ($page , $limit)->get ("product");
                    $search2 = $this->db->get ("product");

                }

            } else {

                $query = $this->db->like ('name' , $this->input->get ("keywords" , true))->limit ($page , $limit)->get ("product");

                foreach ( $query->result () as $row ) {

                    $arr[ ] = $row;

                }

                foreach ( $this->db->like ('merchant.company' , $this->input->get ("keywords" , true))->join ("merchant_duty" , "merchant_duty.m_id=merchant.id")->get ('merchant')->result () as $row ) {

                    $arr [ ] = $row;
                }

                $search2 = ( ( $this->db->like ('name' , $this->input->get ("keywords" , true))->get ("product")->num_rows () ) + ( $this->db->like ('company' , $this->input->get ("keywords" , true))->get ("merchant")->num_rows () ) );

            }

            $total = $this->input->get ("menu") != "on" ? $search2->num_rows () : $search2;

            $data = array (
                'title' => "Lastik Arama Motoru" ,
                "keywords" => "Lastik Arama Motoru" ,
                "description" => "Lastik Arama Motoru" ,
                "complete" => $e ,
                "searchs" => $this->input->get ("menu") != "on" ? $search->result () : $arr ,
                "total" => $total ,
                "page" => ceil ($total / $page) ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "ads" => array (
                    "reklam_3" => self::getSeo ("reklam_3")->name ,
                ) ,
                "populer_lastik" => $this->db->join ("product" , "product.id = product_amount.pid")->order_by ("product.hit" , "desc")->limit (3)->get_where ("product_amount")->result () ,
                "select_brand" => self::getCacheData ("brand") ,
                "select_tire_rate" => self::getCacheData ("tire_rate") ,
                "select_tire_width" => self::getCacheData ("tire_width") ,
                "select_rim_diameter" => self::getCacheData ("rim_diameter") ,
                "select_speed_index" => self::getCacheData ("speed_index") ,
                "select_season" => self::getCacheData ("season") ,
                "select_category" => self::getCacheData ("category") ,
                "select_patern" => $this->db->get_where ("patern" , array ( "brand" => $this->input->get ("brand" , true) ))->result ()
            );


            $this->smarty->view ('search' , $data);

        }

        public function speed_search ($keyw)
        {
            $arr = array ();

            if ( ! $keyw )
                $arr = array ();

            $keyw = urldecode ($keyw);

            $query = $this->db->like ('name' , $keyw)->get ("product");

            foreach ( $query->result () as $row ) {

                $arr[ ] = array (
                    "name" => ucfirst ($row->name) ,
                    "website-link" => base_url ("/genel/lastik/" . $row->uri)
                );

            }

            foreach ( $this->db->like ('title' , $keyw)->get_where ("e_product" , array ( "status" => "active" ))->result () as $row ) {
                $arr[ ] = array (
                    "name" => ucfirst ($row->title) ,
                    "website-link" => base_url ("/main/urunler/" . $this->db->get_where ("merchant" , array ( "id" => $row->userID ))->row ()->uri . "/" . $row->uri)
                );
            }

            foreach ( $this->db->like ('company' , $keyw)->get ('merchant')->result () as $row ) {

                $arr[ ] = array (
                    "name" => ucfirst ($row->company) ,
                    "website-link" => base_url ("/genel/bayi/" . $row->uri)
                );
            }

            header ('Content-Type: application/json');

            echo json_encode ($arr);

        }

        public
        function product_search ($e = 1)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $page = 10;

            $limit = ( $e * $page ) - $page;

            $link = "https://" . $_SERVER[ 'HTTP_HOST' ] . "" . $_SERVER[ 'REQUEST_URI' ];

            if ( $this->input->post () ) {

                if (
                    $this->input->post ("url" , true) && $this->input->post ("id" , true)
                ) {

                    $subdata = array (
                        "url" => $this->input->post ("url" , true) ,
                        "mid" => $data[ 'id' ] ,
                        "pid" => $this->input->post ("id" , true)
                    );

                    $this->db->where ("pid" , $this->input->post ("id" , true));

                    $this->db->where ("mid" , $data[ 'id' ]);

                    $sdata = $this->db->get ("product_amount");

                    if ( $sdata->num_rows () > 0 ) {

                        $this->db->where ("pid" , $this->input->post ("id" , true));

                        $this->db->where ("mid" , $data[ 'id' ]);

                        $this->db->update ("product_amount" , $subdata);

                    } else {

                        $this->db->insert ("product_amount" , $subdata);

                    }

                } else {

                    if ( $this->input->post ("id" , true) && $this->input->post ("stock" , true) && $this->input->post ("amount" , true) ) {

                        $subdata = array (
                            "stock" => $this->input->post ("stock" , true) ,
                            "amount" => $this->input->post ("amount" , true) ,
                            "mid" => $data[ 'id' ] ,
                            "pid" => $this->input->post ("id" , true)
                        );

                        $this->db->where ("pid" , $this->input->post ("id" , true));

                        $this->db->where ("mid" , $data[ 'id' ]);

                        $sdata = $this->db->get ("product_amount");

                        if ( $sdata->num_rows () > 0 ) {

                            $this->db->where ("pid" , $this->input->post ("id" , true));

                            $this->db->where ("mid" , $data[ 'id' ]);

                            $this->db->update ("product_amount" , $subdata);

                        } else {

                            $this->db->insert ("product_amount" , $subdata);
                        }

                    }

                }
            }

            $arr = array (
                'title' => self::getSeo ("product_search_title")->name ,
                "keywords" => self::getSeo ("product_search_keywords")->name ,
                "description" => self::getSeo ("product_search_description")->name ,
                "complete" => $e ,
                "total" => null ,
                "page" => null ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "category" => self::getCacheData ("brand") ,
                "link" => $link ,
                "select_tire_rate" => self::getCacheData ("tire_rate") ,
                "select_tire_width" => self::getCacheData ("tire_width") ,
                "select_rim_diameter" => self::getCacheData ("rim_diameter") ,
                "select_speed_index" => self::getCacheData ("speed_index") ,
                "select_season" => self::getCacheData ("season") ,
                "select_category" => self::getCacheData ("category") ,
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            // Result
            if ( $this->input->get ("search" , true) ) {
                $this->db->like ("name" , $this->input->get ("search" , true) , 'both');
            }
            if ( $this->input->get ("category" , true) ) {
                $this->db->where ("brand" , $this->input->get ("category" , true));
            }
            if ( $this->input->get ("tire_width" , true) ) {
                $this->db->where ("tire_width" , $this->input->get ("tire_width" , true));
            }
            if ( $this->input->get ("tire_rate" , true) ) {
                $this->db->where ("tire_rate" , $this->input->get ("tire_rate" , true));
            }
            if ( $this->input->get ("rim_diameter" , true) ) {
                $this->db->where ("rim_diameter" , $this->input->get ("rim_diameter" , true));
            }
            if ( $this->input->get ("season" , true) ) {
                $this->db->where ("season" , $this->input->get ("season" , true));
            }
            $this->db->limit ($page , $limit);
            $this->db->order_by ('id' , 'desc');
            $list = $this->db->get ("product");


            // Pagination Count
            if ( $this->input->get ("search" , true) ) {
                $this->db->like ("name" , $this->input->get ("search" , true) , 'both');
            }
            if ( $this->input->get ("category" , true) ) {
                $this->db->where ("brand" , $this->input->get ("category" , true));
            }
            if ( $this->input->get ("tire_width" , true) ) {
                $this->db->where ("tire_width" , $this->input->get ("tire_width" , true));
            }
            if ( $this->input->get ("tire_rate" , true) ) {
                $this->db->where ("tire_rate" , $this->input->get ("tire_rate" , true));
            }
            if ( $this->input->get ("rim_diameter" , true) ) {
                $this->db->where ("rim_diameter" , $this->input->get ("rim_diameter" , true));
            }
            if ( $this->input->get ("season" , true) ) {
                $this->db->where ("season" , $this->input->get ("season" , true));
            }
            $total = $this->db->get ("product");

            $data[ "list" ] = $list->result ();
            $data[ "total" ] = $total->num_rows ();
            $data[ "page" ] = ceil ($total->num_rows () / $page);

            $this->smarty->view ('product_search' , $data);

        }

        public
        function product ($e , $page = "main")
        {

            if ( ! $e )
                redirect (base_url ("main"));

            $this->load->library ('Memcached_library');
            if ( $cache = $this->memcached_library->get ("product_" . $e) === false ) {
                $data = $this->db->get_where ("product" , array ( "uri" => $e ))->row_array ();
                $this->memcached_library->add ("product_" . $e , $data , 10);
            } else {
                $data = $this->memcached_library->get ("product_" . $e);
            }

            $this->db->query ("update product set hit=hit+1 where id='{$data['id']}'");

            $arr = array (
                'title' => $data[ "name" ] ,
                "keywords" => $data[ "keywords" ] ,
                "description" => $data[ "description" ] ,
                "select_img" => $this->db->get_where ("product_img" , array ( "patern_id" => $data[ 'patern' ]  ))->result () ,
                "online_merchants" => $this->db->select ('*, product_amount.year as year')->from ('product_amount')->join ('merchant' , 'product_amount.mid = merchant.id')->join ('product' , 'product_amount.pid = product.id')->where ('product_amount.stock' , '0')->where ('product_amount.pid' , $data[ 'id' ])->order_by ('product_amount.amount' , 'asc')->get ()->result () ,
                "normal_merchants" => $this->db->select ('*, product_amount.year as year')->from ('product_amount')->join ('merchant' , 'product_amount.mid = merchant.id')->join ('product' , 'product_amount.pid = product.id')->where ('product_amount.url' , '')->where ('product_amount.pid' , $data[ 'id' ])->order_by ('product_amount.amount' , 'asc')->get ()->result () ,
                "comment" => $this->db->order_by ("id" , "desc")->get_where ("comment" , array ( "type" => "product" , "status" => "1" , "c_id" => $data[ 'id' ] ))->result () ,
                "message" => "" ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "ads" => array (
                    "reklam_4" => self::getSeo ("reklam_4")->name ,
                    "reklam_5" => self::getSeo ("reklam_5")->name ,
                ) ,
                "cheap" => array (
                    "price" => $this->db->order_by ("amount" , "asc")->get_where ("product_amount" , array ( "pid" => $data[ "id" ] ))->row_array () ,
                ) ,
                "comments" => array (
                    "number" => $this->db->get_where ("comment" , array ( "type" => "product" , "c_id" => $data[ "id" ] , "status" => "1" ))->num_rows ()
                ) ,
                "page" => $page ,
                "cLastik" => $this->db->get_where ("comment" , array ( "type" => "product" , "c_id" => $data[ 'id' ] ))->result () ,
                "offers" => $this->db->like ('name' , explode (" " , $data[ "name" ])[ 0 ] . " " . explode (" " , $data[ "name" ])[ 1 ] , 'both')->get ("product" , 4 , 0)->result () ,
                "offers_last" => $this->db->like ('name' , explode (" " , $data[ "name" ])[ 0 ] . " " . explode (" " , $data[ "name" ])[ 1 ] , 'both')->get ("product" , 4 , 4)->result ()
            );

            if ( $this->input->post () ) {

                if (
                    $this->input->post ("name" , true) &&
                    $this->input->post ("subject" , true) &&
                    $this->input->post ("text" , true) &&
                    $this->input->post ("type" , true)
                ) {

                    $ar = array (
                        "name" => $this->input->post ("name" , true) ,
                        "subject" => $this->input->post ("subject" , true) ,
                        "text" => $this->input->post ("text" , true) ,
                        "type" => $this->input->post ("type" , true) ,
                        "c_id" => $data[ 'id' ] ,
                        "rating" => $this->input->post ("rating" , true) ,
                        "status" => 0
                    );

                    if ( $this->db->insert ("comment" , $ar) ) {

                        $arr[ "message" ] = "Tebrikler, yorumunuz eklenmiştir. Editör tarafından onaylandıkdan sonra yayınlanacaktır.";
                    }
                } else {

                    $arr[ "message" ] = "Üzgünüm, lütfen bilgileri doldurarak yeniden gönderiniz!";
                }
            }

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            $this->smarty->view ('product' , $data);
        }


        public function deleteStock ($id)
        {

            if ( ! $this->session->userdata ('logged_in') )
                die( "Access Denid" );

            $data = $this->db->get ("merchant" , array ( "email" => $this->session->userdata ('email') ))->row_array ();

            if ( ! $id && ! $data[ "id" ] )
                die( "Not ID" );

            if ( $this->db->get_where ('product_amount' , array ( 'pid' => $id , 'mid' => $data[ "id" ] ))->num_rows () > 0 ) {

                if ( $this->db->delete ('product_amount' , array ( 'pid' => $id , 'mid' => $data[ "id" ] )) ) {

                    echo json_encode (array (
                        'code' => 'SUC' ,
                        'text' => 'İşlem yapıldı.'
                    ));

                } else

                    echo json_encode (array (
                        'code' => 'ERR' ,
                        'text' => 'Stok boşaltılamadı! Yeniden deneyiniz.'
                    ));

            } else {

                echo json_encode (array (
                    'code' => 'ERR' ,
                    'text' => 'Hata! Stok boşaltılamadı! Yeniden deneyiniz.'
                ));
            }
        }

        public
        function ares_ajax ($e)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));
            $data = $this->db->get ("merchant")->row_array ();
            $data = array (
                "all_stocks" => $this->db->get_where ("product_amount" , array ( "mid" => $data[ "id" ] ))->result () ,
                "requested_stock" => $this->db->get_where ("product_amount" , array ( "pid" => $_POST[ "pid" ] ))->result () ,
            );


            if ( isset( $_POST[ 'process' ] ) ) {
                // empty stock
                if ( $_POST[ 'process' ] == 'empty_stock' ) {
                    if ( $data[ 'requested_stock' ] != '' && count ($data[ 'requested_stock' ]) > 0 ) {
                        $detete_id = $data[ 'requested_stock' ][ 0 ]->id;
                        $this->db->delete ('product_amount' , array ( 'id' => $detete_id ));
                        echo 'ok';
                        //echo json_encode(array('ok'));
                    } else {
                        //echo json_encode(array('Geçersiz stok.'));
                    }
                }
                // empty stock

            }
            $this->smarty->view ('ares_ajax' , $data);
        }

        public
        function page ($e)
        {

            if ( ! $e )
                redirect (base_url ("main"));

            $this->db->where ("uri" , $e);

            $data = $this->db->get ("page")->row_array ();

            $arr = array (
                'title' => $data[ "subject" ] ,
                "keywords" => $data[ "subject" ] ,
                "description" => $data[ "subject" ] ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2)
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }
            if ( $arr[ 'title' ] == 'Bize Ulaşın' ) {
                $this->smarty->view ('page-contact' , $data);
            } elseif ( $arr[ 'title' ] == 'İllere Göre Lastik Bul' ) {
                $this->smarty->view ('page-maps' , $data);
            } else {
                $this->smarty->view ('page' , $data);
            }

        }

        public function postComment ()
        {
            $arr = array ();

            if ( $this->input->post () ) {

                if (
                    $this->input->post ("name" , true) &&
                    $this->input->post ("subject" , true) &&
                    $this->input->post ("text" , true) &&
                    $this->input->post ("type" , true)
                ) {

                    $query = $this->db->insert ("comment" , array (
                        "name" => $this->input->post ("name" , true) ,
                        "subject" => $this->input->post ("subject" , true) ,
                        "text" => $this->input->post ("text" , true) ,
                        "type" => $this->input->post ("type" , true) ,
                        "c_id" => $this->input->post ("merchantID" , true) ,
                        "rating" => $this->input->post ("rating" , true) ,
                        "status" => ! $this->input->post ("status" , true) ? 0 : $this->input->post ("status" , true) ,
                        "like" => 0 ,
                        "unlike" => 0 ,
                    ));

                    if ( $query ) {

                        $arr[ "message" ] = array (
                            "code" => "SUC" ,
                            "text" => "Tebrikler, yorumunuz eklenmiştir. Editör tarafından onaylandıkdan sonra yayınlanacaktır."
                        );

                    } else {

                        $arr[ "message" ] = array (
                            "code" => "ERR" ,
                            "text" => "Hay aksi, bir problem var. Yeniden deneyiniz.."
                        );
                    }

                } else {

                    $arr[ "message" ] = array (
                        "code" => "ERR" ,
                        "text" => "Üzgünüm, lütfen bilgileri doldurarak yeniden gönderiniz!"
                    );
                }

                echo json_encode ($arr);

            } else {

                show_404 ();
            }

        }

        public
        function merchant ($e)
        {

            if ( ! $e )
                redirect (base_url ("main"));

            $query = $this->db->get_where ("merchant" , array ( "uri" => $e ));

            if ( ! $query->num_rows () && $query->num_rows () < 1 )
                redirect (base_url ("main"));

            $data = $query->row_array ();

            $this->db->query ("update merchant set hit=hit+1 where id='{$data['id']}'");

            $arr = array (
                'title' => $data[ "company" ] ,
                "keywords" => $data[ "keywords" ] ,
                "description" => $data[ "description" ] ,
                "gallery" => $this->db->get_where ("gallery" , array ( "merchantID" => $data[ "id" ] ))->result () ,
                "brand" => self::getCacheData ("brand") ,
                "brand_aku" => $this->db->get ("brand_aku")->result () ,
                "comment" => $this->db->query ("select * from comment where type='merchant' && status='1' && c_id='{$data['id']}' order by id desc")->result () ,
                "message" => "" ,
                "merchant" => $this->db->get_where ("merchant_duty" , array ( "m_id" => $data[ "id" ] ))->row () ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "select_brand" => self::getCacheData ("brand") ,
                "select_tire_rate" => self::getCacheData ("tire_rate") ,
                "select_tire_width" => self::getCacheData ("tire_width") ,
                "select_rim_diameter" => self::getCacheData ("rim_diameter") ,
                "select_speed_index" => self::getCacheData ("speed_index") ,
                "select_season" => self::getCacheData ("season") ,
                "select_category" => self::getCacheData ("category") ,
                "ratings" => ceil ($this->db->query ("select sum(rating) as total from comment where type='merchant' && c_id='{$data['id']}' && status='1'")->row ()->total / $this->db->query ("select * from comment where type='merchant' && rating >'0' && c_id='{$data['id']}' && status='1'")->num_rows ()) ,
                "merchantID" => $data[ 'id' ] ,
                "category" => $this->db->get_where ("e_category" , array ( "userID" => $data[ 'id' ] , "status" => "active" ))->result () ,
                "commentNum" => $this->db->query ("select * from comment where type='merchant' && status='1' && c_id='{$data['id']}' order by id desc")->num_rows () ,
                "populer_lastik" => $this->db->join ("product" , "product.id = product_amount.pid")->order_by ("product.hit" , "desc")->limit (4)->get_where ("product_amount" , array ( "product_amount.mid" => $data[ "id" ] ))->result ()
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            $this->smarty->view ('merchant' , $data);

        }

        public
        function addmailing ()
        {

            if ( $this->input->post () ) {

                if ( $this->input->post ("email" , true) ) {

                    $this->db->where ("email" , $this->input->post ("email" , true));

                    $query = $this->db->get ("email");

                    if ( $query->num_rows () < 1 ) {

                        if ( $this->db->insert ("email" , array ( "email" => $this->input->post ("email" , true) )) ) {

                            redirect (base_url ("main?auth=1"));

                        }
                    } else {

                        redirect (base_url ("main?auth=2"));
                    }

                }
            }

        }

        public function lcontact ()
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $arr = array (
                'title' => $data[ "company" ] ,
                "keywords" => $data[ "keywords" ] ,
                "description" => $data[ "description" ] ,
                "gallery" => $this->db->get_where ("gallery" , array ( "merchantID" => $data[ "id" ] ))->result () ,
                "brand" => self::getCacheData ("brand") ,
                "brand_aku" => $this->db->get ("brand_aku")->result () ,
                "comment" => $this->db->query ("select * from comment where type='merchant' && status='1' && c_id='{$data['id']}' order by id desc")->result () ,
                "message" => "" ,
                "merchant" => $this->db->get_where ("merchant_duty" , array ( "m_id" => $data[ "id" ] ))->row () ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "select_brand" => self::getCacheData ("brand") ,
                "select_tire_rate" => self::getCacheData ("tire_rate") ,
                "select_tire_width" => self::getCacheData ("tire_width") ,
                "select_rim_diameter" => self::getCacheData ("rim_diameter") ,
                "select_speed_index" => self::getCacheData ("speed_index") ,
                "select_season" => self::getCacheData ("season") ,
                "select_category" => self::getCacheData ("category") ,
                "ratings" => ceil ($this->db->query ("select sum(rating) as total from comment where type='merchant' && c_id='{$data['id']}' && status='1'")->row ()->total / $this->db->query ("select * from comment where type='merchant' && c_id='{$data['id']}' && status='1'")->num_rows ()) ,
            );

            if ( $this->input->post () ) {

                if (
                    $this->input->post ("name" , true) &&
                    $this->input->post ("email" , true) &&
                    $this->input->post ("text" , true)
                ) {

                    if ( $this->db->insert ("message" , array (
                        "name" => $this->input->post ("name" , true) ,
                        "email" => $this->input->post ("email" , true) ,
                        "text" => $this->input->post ("text" , true) ,
                        "type" => 10
                    ))
                    ) {

                        $arr[ "message" ] = array (
                            "code" => 1 ,
                            "msg" => "Tebrikler, mesajınız yerine ulaşmıştır."
                        );

                    } else {

                        $arr[ "message" ] = array (
                            "code" => 2 ,
                            "msg" => "Üzgünüm, gönderdiğiniz verilerde boş alana rastladık. Lütfen yeniden giriniz!"
                        );
                    }

                } else {

                    redirect (base_url ("main/lcontact"));
                }
            }

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            $this->smarty->view ('lcontact' , $data);

        }

        public function marca ()
        {

            $data = array (
                'title' => "Lastik Markaları" ,
                "keywords" => "tüm lastik markaları, lastik markaları, lastikler, lastikin adı" ,
                "description" => "Türkiyedeki tüm lastik markalarını bulabileceğiniz lastikkent.com sitesi" ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "brand" => self::getCacheData ("brand")
            );

            $this->smarty->view ('marka' , $data);

        }

        public function sales ()
        {

            $data = array (
                'title' => "Lastik Satıcıları" ,
                "keywords" => "lastik satıcıları, lastik bayileri,bütün lastik satıcıları" ,
                "description" => "Türkiyedeki tüm lastik satıcıları ulaşabilirsiniz" ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "sales" => $this->db->get ("sales")->result ()
            );

            $this->smarty->view ('sales' , $data);

        }

        public function sales_detail ($e)
        {

            if ( ! $e )
                redirect (base_url ('/lastik-saticilari'));

            $query = $this->db->get_where ("sales" , array ( "id" => $e ));

            if ( $query->num_rows () > 0 ) {

                $data = array (
                    'title' => $query->row ()->name . "" ,
                    "keywords" => $query->row ()->name . "," . $query->row ()->name . " hakkında, " . $query->row ()->name . " bilgileri, " . $query->row ()->name . " bayileri, " . $query->row ()->name . " ucuz lastikleri" ,
                    "description" => $query->row ()->name . " hakkında detaylı bilgilere ulaşabilir ve bütün bayilerini buradan görebilirsiniz" ,
                    "phone" => self::getSeo ("phone")->name ,
                    "email_sistem" => self::getSeo ("email")->name ,
                    "email_sales" => self::getSeo ("email_sales")->name ,
                    "adresss" => self::getSeo ("adress")->name ,
                    "pages" => self::getCachePage (1) ,
                    "pages2" => self::getCachePage (2) ,
                    "select_brand" => self::getCacheData ("brand") ,
                    "select_tire_rate" => self::getCacheData ("tire_rate") ,
                    "select_tire_width" => self::getCacheData ("tire_width") ,
                    "select_rim_diameter" => self::getCacheData ("rim_diameter") ,
                    "select_speed_index" => self::getCacheData ("speed_index") ,
                    "select_season" => self::getCacheData ("season") ,
                    "select_category" => self::getCacheData ("category") ,
                    "sales" => $query->row () ,
                    "comment" => $this->db->order_by ('id' , 'asc')->get_where ("comment" , array ( "type" => "sales" , "c_id" => $e , "status" => "1" ))->result () ,
                );

                $this->smarty->view ('sales_detail' , $data);

            } else {

                redirect (base_url ('/lastik-saticilari'));
            }

        }

        public function marca_detail ($e)
        {

            if ( ! $e )
                redirect (base_url ('/lastik-markalari'));

            $query = $this->db->get_where ("brand" , array ( "id" => $e ));

            if ( $query->num_rows () > 0 ) {

                $data = array (
                    'title' => $query->row ()->name . " lastikleri" ,
                    "keywords" => $query->row ()->name . " lastikleri, " . $query->row ()->name . " lastik fiyatları, " . $query->row ()->name . " lastik ara, " . $query->row ()->name . " lastik bilgileri, " . $query->row ()->name . " ucuz lastikleri" ,
                    "description" => $query->row ()->name . "' lastikleri hakkında detaylı bilgilere ve " . $query->row ()->name . " markasına ait bütün lastiklere ulaşabilirsiniz." ,
                    "phone" => self::getSeo ("phone")->name ,
                    "email_sistem" => self::getSeo ("email")->name ,
                    "email_sales" => self::getSeo ("email_sales")->name ,
                    "adresss" => self::getSeo ("adress")->name ,
                    "pages" => self::getCachePage (1) ,
                    "pages2" => self::getCachePage (2) ,
                    "select_brand" => self::getCacheData ("brand") ,
                    "select_tire_rate" => self::getCacheData ("tire_rate") ,
                    "select_tire_width" => self::getCacheData ("tire_width") ,
                    "select_rim_diameter" => self::getCacheData ("rim_diameter") ,
                    "select_speed_index" => self::getCacheData ("speed_index") ,
                    "select_season" => self::getCacheData ("season") ,
                    "select_category" => self::getCacheData ("category") ,
                    "city" => self::getCacheData ("city") ,
                    "brand" => $query->row () ,
                    "comment" => $this->db->order_by ('id' , 'asc')->get_where ("comment" , array ( "type" => "marka" , "c_id" => $e , "status" => "1" ))->result () ,
                );

                $this->smarty->view ('marka_detail' , $data);

            } else {

                redirect (base_url ('/lastik-markalari'));
            }

        }

        public function comment_like ($type , $commentID)
        {

            $comment = $this->db->get_where ("comment" , array ( "id" => $commentID ));

            $arr = array ();

            if ( $comment->num_rows () > 0 ) {

                switch ( $type ) {

                    case "like":

                        if ( $this->session->userdata ('commentID_' . $commentID) === $commentID ) {

                            if ( $this->session->userdata ('type_' . $commentID) != "like" ) {

                                $this->db->where ("id" , $commentID);

                                if ( $this->db->update ("comment" , array (
                                    "like" => ( $comment->row ()->like ) + 1 ,
                                    "unlike" => ( $comment->row ()->unlike ) - 1
                                ))
                                ) {
                                    $comment = $this->db->get_where ("comment" , array ( "id" => $commentID ));

                                    $this->session->set_userdata ("type_" . $commentID , "like");

                                    $arr = array (
                                        "msg" => array (
                                            "code" => "SUC" ,
                                            "text" => "Beğeniniz sisteme kaydedilmiştir!"
                                        ) ,
                                        "data" => array (
                                            "like" => $comment->row ()->like ,
                                            "unlike" => $comment->row ()->unlike ,
                                        )
                                    );

                                } else {

                                    $arr = array (
                                        "msg" => array (
                                            "code" => "ERR" ,
                                            "text" => "Hay aksi, yeniden deneyiniz."
                                        )
                                    );

                                }

                            } else {

                                $arr = array (
                                    "msg" => array (
                                        "code" => "ERR" ,
                                        "text" => "Daha önce beğendiğinizi belirtmişsiniz."
                                    )
                                );
                            }

                        } else {

                            //Session empty

                            $this->db->where ("id" , $commentID);

                            if ( $this->db->update ("comment" , array (
                                "like" => ( $comment->row ()->like ) + 1 ,
                            ))
                            ) {
                                $comment = $this->db->get_where ("comment" , array ( "id" => $commentID ));

                                $this->session->set_userdata (array (
                                    "commentID_" . $commentID => $commentID ,
                                    "type_" . $commentID => "like" ,
                                ));

                                $arr = array (
                                    "msg" => array (
                                        "code" => "SUC" ,
                                        "text" => "Beğeniniz sisteme kaydedilmiştir!"
                                    ) ,
                                    "data" => array (
                                        "like" => $comment->row ()->like ,
                                        "unlike" => $comment->row ()->unlike ,
                                    )
                                );

                            } else {

                                $arr = array (
                                    "msg" => array (
                                        "code" => "ERR" ,
                                        "text" => "Hay aksi, yeniden deneyiniz."
                                    )
                                );

                            }

                        }


                        break;

                    case "unlike":

                        if ( $this->session->userdata ('commentID_' . $commentID) === $commentID ) {

                            if ( $this->session->userdata ('type_' . $commentID) != "unlike" ) {

                                $this->db->where ("id" , $commentID);

                                if ( $this->db->update ("comment" , array (
                                    "unlike" => ( $comment->row ()->unlike ) + 1 ,
                                    "like" => ( $comment->row ()->like ) - 1
                                ))
                                ) {
                                    $comment = $this->db->get_where ("comment" , array ( "id" => $commentID ));

                                    $this->session->set_userdata ("type_" . $commentID , "unlike");

                                    $arr = array (
                                        "msg" => array (
                                            "code" => "SUC" ,
                                            "text" => "İşleminiz sisteme kaydedilmiştir!"
                                        ) ,
                                        "data" => array (
                                            "like" => $comment->row ()->like ,
                                            "unlike" => $comment->row ()->unlike ,
                                        )
                                    );

                                } else {

                                    $arr = array (
                                        "msg" => array (
                                            "code" => "ERR" ,
                                            "text" => "Hay aksi, yeniden deneyiniz."
                                        )
                                    );

                                }

                            } else {

                                $arr = array (
                                    "msg" => array (
                                        "code" => "ERR" ,
                                        "text" => "Daha önce beğenmediğinizi belirtmişsiniz."
                                    )
                                );
                            }

                        } else {

                            //Session empty

                            $this->db->where ("id" , $commentID);

                            if ( $this->db->update ("comment" , array (
                                "unlike" => ( $comment->row ()->unlike ) + 1 ,
                            ))
                            ) {
                                $comment = $this->db->get_where ("comment" , array ( "id" => $commentID ));

                                $this->session->set_userdata (array (
                                    "commentID_" . $commentID => $commentID ,
                                    "type_" . $commentID => "unlike" ,
                                ));

                                $arr = array (
                                    "msg" => array (
                                        "code" => "SUC" ,
                                        "text" => "Beğeniniz sisteme kaydedilmiştir!"
                                    ) ,
                                    "data" => array (
                                        "like" => $comment->row ()->like ,
                                        "unlike" => $comment->row ()->unlike ,
                                    )
                                );

                            } else {

                                $arr = array (
                                    "msg" => array (
                                        "code" => "ERR" ,
                                        "text" => "Hay aksi, yeniden deneyiniz."
                                    )
                                );

                            }

                        }

                        break;

                }

            } else {

                $arr = array (
                    "msg" => array (
                        "code" => "ERR" ,
                        "text" => "Hay aksi böyle bir yorum bulunmuyor."
                    )
                );

            }

            echo json_encode ($arr);
        }

        // CART MODULE

        public function removeCart ()
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            if ( $this->input->post ("id" , true) ) {

                if ( $this->db->get_where ("e_cart" , array ( "id" => $this->input->post ("id" , true) , "userID" => $data[ 'id' ] ))->num_rows () > 0 ) {

                    if ( $this->db->delete ("e_cart" , array ( "id" => $this->input->post ("id" , true) , )) ) {

                        echo json_encode (array (
                            "code" => 'SUC' ,
                            "text" => 'Ürün sepetinizden çıkarılmıştır.'
                        ));

                    } else

                        echo json_encode (array (
                            "code" => 'ERR' ,
                            "text" => 'Ürün sepetinizden çıkarılamamıştır. Tekrar deneyiniz..'
                        ));

                } else {

                    echo json_encode (array (
                        "code" => 'ERR' ,
                        "text" => 'Üzgünüm, senin olmayan bir ürünü silemezsin!'
                    ));

                }

            } else

                show_404 ();
        }

        public function sepetim ()
        {

            if ( $this->input->post () ) {

                if ( $this->input->post ("cart" , true) && $this->input->post ("quantity" , true) ) {

                    $this->db->where ("id" , $this->input->post ("cart" , true));

                    if ( $this->db->update ("e_cart" , array ( "quantity" => $this->input->post ("quantity" , true) )) ) {

                        echo json_encode (array (
                            "isOK" => true
                        ));

                    } else {

                        echo json_encode (array (
                            "isOK" => false
                        ));
                    }


                    exit;
                }

                if ( $this->input->post ("sepetCount" , true) ) {

                    if ( ! $this->session->userdata ('logged_in') )
                        echo json_encode (array (
                            "count" => 0
                        ));

                    echo json_encode (array (
                        "count" => $this->db->get_where ("e_cart" , array ( "userID" => $this->db->get_where ("merchant" , array ( "email" => $this->session->userdata ('email') ))->row_array ()[ 'id' ] ))->num_rows ()
                    ));

                    exit;
                }

                if ( ! $this->session->userdata ('logged_in') ) {

                    echo json_encode (array (
                        'code' => "ERR" ,
                        'short' => "USR" ,
                        'text' => "Üzgünüm, giriş yapmadan sepeti kullanamazsınız! Lütfen, giriş yaparak yeniden deneyiniz!"
                    ));

                    exit;
                }

                if ( $this->input->post ("id" , true) && $this->input->post ("type" , true) && $this->input->post ("mid" , true) ) {

                    $user = $this->db->get_where ("merchant" , array ( "email" => $this->session->userdata ('email') ))->row_array ();

                    $postID = $this->input->post ("id" , true);

                    $postType = $this->input->post ("type" , true);

                    $postMID = $this->input->post ("mid" , true);

                    $postQuantity = ! $this->input->post ("quantity" , true) ? 1 : $this->input->post ("quantity" , true);

                    switch ( $postType ) {

                        case "2": // İkinci El Ürün

                            if ( $this->db->get_where ("e_cart" , array ( "userID" => $user[ 'id' ] , "p_id" => $postID , "p_type" => $postType ))->num_rows () ) {
                                echo json_encode (array (
                                    'code' => "ERR" ,
                                    'text' => "Daha önceden sepetinize eklemişsiniz. Sepetinize, gidiniz.." ,
                                    'cart' => $this->db->get_where ("e_cart" , array ( "userID" => $user[ 'id' ] ))->num_rows ()
                                ));
                                exit;
                            }

                            $cartQuery = $this->db->get_where ("e_cart" , array ( "p_id" => $postID , "p_type" => $postType ));

                            if ( $cartQuery->num_rows () < 1 ) {

                                $arr = array (
                                    "userID" => $user[ 'id' ] ,
                                    "p_id" => $postID ,
                                    "p_type" => $postType ,
                                    "m_id" => $this->db->get_where ("e_product" , array ( "id" => $postID ))->row ()->userID ,
                                    "quantity" => 1 ,
                                );

                                $this->db->set ('sure' , 'NOW()' , false);

                                if ( $this->db->insert ("e_cart" , $arr) ) {

                                    echo json_encode (array (
                                        'code' => "SUC" ,
                                        'text' => "Tebrikler, sepetinize ürün eklenmiştir. 10dk içinde satın almazsanız sepetinizden düşürülecektir!" ,
                                        'cart' => $this->db->get_where ("e_cart" , array ( "userID" => $user[ 'id' ] ))->num_rows ()
                                    ));

                                } else {

                                    echo json_encode (array (
                                        'code' => "ERR" ,
                                        'text' => "Üzgünüm, teknik bir sorun oluştu! Yeniden, deneyiniz.." ,
                                        'cart' => $this->db->get_where ("e_cart" , array ( "userID" => $user[ 'id' ] ))->num_rows ()
                                    ));
                                }

                            } else {

                                echo json_encode (array (
                                    'code' => "ERR" ,
                                    'text' => "Üzgünüm, şuan başka müşterinin sepetinde 10dk içinde satın almazsa kısa süre içerisinde sepetten düşecektir." ,
                                    'cart' => $this->db->get_where ("e_cart" , array ( "userID" => $user[ 'id' ] ))->num_rows ()
                                ));
                            }

                            break;

                        case "1":

                            if ( $this->db->get_where ("e_cart" , array ( "userID" => $user[ 'id' ] , "p_id" => $postID , "p_type" => $postType ))->num_rows () ) {
                                echo json_encode (array (
                                    'code' => "ERR" ,
                                    'text' => "Daha önceden sepetinize eklemişsiniz. Sepetinize, gidiniz.." ,
                                    'cart' => $this->db->get_where ("e_cart" , array ( "userID" => $user[ 'id' ] ))->num_rows ()
                                ));
                                exit;
                            }

                            $cartQuery = $this->db->select ("SUM(quantity) as toplam")->get_where ("e_cart" , array ( "p_id" => $postID , "p_type" => $postType ))->row ();

                            $product = $this->db->get_where ("product_amount" , array ( "pid" => $postID ))->row ();

                            $total = ( $product->stock - $cartQuery->toplam );

                            if ( $total > $postQuantity ) {


                                $arr = array (
                                    "userID" => $user[ 'id' ] ,
                                    "p_id" => $postID ,
                                    "p_type" => $postType ,
                                    "m_id" => $postMID ,
                                    "quantity" => $postQuantity ,
                                );

                                $this->db->set ('sure' , 'NOW()' , false);

                                if ( $this->db->insert ("e_cart" , $arr) ) {

                                    echo json_encode (array (
                                        'code' => "SUC" ,
                                        'text' => "Tebrikler, sepetinize ürün eklenmiştir. 10dk içinde satın almazsanız sepetinizden düşürülecektir!" ,
                                        'cart' => $this->db->get_where ("e_cart" , array ( "userID" => $user[ 'id' ] ))->num_rows ()
                                    ));

                                } else {

                                    echo json_encode (array (
                                        'code' => "ERR" ,
                                        'text' => "Üzgünüm, teknik bir sorun oluştu! Yeniden, deneyiniz.." ,
                                        'cart' => $this->db->get_where ("e_cart" , array ( "userID" => $user[ 'id' ] ))->num_rows ()
                                    ));
                                }

                            } else {

                                echo json_encode (array (
                                    'code' => "ERR" ,
                                    'text' => "Üzgünüm, yeterli bir stok bulunmuyor! 10dk sonra yeniden deneyiniz!" ,
                                    'cart' => $this->db->get_where ("e_cart" , array ( "userID" => $user[ 'id' ] ))->num_rows ()
                                ));
                            }

                            break;
                    }

                } else {

                    echo json_encode (array (
                        'code' => "ERR" ,
                        'text' => "Üzgünüm, bir sorunla karşılaşıldı. Yeniden deneyiniz.." ,
                        'cart' => 0
                    ));

                    exit;

                }

                exit;
            }

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $totalAmount = null;

            foreach ( $this->db->get_where ("e_cart" , array ( "userID" => $data[ "id" ] ))->result () as $row ) {

                $price = $this->db->get_where ("product_amount" , array ( "mid" => $row->m_id , "pid" => $row->p_id ))->row ();

                $totalAmount += ( $price->amount * $row->quantity );

            }

            $data = array (
                'title' => "Sepetim" ,
                "keywords" => "Sepetim" ,
                "description" => "Sepetim" ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "data" => $this->db->get_where ("e_cart" , array ( "userID" => $data[ 'id' ] ))->result () ,
                "totalAmount" => number_format ($totalAmount , 2 , ',' , '.') ,
                "genelAmount" => number_format ($totalAmount , 2 , ',' , '.')
            );

            $this->smarty->view ('cart' , $data);

        }

        // MERCHANT SALES PRODUCT

        public function merchant_sales ($uri , $type , $page = 1)
        {

            if ( ! $uri )
                redirect (base_url ("main"));

            $query = $this->db->get_where ("merchant" , array ( "uri" => $uri ));

            if ( ! $query->num_rows () && $query->num_rows () < 1 )
                redirect (base_url ("main"));

            $data = $query->row_array ();

            $str = null;

            $paged = ( ! $this->input->get ("show" , true) ? 12 : $this->input->get ("show" , true) ) * $page;

            $sort = ! $this->input->get ("sort" , true) ? array ( 'title' , 'asc' ) : explode ('.' , $this->input->get ("sort" , true));

            switch ( $type ) {

                case "urunler":

                    $categoryProduct = "Tüm Ürünler";

                    $num = ( $this->db->get_where ("e_product" , array ( "userID" => $data[ 'id' ] , "status" => "active" ))->num_rows () + $this->db->get_where ("product_amount" , array ( "mid" => $data[ 'id' ] ))->num_rows () );

                    $totalPage = ceil ($num / $paged);

                    $cpaged = ( ! $this->input->get ("show" , true) ? 6 : $this->input->get ("show" , true) ) * $page;

                    $limit = ( $page - 1 ) * $cpaged;

                    $sales = $this->db->order_by ($sort[ 0 ] , $sort[ 1 ])->get_where ("e_product" , array ( "userID" => $data[ 'id' ] , "status" => "active" ))->result ();

                    $lastik = $this->db->select ("*,product.id as pid, product_amount.amount as price,product.id as pimg,")->order_by ($sort[ 0 ] === "title" ? "name" : $sort[ 0 ] === "price" ? "product_amount.amount" : "product_amount.amount" , $sort[ 1 ])->join ("product" , "product_amount.pid = product.id")->get_where ("product_amount" , array ( "product_amount.mid" => $data[ 'id' ] ))->result ();

                    $product = array_merge ($sales , $lastik);

                    switch ( implode ('.' , $sort) ) {

                        case "price.asc":

                            $price = array ();
                            foreach ( $product as $key => $row ) {
                                $price[ $key ] = $row->price;
                            }
                            array_multisort ($price , SORT_ASC , $product);

                            break;

                        case "price.desc":

                            $price = array ();
                            foreach ( $product as $key => $row ) {
                                $price[ $key ] = $row->price;
                            }
                            array_multisort ($price , SORT_DESC , $product);

                            break;

                        default:

                            $price = array ();
                            foreach ( $product as $key => $row ) {
                                $price[ $key ] = $row->price;
                            }
                            array_multisort ($price , SORT_ASC , $product);

                            break;
                    }

                    $product = array_splice ($product , $limit , $paged);

                    break;

                case "lastik":

                    $categoryProduct = "Lastik";

                    $num = $this->db->get_where ("product_amount" , array ( "mid" => $data[ 'id' ] ))->num_rows ();

                    $totalPage = ceil ($num / $paged);

                    $limit = ( $page - 1 ) * $paged;

                    $str = (object)array ( "e_category" => "lastik" );

                    $product = $this->db->select ("*,product.id as pid, product_amount.amount as price")->limit ()->order_by ($sort[ 0 ] === "title" ? "name" : $sort[ 0 ] === "price" ? "product_amount.amount" : "product_amount.amount" , $sort[ 1 ])->join ("product" , "product_amount.pid = product.id")->get_where ("product_amount" , array ( "product_amount.mid" => $data[ 'id' ] ))->result ();

                    break;

                default:

                    $category = $this->db->get_where ("e_category" , array ( "uri" => $type ));

                    if ( $category->num_rows () < 1 )
                        redirect (base_url ("main"));

                    $categoryProduct = $category->row ()->name;

                    $str = (object)array ( "e_category" => $category->row ()->id );

                    $num = $this->db->get_where ("e_product" , array ( "userID" => $data[ 'id' ] , "status" => "active" , "e_category" => $category->row ()->id ))->num_rows ();

                    $totalPage = ceil ($num / $paged);

                    $limit = ( $page - 1 ) * $paged;

                    $product = $this->db->limit ($paged , $limit)->get_where ("e_product" , array ( "userID" => $data[ 'id' ] , "status" => "active" , "e_category" => $category->row ()->id ))->result ();

            }

            $arr = array (
                'title' => $data[ "company" ] . " Satılan " . $categoryProduct ,
                "keywords" => $data[ "keywords" ] . " Satılan Ürünler" ,
                "description" => $data[ "description" ] . " Satılan Ürünler" ,
                "gallery" => $this->db->get_where ("gallery" , array ( "merchantID" => $data[ "id" ] ))->result () ,
                "brand" => self::getCacheData ("brand") ,
                "brand_aku" => $this->db->get ("brand_aku")->result () ,
                "comment" => $this->db->query ("select * from comment where type='merchant' && status='1' && c_id='{$data['id']}' order by id asc")->result () ,
                "message" => "" ,
                "merchant" => $this->db->get_where ("merchant_duty" , array ( "m_id" => $data[ "id" ] ))->row () ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "category" => $this->db->get_where ("e_category" , array ( "userID" => $data[ 'id' ] , "status" => "active" ))->result () ,
                "productCategory" => $categoryProduct ,
                "product" => $str ,
                "data" => $product ,
                "totalPage" => $totalPage ,
                "page" => $page ,
                "type" => $type ,
                "req" => explode ('?' , $_SERVER[ 'REQUEST_URI' ])[ 1 ]
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            $this->smarty->view ('merchant_sales' , $data);

        }

        // MERCHANT PRODUCT

        public function urunler ($uri , $productUri)
        {
            if ( ! $uri )
                redirect (base_url ("main?e=product_uri"));

            $query = $this->db->get_where ("merchant" , array ( "uri" => $uri ));

            if ( ! $query->num_rows () )
                redirect (base_url ("main?e=merchant_uri"));

            $product = $this->db->get_where ("e_product" , array ( "uri" => $productUri ));
            if ( ! $product->num_rows () && $product->num_rows () < 1 )
                redirect (base_url ("main"));

            $data = $query->row_array ();

            $arr = array (
                'title' => ucfirst ($product->row ()->title) . " - Lastikkent.com.tr" ,
                "keywords" => substr (str_replace (' ' , ',' , $product->row ()->short_property) , 0 , 300) ,
                "description" => $product->row ()->short_property ,
                "message" => "" ,
                "merchant" => $this->db->get_where ("merchant_duty" , array ( "m_id" => $data[ "id" ] ))->row () ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "category" => $this->db->get_where ("e_category" , array ( "userID" => $data[ 'id' ] , "status" => "active" ))->result () ,
                "product" => $product->row () ,
                "productCategory" => $this->db->get_where ("e_category" , array ( "id" => $product->row ()->e_category ))->row () ,
                "images" => $this->db->get_where ("e_product_img" , array ( "productID" => $product->row ()->id ))->result ()
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            $this->smarty->view ('merchant_product' , $data);

        }


        // E-TICARET ACCOUNT

        public function my_category ()
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $arr = array (
                'title' => "Benim Oluşturduğumuz Kategoriler" ,
                "keywords" => self::getSeo ("profile_keywords")->name ,
                "description" => self::getSeo ("profile_description")->name ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "data" => $this->db->get_where ("e_category" , array ( "userID" => $data[ "id" ] ))->result ()
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            $this->smarty->view ('e_my_category' , $data);

        }

        public function my_category_delete ($id)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            if ( ! intval ($id) )
                redirect (base_url ("main/my_category"));

            $user = $this->db->get_where ("merchant" , array ( "email" => $this->session->userdata ('email') ))->row_array ();

            $query = $this->db->get_where ("e_category" , array ( "userID" => $user[ "id" ] , "id" => $id ));

            if ( $query->num_rows () > 0 ) {

                if ( $this->db->delete ("e_category" , array ( "id" => $id )) ) {

                    redirect (base_url ("main/my_category"));

                } else {

                    redirect (base_url ("main/my_category"));
                }

            } else {

                redirect (base_url ("main/my_category"));

            }

        }

        public function my_category_add ()
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $data = $this->db->get_where ("merchant" , array ( "email" => $this->session->userdata ('email') ))->row_array ();

            $arr = array (
                'title' => "Yeni Kategori Oluştur" ,
                "keywords" => self::getSeo ("profile_keywords")->name ,
                "description" => self::getSeo ("profile_description")->name ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2)
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            if ( $this->input->post () ) {

                if ( $this->input->post ("name" , true) ) {

                    $query = $this->db->get_where ("e_category" , array ( "uri" => $this->tools->permalink ($this->input->post ("name" , true)) ));

                    if ( $query->num_rows () < 1 ) {

                        $save = array (
                            "userID" => $data[ "id" ] ,
                            "name" => $this->input->post ("name" , true) ,
                            "uri" => $this->tools->permalink ($this->input->post ("name" , true))
                        );

                        if ( $this->db->insert ("e_category" , $save) ) {

                            redirect (base_url ("main/my_category"));

                        } else {

                            redirect (base_url ("main/my_category"));
                        }

                    } else {

                        redirect (base_url ("main/my_category"));

                    }
                }

            }

            $this->smarty->view ('e_my_category_add' , $data);

        }

        public function my_category_edit ($id)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            if ( ! intval ($id) )
                redirect (base_url ("main/my_category"));

            $data = $this->db->get_where ("merchant" , array ( "email" => $this->session->userdata ('email') ))->row_array ();

            $query = $this->db->get_where ("e_category" , array ( "userID" => $data[ "id" ] , "id" => $id ));

            if ( $query->num_rows () < 1 )
                redirect (base_url ("main/my_category"));

            $arr = array (
                'title' => "Kategori Düzenle" ,
                "keywords" => self::getSeo ("profile_keywords")->name ,
                "description" => self::getSeo ("profile_description")->name ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "cname" => $query->row ()->name
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            if ( $this->input->post () ) {

                if ( $this->input->post ("name" , true) ) {

                    $save = array (
                        "name" => $this->input->post ("name" , true) ,
                        "uri" => $this->tools->permalink ($this->input->post ("name" , true)) ,
                        "status" => "passive"
                    );

                    $this->db->where ("id" , $id);

                    if ( $this->db->update ("e_category" , $save) ) {

                        redirect (base_url ("main/my_category"));

                    } else {

                        redirect (base_url ("main/my_category"));
                    }

                }

            }

            $this->smarty->view ('e_my_category_add' , $data);

        }

        public function my_product ()
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $arr = array (
                'title' => "Benim Oluşturduğumuz Ürünler" ,
                "keywords" => self::getSeo ("profile_keywords")->name ,
                "description" => self::getSeo ("profile_description")->name ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "data" => $this->db->order_by ("id" , "desc")->get_where ("e_product" , array ( "userID" => $data[ 'id' ] ))->result ()
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            $this->smarty->view ('e_my_product' , $data);

        }

        public function my_product_delete ($id)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            if ( ! intval ($id) )
                redirect (base_url ("main/my_product"));

            if ( $this->db->delete ("e_product" , array ( "id" => $id , "userID" => $data[ 'id' ] )) ) {

                $this->db->delete ("e_product_img" , array ( "productID" => $id ));

                redirect (base_url ("main/my_product"));

            } else

                redirect (base_url ("main/my_product"));

        }

        public function my_product_add ()
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $arr = array (
                'title' => "Yeni İlan Oluştur" ,
                "keywords" => self::getSeo ("profile_keywords")->name ,
                "description" => self::getSeo ("profile_description")->name ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "category" => $this->db->get_where ("e_category" , array ( "userID" => $data[ "id" ] , "status" => "active" ))->result ()
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            if ( $this->input->post () ) {

                if (
                    $this->input->post ("category" , true) &&
                    $this->input->post ("title" , true) &&
                    $this->input->post ("price" , true) &&
                    $this->input->post ("short_property" , true) &&
                    $this->input->post ("property" , true) &&
                    $this->input->post ("knock_off" , true)
                ) {

                    if ( ! $this->input->post ("productID" , true) ) {

                        $arr = array (
                            "e_category" => $this->input->post ("category" , true) ,
                            "title" => $this->input->post ("title" , true) ,
                            "price" => $this->input->post ("price" , true) ,
                            "short_property" => $this->input->post ("short_property" , true) ,
                            "property" => $this->input->post ("property" , true) ,
                            "uri" => $this->tools->permalink ($this->input->post ("title" , true)) ,
                            "userID" => $data[ "id" ] ,
                            "productCode" => "LSTK" . $data[ "id" ] . "KNT" ,
                            "knock_off" => $this->input->post ("knock_off" , true) ,
                            "knock_off_type" => $this->input->post ("knock_off_type" , true) ,
                            "knock_off_price" => $this->input->post ("knock_off_price" , true) ,
                        );

                        if ( $this->db->insert ("e_product" , $arr) ) {

                            $lastID = $this->db->insert_id ();

                            $this->db->where ("id" , $lastID);

                            if ( $this->db->update ("e_product" , array (
                                "productCode" => "LSTK" . $data[ "id" ] . "KNT" . $lastID ,
                            ))
                            ) {

                                echo json_encode (array (
                                    "code" => "SUC" ,
                                    "productID" => $lastID ,
                                    "msg" => "Tebrikler, ilanınız eklendi."
                                ));

                            } else {

                                echo json_encode (array (
                                    "code" => "ERR" ,
                                    "productID" => 0 ,
                                    "msg" => "Üzgünüm, teknik bir sorunla karşılaşıldı! Yeniden deneyiniz.."
                                ));
                            }

                        } else {

                            echo json_encode (array (
                                "code" => "ERR" ,
                                "productID" => 0 ,
                                "msg" => "Üzgünüm, teknik bir sorunla karşılaşıldı! Yeniden deneyiniz.."
                            ));

                        }

                    } else {

                        $arr = array (
                            "e_category" => $this->input->post ("category" , true) ,
                            "title" => $this->input->post ("title" , true) ,
                            "price" => $this->input->post ("price" , true) ,
                            "short_property" => $this->input->post ("short_property" , true) ,
                            "property" => $this->input->post ("property") ,
                            "uri" => $this->tools->permalink ($this->input->post ("title" , true)) ,
                            "status" => "passive" ,
                            "knock_off" => $this->input->post ("knock_off" , true) ,
                            "knock_off_type" => $this->input->post ("knock_off_type" , true) ,
                            "knock_off_price" => $this->input->post ("knock_off_price" , true) ,
                        );

                        $this->db->where ("id" , $this->input->post ("productID" , true));

                        if ( $this->db->update ("e_product" , $arr) ) {

                            echo json_encode (array (
                                "code" => "SUC" ,
                                "productID" => $this->input->post ("productID" , true) ,
                                "msg" => "Tebrikler, ilanınız güncellendi."
                            ));

                        } else {

                            echo json_encode (array (
                                "code" => "ERR" ,
                                "productID" => 0 ,
                                "msg" => "Üzgünüm, teknik bir sorunla karşılaşıldı! Yeniden deneyiniz.."
                            ));

                        }

                    }

                } else {

                    echo json_encode (array (
                        "code" => "ERR" ,
                        "productID" => 0 ,
                        "msg" => "Üzgünüm, eksik yada hatalı bir data gönderiyorsunuz.! Yeniden deneyiniz.."
                    ));
                }

                exit;

            }

            $this->smarty->view ('e_my_product_add' , $data);
        }

        public function my_product_edit ($id)
        {

            if ( ! $this->session->userdata ('logged_in') )
                redirect (base_url ("main/login"));

            $this->db->where ("email" , $this->session->userdata ('email'));

            $data = $this->db->get ("merchant")->row_array ();

            $product = $this->db->get_where ("e_product" , array ( "id" => $id , "userID" => $data[ 'id' ] ));

            if ( $product->num_rows () < 1 )
                redirect (base_url ("main/my_product"));

            $arr = array (
                'title' => "İlan Düzenle" ,
                "keywords" => self::getSeo ("profile_keywords")->name ,
                "description" => self::getSeo ("profile_description")->name ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "category" => $this->db->get_where ("e_category" , array ( "userID" => $data[ "id" ] , "status" => "active" ))->result () ,
                "data" => $product->row () ,
                "image" => $this->db->get_where ("e_product_img" , array ( "productID" => $product->row ()->id ))->result ()
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            if ( $this->input->post () ) {

                if (
                    $this->input->post ("category" , true) &&
                    $this->input->post ("title" , true) &&
                    $this->input->post ("price" , true) &&
                    $this->input->post ("short_property" , true) &&
                    $this->input->post ("property" , true) &&
                    $this->input->post ("knock_off" , true)
                ) {

                    if ( $this->input->post ("productID" , true) ) {

                        $arr = array (
                            "e_category" => $this->input->post ("category" , true) ,
                            "title" => $this->input->post ("title" , true) ,
                            "price" => $this->input->post ("price" , true) ,
                            "short_property" => $this->input->post ("short_property" , true) ,
                            "property" => $this->input->post ("property") ,
                            "uri" => $this->tools->permalink ($this->input->post ("title" , true)) ,
                            "status" => "passive" ,
                            "knock_off" => $this->input->post ("knock_off" , true) ,
                            "knock_off_type" => $this->input->post ("knock_off_type" , true) ,
                            "knock_off_price" => $this->input->post ("knock_off_price" , true) ,
                        );

                        $this->db->where ("id" , $this->input->post ("productID" , true));

                        if ( $this->db->update ("e_product" , $arr) ) {

                            echo json_encode (array (
                                "code" => "SUC" ,
                                "productID" => $this->input->post ("productID" , true) ,
                                "msg" => "Tebrikler, ilanınız güncellendi."
                            ));

                        } else {

                            echo json_encode (array (
                                "code" => "ERR" ,
                                "productID" => 0 ,
                                "msg" => "Üzgünüm, teknik bir sorunla karşılaşıldı! Yeniden deneyiniz.."
                            ));

                        }

                    } else {
                        echo json_encode (array (
                            "code" => "ERR" ,
                            "productID" => 0 ,
                            "msg" => "Üzgünüm, eksik yada hatalı bir data gönderiyorsunuz.! Yeniden deneyiniz.."
                        ));
                    }

                } else {

                    echo json_encode (array (
                        "code" => "ERR" ,
                        "productID" => 0 ,
                        "msg" => "Üzgünüm, eksik yada hatalı bir data gönderiyorsunuz.! Yeniden deneyiniz.."
                    ));
                }

                exit;

            }

            $this->smarty->view ('e_my_product_edit' , $data);
        }

        public function product_upload ($cID)
        {
            //if ( ! $this->session->userdata ('admin_logged_in') || ! $this->session->userdata ('logged_in') )
            //exit;

            $this->load->library ('image_lib');

            if ( $this->db->get_where ("e_product" , array ( "id" => $cID ))->num_rows () < 1 )
                exit;

            if ( $cID ) {

                if ( $_FILES ) {

                    $dir = "assets/upload/" . date ("Ymd") . "/";

                    if ( ! file_exists ($dir) && ! is_dir ($dir) )
                        mkdir ($dir);

                    if ( $_FILES[ "file" ][ "name" ] ) {

                        $upload = $_FILES[ 'file' ][ 'tmp_name' ];

                        $rand = rand (112 , 99999);

                        $name = $dir . $rand . ".jpg";

                        $thumb = $dir . $rand . "_thumbs.jpg";

                        if ( move_uploaded_file ($upload , FCPATH . $name) ) {

                            $config = array (
                                'source_image' => $name ,
                                'new_image' => $thumb ,
                                'width' => 800 ,
                                'height' => 600 ,
                                'maintain_ratio' => false
                            );

                            $this->image_lib->thumb ($config , FCPATH);

                            if ( $this->db->insert ("e_product_img" , array ( "productID" => $cID , "uri" => $name )) ) {

                                echo json_encode ($this->db->get_where ("e_product_img" , array ( "productID" => $cID ))->result ());

                            } else

                                exit;
                        }
                    }
                }

            }

        }

        public function deleteImg ($imgID)
        {

            if ( $this->db->get_where ("e_product_img" , array ( "id" => $imgID ))->num_rows () < 1 )
                exit;

            if ( $this->db->delete ("e_product_img" , array ( "id" => $imgID )) ) {

                echo json_encode (array (
                    "errorCode" => "SUC" ,
                    "text" => "Tebrikler, seçtiğiniz resim şuan siliniyor. Lütfen, bekleyiniz.."
                ));

            } else {

                echo json_encode (array (
                    "errorCode" => "ERR" ,
                    "text" => "Üzgünüm, seçtiğiniz resim silinmedi! Yöneticiniz ile iletişime geçiniz"
                ));
            }

        }

        function thumb_create ($file , $width , $height , $quality)
        {
            try {
                /*** the image file ***/
                $image = $file;

                $exp = explode ('/' , $file);

                $id = explode ('.' , $exp[ 2 ])[ 0 ];

                /*** a new imagick object ***/
                $im = new Imagick();

                /*** ping the image ***/
                $im->pingImage ($image);

                /*** read the image into the object ***/
                $im->readImage ($image);

                /*** thumbnail the image ***/
                $im->thumbnailImage ($width , $height);

                $im->setImageFormat ('jpeg');
                $im->setImageCompression (Imagick::COMPRESSION_JPEG);
                $im->setImageCompressionQuality ($quality);

                /*** Write the thumbnail to disk ***/
                $im->writeImage ('assets/upload/' . $id . '_thumb.jpg');

                /*** Free resources associated with the Imagick object ***/
                $im->destroy ();

                return 'THUMB_' . $file;

            } catch ( Exception $e ) {
                print $e->getMessage ();

                return $file . "<br>";
            }
        }

        public function getThumb ()
        {

            foreach ( $this->db->get_where ("merchant" , array ( "logo !=" => "" ))->result () as $row ) {

                try {
                    self::thumb_create ($row->logo , 100 , 100 , 80);
                } catch ( ImagickException $e ) {
                    echo $e->getMessage ();
                }

            }
        }

        public function version ()
        {

            phpinfo ();

        }

        public
        function search_merchant ($merchantUri , $productUri , $type = "lastik")
        {

            if ( ! $merchantUri || ! $productUri )
                redirect (base_url ());

            if ( $this->db->get_where ("merchant" , array ( "uri" => $merchantUri ))->num_rows () < 1 || $this->db->get_where ("product" , array ( "uri" => $productUri ))->num_rows () < 1 )
                redirect (base_url ());

            $merchant = $this->db->get_where ("merchant" , array ( "uri" => $merchantUri ))->row_array ();

            $data = $this->db->get_where ("product" , array ( "uri" => $productUri ))->row_array ();

            $arr = array (
                'title' => $merchant[ "company" ] . " bayide " . $data[ "name" ] ,
                "keywords" => "Lastik Arama Motoru" ,
                "description" => "Lastik Arama Motoru" ,
                "merchantUri" => $merchantUri ,
                "productUri" => $productUri ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "select_img" => $this->db->get_where ("product_img" , array ( "patern_id" => $data[ 'patern' ] ))->result () ,
                "select_img_num" => $this->db->get_where ("product_img" , array ( "patern_id" => $data[ 'patern' ] ))->num_rows () ,
                "merchant" => $merchant ,
                "price" => $this->db->get_where ("product_amount" , array ( "mid" => $merchant[ "id" ] , "pid" => $data[ "id" ] ))->row_array () ,
                "ratings" => ceil ($this->db->query ("select sum(rating) as total from comment where type='merchant' && c_id='{$merchant["id"]}' && status='1'")->row ()->total / $this->db->query ("select * from comment where type='merchant' && rating >'0' && c_id='{$merchant["id"]}' && status='1'")->num_rows ()) ,
                "page" => $type ,
                "stars" => array (
                    "lastik" => $this->db->get_where ("comment" , array ( "type" => "product" , "c_id" => $data[ "id" ] ))->num_rows () ,
                    "marka" => $this->db->get_where ("comment" , array ( "type" => "marka" , "c_id" => $data[ "brand" ] ))->num_rows () ,
                    "bayi" => $this->db->get_where ("comment" , array ( "type" => "merchant" , "c_id" => $merchant[ "id" ] ))->num_rows ()
                ) ,
                "cLastik" => $this->db->order_by ('id' , 'desc')->get_where ("comment" , array ( "type" => "product" , "c_id" => $data[ 'id' ] ))->result () ,
                "cMarka" => $this->db->order_by ('id' , 'desc')->get_where ("comment" , array ( "type" => "marka" , "c_id" => $data[ "brand" ] ))->result () ,
                "cBayi" => $this->db->order_by ('id' , 'desc')->get_where ("comment" , array ( "type" => "merchant" , "c_id" => $merchant[ "id" ] ))->result () ,
            );

            foreach ( $arr as $key => $val ) {

                $data[ $key ] = $val;

            }

            $this->smarty->view ('search_merchant_product' , $data);

        }

        public function sitemap ()
        {
            header ("Content-Type:text/xml");

            echo '<urlset xmlns:xsi="https://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="https://www.fem14.tr.gg/schemas/sitemap/0.9 ' .
                'https://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">';

            echo "<url>" .
                "<loc>https://www.lastikkent.com.tr</loc>" .
                "<lastmod>2017-11-01</lastmod>" .
                "<changefreq>monthly</changefreq>" .
                "<priority>0.5</priority>" .
                "</url><url>" .
                "<loc>https://www.lastikkent.com.tr/sitemap.xml</loc>" .
                "<lastmod>2017-11-01</lastmod>" .
                "<changefreq>monthly</changefreq>" .
                "<priority>0.5</priority>" .
                "</url>";

            foreach ( $this->db->get ("product")->result () as $row ) {

                echo "<url>" .
                    "<loc>https://www.lastikkent.com.tr/genel/lastik/" . $row->uri . "</loc>" .
                    "<lastmod>" . str_replace (" " , "T" , $row->create_time) . "</lastmod>" .
                    "<changefreq>monthly</changefreq>" .
                    "<priority>0.5</priority>" .
                    "</url>" .
                    "<url>" .
                    "<loc>https://www.lastikkent.com.tr/genel/lastik/" . $row->uri . "/yorumlar</loc>" .
                    "<lastmod>" . str_replace (" " , "T" , $row->create_time) . "</lastmod>" .
                    "<changefreq>monthly</changefreq>" .
                    "<priority>0.5</priority>" .
                    "</url>" .
                    "<url>" .
                    "<loc>https://www.lastikkent.com.tr/genel/lastik/" . $row->uri . "/fiyatlar</loc>" .
                    "<lastmod>" . str_replace (" " , "T" , $row->create_time) . "</lastmod>" .
                    "<changefreq>monthly</changefreq>" .
                    "<priority>0.5</priority>" .
                    "</url>" .
                    "<url>" .
                    "<loc>https://www.lastikkent.com.tr/genel/lastik/" . $row->uri . "/etiket</loc>" .
                    "<lastmod>" . str_replace (" " , "T" , $row->create_time) . "</lastmod>" .
                    "<changefreq>monthly</changefreq>" .
                    "<priority>0.5</priority>" .
                    "</url>";

            }

            foreach ( $this->db->get ("merchant")->result () as $row ) {

                echo "<url>" .
                    "<loc>https://www.lastikkent.com.tr/genel/bayi/" . $row->uri . "</loc>" .
                    "<lastmod>" . str_replace (" " , "T" , $row->create_time) . "</lastmod>" .
                    "<changefreq>monthly</changefreq>" .
                    "<priority>0.5</priority>" .
                    "</url>";

            }

            foreach ( $this->db->get ("page")->result () as $row ) {

                echo "<url>" .
                    "<loc>https://www.lastikkent.com.tr/main/page/" . $row->uri . "</loc>" .
                    "<lastmod>" . date ("Y-m-d") . "</lastmod>" .
                    "<changefreq>monthly</changefreq>" .
                    "<priority>0.5</priority>" .
                    "</url>";

            }

            echo "</urlset>";
        }

        public function getpatern ()
        {

            $data = array ();
            $merchantID = "";

            if ( $this->input->post ("merchant" , true) )
                $merchantID = $this->input->post ("merchant" , true);

            if ( $this->input->post ("brand" , true) ) {

                if ( $this->input->post ("brand" , true) && ! $this->input->post ("category" , true) && ! $this->input->post ("season" , true) ) {

                    foreach ( $this->db->order_by ('paternName' , 'asc')->get_where ("patern" , array ( "brand" => $this->input->post ("brand" , true) ))->result () as $row ) {

                        if ( $merchantID ) {

                            if ( $this->db->select ("*")->join ("product_amount" , "product.id=product_amount.pid")->get_where ("product" , array ( "product.patern" => $row->id , "product_amount.mid" => $merchantID ))->num_rows () > 0 ) {

                                $data[ ] = array (
                                    "id" => $row->id ,
                                    "brand" => $row->brand ,
                                    "paternName" => $row->paternName ,
                                );
                            }

                        } else {

                            $data[ ] = array (
                                "id" => $row->id ,
                                "brand" => $row->brand ,
                                "paternName" => $row->paternName ,
                            );
                        }

                    }

                } else if ( $this->input->post ("brand" , true) && $this->input->post ("category" , true) && ! $this->input->post ("season" , true) ) {

                    foreach ( $this->db->group_by ('patern')->order_by ('patern' , 'asc')->get_where ("product" , array ( "brand" => $this->input->post ("brand" , true) , "category" => $this->input->post ("category" , true) ))->result () as $row ) {

                        if ( $merchantID ) {

                            if ( $this->db->select ("*")->join ("product_amount" , "product.id=product_amount.pid")->get_where ("product" , array ( "product.patern" => $row->id , "product_amount.mid" => $merchantID ))->num_rows () > 0 ) {

                                $data[ ] = array (
                                    "id" => $row->patern ,
                                    "brand" => $row->brand ,
                                    "paternName" => $this->db->get_where ("patern" , array ( "id" => $row->patern ))->row ()->paternName ,
                                );
                            }

                        } else {

                            $data[ ] = array (
                                "id" => $row->patern ,
                                "brand" => $row->brand ,
                                "paternName" => $this->db->get_where ("patern" , array ( "id" => $row->patern ))->row ()->paternName ,
                            );
                        }

                    }

                } else if ( $this->input->post ("brand" , true) && ! $this->input->post ("category" , true) && $this->input->post ("season" , true) ) {

                    foreach ( $this->db->group_by ('patern')->order_by ('patern' , 'asc')->get_where ("product" , array ( "brand" => $this->input->post ("brand" , true) , "season" => $this->input->post ("season" , true) ))->result () as $row ) {

                        if ( $merchantID ) {

                            if ( $this->db->select ("*")->join ("product_amount" , "product.id=product_amount.pid")->get_where ("product" , array ( "product.patern" => $row->id , "product_amount.mid" => $merchantID ))->num_rows () > 0 ) {

                                $data[ ] = array (
                                    "id" => $row->patern ,
                                    "brand" => $row->brand ,
                                    "paternName" => $this->db->get_where ("patern" , array ( "id" => $row->patern ))->row ()->paternName ,
                                );
                            }

                        } else {

                            $data[ ] = array (
                                "id" => $row->patern ,
                                "brand" => $row->brand ,
                                "paternName" => $this->db->get_where ("patern" , array ( "id" => $row->patern ))->row ()->paternName ,
                            );
                        }

                    }

                } else if ( $this->input->post ("brand" , true) && $this->input->post ("category" , true) && $this->input->post ("season" , true) ) {

                    $result = $this->db->group_by ('patern')->order_by ('patern' , 'asc')->get_where ("product" , array ( "brand" => $this->input->post ("brand" , true) , "category" => $this->input->post ("category" , true) , "season" => $this->input->post ("season" , true) ));

                    if ( $result->num_rows () > 0 ) {

                        foreach ( $result->result () as $row ) {

                            if ( $merchantID ) {

                                if ( $this->db->select ("*")->join ("product_amount" , "product.id=product_amount.pid")->get_where ("product" , array ( "product.patern" => $row->id , "product_amount.mid" => $merchantID ))->num_rows () > 0 ) {

                                    $data[ ] = array (
                                        "id" => $row->patern ,
                                        "brand" => $row->brand ,
                                        "paternName" => $this->db->get_where ("patern" , array ( "id" => $row->patern ))->row ()->paternName ,
                                    );
                                }

                            } else {

                                $data[ ] = array (
                                    "id" => $row->patern ,
                                    "brand" => $row->brand ,
                                    "paternName" => $this->db->get_where ("patern" , array ( "id" => $row->patern ))->row ()->paternName ,
                                );
                            }

                        }

                    } else {

                        foreach ( $this->db->order_by ('paternName' , 'asc')->get_where ("patern" , array ( "brand" => $this->input->post ("brand" , true) ))->result () as $row ) {

                            $data[ ] = array (
                                "id" => $row->id ,
                                "brand" => $row->brand ,
                                "paternName" => $row->paternName ,
                            );

                        }
                    }

                }

                echo json_encode ($data);

            } else

                show_404 ();
        }

        public function merchant_bayi ($type)
        {

            $data = array (
                "cityID" => $this->input->get ("city" , true) ,
                "stateID" => $this->input->get ("state" , true) ,
                "type" => $type ,
                "title" => "Bayi Arama Motoru" ,
                "keywords" => self::getSeo ("register_keywords")->name ,
                "description" => self::getSeo ("register_description")->name ,
                "phone" => self::getSeo ("phone")->name ,
                "email_sistem" => self::getSeo ("email")->name ,
                "email_sales" => self::getSeo ("email_sales")->name ,
                "adresss" => self::getSeo ("adress")->name ,
                "pages" => self::getCachePage (1) ,
                "pages2" => self::getCachePage (2) ,
                "data" => null
            );

            switch ( $type ) {

                case "aku";

                    if ( $this->input->get ("city" , true) || $this->input->get ("state" , true) ) {

                        if ( $this->input->get ("city" , true) ) {

                            $this->db->where("city",$this->input->get ("city" , true) );
                        }

                        if ( $this->input->get ("state" , true) ) {

                            $this->db->where("state",$this->input->get ("state" , true) );
                        }
                    }

                    $data["data"] = $this->db->select("*,merchant.id as mid")->order_by('merchant.hit','desc')->join("merchant_duty","merchant_duty.m_id=merchant.id")->join("merchant_detail", "merchant_detail.merchartID=merchant.id")->get_where("merchant", array("merchant_detail.words" => "brand_aku","merchant.accepts" =>"on"))->result();


                    break;

                case "lastik";
                default:

                    if ( $this->input->get ("city" , true) || $this->input->get ("state" , true) ) {

                        if ( $this->input->get ("city" , true) ) {

                            $this->db->where("city",$this->input->get ("city" , true) );
                        }

                        if ( $this->input->get ("state" , true) ) {

                            $this->db->where("state",$this->input->get ("state" , true) );
                        }
                    }

                    $data["data"] = $this->db->select("*,merchant.id as mid")->order_by('merchant.hit','desc')->join("merchant_duty","merchant_duty.m_id=merchant.id")->join("merchant_detail", "merchant_detail.merchartID=merchant.id")->get_where("merchant", array("merchant_detail.words" => "brand","merchant.accepts" =>"on"))->result();

                    break;
            }

            $this->smarty->view ('merchant_bayi_search' , $data);
        }

    }