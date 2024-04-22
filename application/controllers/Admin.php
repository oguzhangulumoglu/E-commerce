<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Europe/Istanbul');

/**
 * Created by PhpStorm.
 * User: ufukOzarslan
 * Date: 3.07.16
 * Time: 16:36
 */
class Admin extends CI_Controller
{

    public $data = array();
    public $SMTP_HOST = "ssl://smtp.yandex.com";
    public $SMTP_USER = "info@lastikkent.com.tr";
    public $SMTP_PASS = "Aziz2016";
    public $SMTP_PORT = "465";

    public function index()
    {
        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/main', array(
            "users" => $this->db->get_where("merchant", array('status' => 'users'))->num_rows(),
            "merchant" => $this->db->get_where("merchant", array('status !=' => 'users'))->num_rows(),
            "comments" => $this->db->get("comment")->num_rows(),
            "orders" => $this->db->get_where("orders", array("status" => 1))->num_rows(),
            "message" => $this->db->get_where("message", array("type" => 1))->num_rows(),
            "accepts" => $this->db->get_where("merchant", array("accepts" => "off"))->num_rows(),
            "message_admin" => $this->db->get_where("message", array("type" => 10))->num_rows(),
            "e_ticaret_category" => $this->db->get_where("e_category", array("status" => "passive"))->num_rows(),
            "e_ticaret_classfield" => $this->db->get_where("e_product", array("status" => "passive"))->num_rows(),
            "merchant_comments" => $this->db->get_where("comment", array("type" => "merchant"))->num_rows(),
            "product_comments" => $this->db->get_where("comment", array("type" => "product"))->num_rows(),
            "marca_comments" => $this->db->get_where("comment", array("type" => "marka"))->num_rows(),
            "sales_comments" => $this->db->get_where("comment", array("type" => "sales"))->num_rows(),
        ));
    }

    public function login()
    {

        if ($this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/"));

        $data = array();

        if ($this->input->post()) {

            if ($this->input->post("username", true) && $this->input->post("password", true)) {

                $users = $this->db->get_where("admin", array('username' => $this->input->post("username", true), 'password' => md5($this->input->post("password", true))));

                if ($users->num_rows() > 0) {
                    $user = array(
                        'username' => $this->input->post("username", true),
                        'admin_logged_in' => true,
                        'user_id' => $users->row()->id,
                        'status' => $users->row()->status,
                    );

                    $this->session->set_userdata($user);

                    redirect(base_url("admin"));

                } else {

                    $data = array(
                        "error" => 1,
                        "msg" => "Kullanıcı adınızı ve şifrenizi uyuşmuyor, lütfen yeniden deneyiniz!"
                    );
                }

            } else {

                $data = array(
                    "error" => 1,
                    "msg" => "Kullanıcı adınızı ve şifrenizi boş girmeyiniz!"
                );

            }

        }

        $this->smarty->view('admin/login', $data);

    }

    public function logout()
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->session->sess_destroy();

        redirect(base_url("admin/login"));

    }

    /**
     * @param Product Methods
     * @param strings
     */

    public function product($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $page = isset($page) ? (int)$page : 1;
        if ($page < 1)
            $page = 1;

        $this->load->library('Memcached_library');

        if ($this->input->get("category", true)) {
            $this->db->where("brand", $this->input->get("category", true));
        }
        if ($this->input->get("tire_width", true)) {
            $this->db->where("tire_width", $this->input->get("tire_width", true));
        }
        if ($this->input->get("tire_rate", true)) {
            $this->db->where("tire_rate", $this->input->get("tire_rate", true));
        }
        if ($this->input->get("rim_diameter", true)) {
            $this->db->where("rim_diameter", $this->input->get("rim_diameter", true));
        }
        if ($this->input->get("season", true)) {
            $this->db->where("season", $this->input->get("season", true));
        }
        if ($this->input->get("id_search", true)) {
            $this->db->where('id', $this->input->get("id_search", true));
        }
        if ($this->input->get("search", true)) {
            $this->db->like('name', $this->input->get("search", true), 'both');
        }

        $totalPage = $this->db->get("product")->num_rows();
        $pagedRow = 50;

        if ($page > $totalPage)
            $page = $totalPage;

        $limit = ($page - 1) * $pagedRow;
        $sayfa_goster = 8; // gösterilecek sayfa sayısı

        $en_az_orta = ceil($sayfa_goster / 2);
        $en_fazla_orta = ($totalPage + 1) - $en_az_orta;

        $sayfa_orta = $page;
        if ($sayfa_orta < $en_az_orta)
            $sayfa_orta = $en_az_orta;
        if ($sayfa_orta > $en_fazla_orta)
            $sayfa_orta = $en_fazla_orta;

        $sol_sayfalar = round($sayfa_orta - (($sayfa_goster - 1) / 2));
        $sag_sayfalar = round((($sayfa_goster - 1) / 2) + $sayfa_orta);

        if ($sol_sayfalar < 1)
            $sol_sayfalar = 1;
        if ($sag_sayfalar > $totalPage)
            $sag_sayfalar = $totalPage;

        if (!$this->input->get("short", true)) {
            $order = "id";
        } else {
            $order = $this->input->get("short", true);
        }

        if ($this->input->get("category", true)) {
            $this->db->where("brand", $this->input->get("category", true));
        }
        if ($this->input->get("tire_width", true)) {
            $this->db->where("tire_width", $this->input->get("tire_width", true));
        }
        if ($this->input->get("tire_rate", true)) {
            $this->db->where("tire_rate", $this->input->get("tire_rate", true));
        }
        if ($this->input->get("rim_diameter", true)) {
            $this->db->where("rim_diameter", $this->input->get("rim_diameter", true));
        }
        if ($this->input->get("season", true)) {
            $this->db->where("season", $this->input->get("season", true));
        }
        if ($this->input->get("id_search", true)) {
            $this->db->where('id', $this->input->get("id_search", true));
        }
        if ($this->input->get("search", true)) {
            $this->db->like('name', trim($this->input->get("search", true)), 'both');
        }

        $this->db->limit($pagedRow, $limit);
        $this->db->order_by($order, 'desc');

        $data = $this->db->get("product")->result_array();

        $this->smarty->view('admin/product', array(
            "results" => $data,
            "page" => $page,
            "totalRow" => ceil($totalPage / $pagedRow),
            "pagination_left" => $sol_sayfalar,
            "pagination_right" => $sag_sayfalar,
            "category" => self::getCacheData("brand"),
            "select_tire_rate" => self::getCacheData("tire_rate"),
            "select_tire_width" => self::getCacheData("tire_width"),
            "select_rim_diameter" => self::getCacheData("rim_diameter"),
            "select_speed_index" => self::getCacheData("speed_index"),
            "select_season" => self::getCacheData("season"),
            "select_category" => self::getCacheData("category"),
            "param" => $_SERVER['QUERY_STRING'],
        ));

    }

    /**
     * @param Comment Methods
     * @param strings
     */

    public function comments($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        switch ($page) {

            case "merchant":

                $title = "Bayiye yapılan yorumlar";

                break;

            case "product":

                $title = "Ürüne yapılan yorumlar";

                break;

            case "sales":

                $title = "Satıcıya yapılan yorumlar";

                break;

            case "marka":

                $title = "Markaya yapılan yorumlar";

                break;

        }

        $this->smarty->view('admin/comments', array(
            "type" => $page,
            "text" => $title
        ));

    }

    /**
     * @param Orders Methods
     * @param strings
     */

    public function orders($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/orders', $this->data);

    }

    public function orders_detail($e)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $query = $this->db->get_where("orders", array("id" => $e));

        if ($query->num_rows() < 1)
            redirect(base_url("admin/orders"));

        if ($this->input->post()) {

            if ($this->input->post("status", true)) {

                $this->db->where("id", $e);
                $this->db->update("orders", array(
                    "status" => $this->input->post("status", true)
                ));

            }

            redirect(base_url("admin/orders_detail/" . $e));

        }

        $row = $query->row_array();

        $this->smarty->view('admin/orders_detail', array(
            "order" => $row,
            "merchant" => $this->db->get_where("merchant", array("id" => $row["m_id"]))->row_array()
        ));
    }

    /**
     * @param Car Methods
     * @param strings
     */

    public function car($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/car', $this->data);

    }

    /**
     * @param Message Methods
     * @param strings
     */

    public function message($status = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/message', array(
            "status" => $status
        ));

    }

    /**
     * @param Page Methods
     * @param strings
     */

    public function page($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/page', $this->data);

    }

    /**
     * @param Seo Methods
     * @param strings
     */

    public function seo($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/seo', $this->data);

    }

    /**
     * @param Management Methods
     * @param strings
     */

    public function management($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/management', $this->data);

    }

    /**
     * @param Users Methods
     * @param strings
     */

    public function users($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/users', $this->data);

    }

    /**
     * @param Contract
     * @param strings
     */

    public function contract($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/contract', $this->data);

    }

    /**
     * @param Merchant Methods
     * @param strings
     */

    public function merchant($status = 2)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/merchant', array(
            "status" => $status
        ));

    }

    /**
     * @param Brand Methods
     * @param strings
     */

    public function brand($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/brand', $this->data);

    }

    public function sales($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/sales', $this->data);

    }

    public function brand_aku($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/brand_aku', $this->data);

    }

    /**
     * @param Rim Diameter Methods
     * @param strings
     */

    public function rim_diameter($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/rim_diameter', $this->data);

    }

    /**
     * @param Marca / Models Methods
     * @param strings
     */

    public function marca($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/marca', $this->data);

    }

    public function model($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/model', $this->data);

    }

    public function patern($brandid)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/patern', array(
            "brand" => $brandid
        ));

    }

    /**
     * @param Season Methods
     * @param strings
     */

    public function season($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/season', $this->data);

    }

    /**
     * @param Category Methods
     * @param strings
     */

    public function category($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/category', $this->data);

    }

    /**
     * @param Speed Index Methods
     * @param strings
     */

    public function speed_index($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/speed_index', $this->data);

    }

    /**
     * @param Tire_Rate Methods
     * @param strings
     */

    public function tire_rate($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/tire_rate', $this->data);

    }

    /**
     * @param Tire Width Methods
     * @param strings
     */

    public function tire_width($page = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/tire_width', $this->data);

    }

    /**
     * @param delete Methods
     * @param strings
     */

    public function delete($table, $value)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        switch ($table) {

            case "patern":

                if ($this->db->delete("patern", array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "marca":

                if ($this->db->delete("car", array('id' => $value))) {

                    $this->db->delete("car_model", array('make_id' => $value));

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "ilanlar_eticaret":

                if ($this->db->delete("e_product", array('id' => $value))) {

                    $this->db->delete("e_product_img", array('productID' => $value));

                    redirect(base_url("admin/e_ticaret/classfield/1"));

                } else

                    redirect(base_url("admin/e_ticaret/classfield/1"));

                break;

            case "onayla_ilanlar_eticaret":

                $this->db->where('id', $value);

                if ($this->db->update("e_product", array('status' => 'active'))) {

                    redirect(base_url("admin/e_ticaret/classfield/1"));

                } else

                    redirect(base_url("admin/e_ticaret/classfield/1"));

                break;

            case "category_eticaret":

                if ($this->db->delete("e_category", array('id' => $value))) {

                    redirect(base_url("admin/e_ticaret/category/1"));

                } else

                    redirect(base_url("admin/e_ticaret/category/1"));

                break;

            case "onayla_category_eticaret":

                $this->db->where('id', $value);

                if ($this->db->update("e_category", array('status' => 'active'))) {

                    redirect(base_url("admin/e_ticaret/category/1"));

                } else

                    redirect(base_url("admin/e_ticaret/category/1"));

                break;

            case "model":

                if ($this->db->delete("car_model", array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "management":

                if ($this->db->delete("admin", array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "message":

                if ($this->db->delete("message", array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "page":

                if ($this->db->delete("page", array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "brand":

                if ($this->db->delete($table, array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "sales":

                if ($this->db->delete($table, array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "comments":

                if ($this->db->delete("comment", array('id' => $value))) {

                    redirect(base_url("admin/comments"));

                } else

                    redirect(base_url("admin/comments?msg=1"));

                break;

            case "brand_aku":

                if ($this->db->delete($table, array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "rim_diameter":

                if ($this->db->delete($table, array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "season":

                if ($this->db->delete($table, array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "speed_index":

                if ($this->db->delete($table, array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "tire_rate":

                if ($this->db->delete($table, array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "product_img":

                $this->db->where("id", $value);

                $product = $this->db->get("product_img")->row();

                if ($this->db->delete($table, array('id' => $value))) {

                    redirect(base_url("admin/edit/product/" . $product->pid));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "orders":

                if ($this->db->delete("orders", array('id' => $value))) {

                    $this->db->delete("orders_detail", array('o_id' => $value));

                    redirect(base_url("admin/orders"));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "product":

                if ($this->db->delete($table, array('id' => $value))) {

                    $this->db->delete("product_img", array('pid' => $value));

                    redirect(base_url("admin/product/"));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "tire_width":

                if ($this->db->delete($table, array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "category":

                if ($this->db->delete($table, array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

            case "gallery":

                $gallery = $this->db->get_where("gallery", array("id" => $value))->row();

                if ($this->db->delete($table, array('id' => $value))) {

                    redirect(base_url("admin/edit/merchant/" . $gallery->merchantID));

                } else

                    redirect(base_url("admin/merchant?msg=1"));

                break;

            case "merchant":

                if ($this->db->delete($table, array('id' => $value))) {

                    $this->db->delete("merchant_detail", array('merchartID' => $value));

                    $this->db->delete("gallery", array('merchantID' => $value));

                    $this->db->delete("merchant_duty", array('m_id' => $value));

                    redirect(base_url("admin/merchant"));

                } else

                    redirect(base_url("admin/merchant?msg=1"));

                break;

            case "users":

                if ($this->db->delete("merchant", array('id' => $value))) {

                    $this->db->delete("merchant_detail", array('merchartID' => $value));

                    $this->db->delete("gallery", array('merchantID' => $value));

                    $this->db->delete("merchant_duty", array('m_id' => $value));

                    redirect(base_url("admin/users"));

                } else

                    redirect(base_url("admin/users?msg=1"));

                break;

            case "bulten":

                if ($this->db->delete("email", array('id' => $value))) {

                    redirect(base_url("admin/" . $table));

                } else

                    redirect(base_url("admin/" . $table . "?msg=1"));

                break;

        }

    }

    /**
     * @param Edit
     * @param strings
     */

    private function email_send($sTo, $sSubject, $sMessage)
    {

        $this->load->library('email');

        $this->email->set_newline("\r\n");

        // Set the default email config and Initialize
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = $this->SMTP_HOST;
        $config['smtp_user'] = $this->SMTP_USER;
        $config['smtp_pass'] = $this->SMTP_PASS;
        $config['smtp_port'] = $this->SMTP_PORT;
        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        $this->email->from('info@lastikkent.com', 'Lastikkent Bilgilendirme');
        $this->email->to($sTo);
        $this->email->subject($sSubject);
        $this->email->message($sMessage);

        if (!$this->email->send()) {
            return -1;
        } else {
            return 1;
        }

    }

    public function edit($table, $id, $sub = 0)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        switch ($table) {

            case "contact":

                $data = $this->db->get_where("contract", array("id" => $id))->row();

                if ($this->input->post()) {

                    if (
                    $this->input->post("description", true)
                    ) {

                        $obj = array(
                            "description" => $this->input->post("description", true),
                        );

                        $this->db->where('id', $id);

                        if ($this->db->update('contract', $obj)) {

                            redirect(base_url("admin/contract"));

                        } else {

                            $data[] = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data[] = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/contact_option', array(
                    "data" => $data
                ));

                break;

            case "add_merchant":

                $this->db->where('id', $id);

                if ($this->db->update("merchant", array("accepts" => "off"))) {

                    $row = $this->db->get_where("merchant", array("id" => $id))->row();

                    if (self::email_send($row->email, 'Üyelik Onaylama', str_replace(
                        array(
                            '{LINK}'
                        ),
                        array(
                            base_url("main/activation/" . $id . "/" . md5(base64_encode($id)))
                        ),
                        file_get_contents("assets/email/wellcome.html")
                    ))
                    ) {

                        redirect(base_url("admin/merchant/1"));

                    } else {

                        redirect(base_url("admin/merchant/1"));

                    }

                } else {
                    redirect(base_url("admin/merchant/1"));

                }

                break;

            case "ilanlar_eticaret":

                $data = $this->db->get_where("e_product", array("id" => $id))->row();

                $this->smarty->view('admin/e_ticaret_edit', $data);

                break;

            case "patern":

                $data = $this->db->where("id", $id)->get("patern")->row();

                if ($this->input->post()) {

                    if (
                        $this->input->post("brand", true) &&
                        $this->input->post("season", true) &&
                        $this->input->post("category", true) &&
                        $this->input->post("property", true) &&
                        $this->input->post("guvenlik", true) &&
                        $this->input->post("tasarruf", true) &&
                        $this->input->post("konfor", true) &&
                        $this->input->post("paternName", true)
                    ) {

                        $obj = array(
                            "brand" => $this->input->post("brand", true),
                            "paternName" => $this->input->post("paternName", true),
                            "season" => $this->input->post("season", true),
                            "category" => $this->input->post("category", true),
                            "property" => $this->input->post("property", true),
                            "guvenlik" => $this->input->post("guvenlik", true),
                            "tasarruf" => $this->input->post("tasarruf", true),
                            "konfor" => $this->input->post("konfor", true),
                        );

                        $this->db->where('id', $id);

                        if ($this->db->update('patern', $obj)) {

                            if ($_FILES["file"]) {

                                for ($i = 0; $i < count($_FILES["file"]["tmp_name"]); $i++) {

                                    $img_name = "assets/upload/" . uniqid() . ".jpg";

                                    if (move_uploaded_file($_FILES["file"]["tmp_name"][$i], FCPATH . $img_name)) {

                                        $this->db->insert("product_img", array(
                                            "patern_id" => $id,
                                            "image" => $img_name
                                        ));

                                    }

                                }

                            }

                            redirect(base_url("admin/" . $table . "/" . $this->input->post("brand", true)));

                        } else {

                            $data[] = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data[] = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/patern_add', array(
                    "brand" => $this->db->get("brand")->result(),
                    'select_category' => self::getCacheData("category"),
                    'select_season' => self::getCacheData("season"),
                    'select_img' => $this->db->get_where("product_img", array('patern_id' => $id))->result(),
                    "data" => $data
                ));

                break;

            case "page":

                $data = $this->db->where("id", $id)->get("page")->row();

                if ($this->input->post()) {

                    if (
                        $this->input->post("subject", true) &&
                        $this->input->post("category", true) &&
                        $this->input->post("text", true)
                    ) {

                        $obj = array(
                            "subject" => $this->input->post("subject", true),
                            "category" => $this->input->post("category", true),
                            "text" => $this->input->post("text", true),
                            "uri" => $this->tools->permalink($this->input->post("subject", true))
                        );

                        $this->db->where('id', $id);

                        if ($this->db->update('page', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data[] = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data[] = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/page_add', $data);

                break;

            case "seo":

                $data = $this->db->where("id", $id)->get("settings")->row();

                if ($this->input->post()) {

                    if ($this->input->post("name", true)) {

                        $obj = array(
                            "name" => stripslashes($_POST["name"])
                        );

                        $this->db->where('id', $id);

                        if ($this->db->update('settings', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data[] = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data[] = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/seo_option', $data);

                break;

            case "car":

                if ($sub == 0) {
                    $data = $this->db->where("id", $id)->get("car")->row_array();
                } else {

                    //$this->db->select('car.id,car.title as ctitle,car_model.make_id,car_model.id,car_model.title as mtitle,car_model.make_id as mid');
                    $this->db->from('car_model');
                    $this->db->join('car', 'car_model.make_id = car.id');
                    $this->db->where('car_model.id', $sub);
                    $data = $this->db->get();
                }

                $data["car"] = self::getCacheData("car");


                if ($this->input->post()) {

                    if ($this->input->post("name", true)) {

                        $obj = array(
                            "name" => $this->input->post("name", true)
                        );

                        $this->db->where('id', $id);

                        if ($this->db->update('settings', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data[] = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data[] = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/car_option', $data);

                break;

            case "management":

                $data = $this->db->where("id", $id)->get("admin")->row();

                if ($this->input->post()) {

                    if ($this->input->post("username", true) && $this->input->post("password", true)) {

                        if ($this->input->post("password", true) != '12345') {

                            $obj = array(
                                "username" => $this->input->post("username", true),
                                "status" => $this->input->post("status", true),
                                "password" => md5($this->input->post("password", true))
                            );

                        } else {

                            $obj = array(
                                "username" => $this->input->post("username", true),
                                "status" => $this->input->post("status", true),
                            );
                        }

                        $this->db->where('id', $id);

                        if ($this->db->update('admin', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data[] = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data[] = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/management_option', $data);

                break;

            case "comments":

                $data = $this->db->where("id", $id)->get("comment")->row();

                if ($this->input->post()) {

                    if (
                        $this->input->post("name", true) &&
                        $this->input->post("text", true) &&
                        $this->input->post("subject", true)
                    ) {

                        $obj = array(
                            "name" => $this->input->post("name", true),
                            "text" => $this->input->post("text", true),
                            "subject" => $this->input->post("subject", true)
                        );

                        $this->db->where('id', $id);

                        if ($this->db->update('comment', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/comments_option', $data);

                break;

            case "comments_option":

                $data = $this->db->get_where("comment", array("id" => $id))->row();

                if (!$data->status || $data->status == 0) {

                    $this->db->query("update comment set status='1' where id ='{$id}'");

                } elseif ($data->status == 1) {

                    $this->db->query("update comment set status='0',status='' where id ='{$id}'");

                }

                redirect(base_url("admin/comments/" . $data->type));

                break;

            case "brand":

                $data = $this->db->where("id", $id)->get($table)->row();

                if ($this->input->post()) {

                    if ($this->input->post("brand", true)) {

                        $obj = array(
                            "name" => $this->input->post("brand", true),
                            "details" => $this->input->post("details", true)
                        );

                        $this->db->where('id', $id);

                        if ($this->db->update('brand', $obj)) {

                            if ($_FILES["file"]) {

                                $img_name = "assets/upload/" . uniqid() . ".jpg";

                                if (move_uploaded_file($_FILES["file"]["tmp_name"], FCPATH . $img_name)) {

                                    $this->db->where("id", $id);

                                    $this->db->update("brand", array(
                                        "image" => $img_name
                                    ));

                                }

                            }

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/brand_option', $data);

                break;

            case "sales":

                $data = $this->db->where("id", $id)->get($table)->row();

                if ($this->input->post()) {

                    if ($this->input->post("sales", true)) {

                        $obj = array(
                            "name" => $this->input->post("sales", true),
                            "details" => $this->input->post("details", true)
                        );

                        $this->db->where('id', $id);

                        if ($this->db->update('sales', $obj)) {

                            if ($_FILES["file"]) {

                                $img_name = "assets/upload/" . uniqid() . ".jpg";

                                if (move_uploaded_file($_FILES["file"]["tmp_name"], FCPATH . $img_name)) {

                                    $this->db->where("id", $id);

                                    $this->db->update("sales", array(
                                        "image" => $img_name
                                    ));

                                }

                            }

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/sales_option', $data);

                break;

            case "brand_aku":

                $data = $this->db->where("id", $id)->get($table)->row();

                if ($this->input->post()) {

                    if ($this->input->post("brand", true)) {

                        $obj = array(
                            "name" => $this->input->post("brand", true)
                        );

                        $this->db->where('id', $id);

                        if ($this->db->update('brand_aku', $obj)) {

                            if ($_FILES["file"]) {

                                $img_name = "assets/upload/" . uniqid() . ".jpg";

                                if (move_uploaded_file($_FILES["file"]["tmp_name"], FCPATH . $img_name)) {

                                    $this->db->where("id", $id);

                                    $this->db->update("brand_aku", array(
                                        "image" => $img_name
                                    ));

                                }

                            }

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/brand_option', $data);

                break;

            case "rim_diameter":

                $data = $this->db->where("id", $id)->get($table)->row();

                if ($this->input->post()) {

                    if ($this->input->post("rim_diameter", true)) {

                        $obj = array(
                            "name" => $this->input->post("rim_diameter", true)
                        );

                        $this->db->where('id', $id);

                        if ($this->db->update('rim_diameter', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/rim_diatemer_option', $data);

                break;

            case "marca":

                $data = $this->db->where("id", $id)->get("car")->row();

                if ($this->input->post()) {

                    if ($this->input->post("title", true)) {

                        $obj = array(
                            "title" => $this->input->post("title", true),
                            "code" => strtoupper($this->input->post("title", true))
                        );

                        $this->db->where('id', $id);

                        if ($this->db->update('car', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/marca_option', $data);

                break;

            case "model":

                $data = array(
                    "data" => $this->db->where("id", $id)->get("car_model")->row_array(),
                    "car" => self::getCacheData("car")
                );

                if ($this->input->post()) {

                    if ($this->input->post("title", true)) {

                        $obj = array(
                            "title" => $this->input->post("title", true),
                            "make_id" => $this->input->post("make_id", true),
                            "code" => strtoupper($this->input->post("title", true))
                        );

                        $this->db->where('id', $id);

                        if ($this->db->update('car_model', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/model_option', $data);

                break;

            case "season":

                $data = $this->db->where("id", $id)->get($table)->row();

                if ($this->input->post()) {

                    if ($this->input->post("season", true)) {

                        $obj = array(
                            "name" => $this->input->post("season", true)
                        );

                        $this->db->where("id", $id);

                        if ($this->db->update('season', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/season_option', $data);

                break;

            case "speed_index":

                $data = $this->db->where("id", $id)->get($table)->row();

                if ($this->input->post()) {

                    if ($this->input->post("speed_index", true)) {

                        $obj = array(
                            "name" => $this->input->post("speed_index", true)
                        );

                        $this->db->where("id", $id);

                        if ($this->db->update('speed_index', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/speed_index_option', $data);

                break;

            case "tire_rate":

                $data = $this->db->where("id", $id)->get($table)->row();

                if ($this->input->post()) {

                    if ($this->input->post("tire_rate", true)) {

                        $obj = array(
                            "name" => $this->input->post("tire_rate", true)
                        );

                        $this->db->where("id", $id);

                        if ($this->db->update('tire_rate', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/tire_rate_option', $data);

                break;

            case "tire_width":

                $data = $this->db->where("id", $id)->get($table)->row();

                if ($this->input->post()) {

                    if ($this->input->post("tire_width", true)) {

                        $obj = array(
                            "name" => $this->input->post("tire_width", true)
                        );

                        $this->db->where("id", $id);

                        if ($this->db->update('tire_width', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/tire_width_option', $data);

                break;

            case "category":

                $data = $this->db->where("id", $id)->get($table)->row();

                if ($this->input->post()) {

                    if ($this->input->post("category", true)) {

                        $obj = array(
                            "name" => $this->input->post("category", true)
                        );

                        $this->db->where("id", $id);

                        if ($this->db->update('category', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/category_option', $data);

                break;

            case "merchant":

                $data = $this->db->where("id", $id)->get($table)->row();

                if ($this->input->post()) {

                    if (
                        $this->input->post("company", true) &&
                        $this->input->post("email", true) &&
                        $this->input->post("password", true)
                    ) {

                        $obj = array(
                            "status" => $this->input->post("status", true),
                            "accepts" => $this->input->post("accepts", true),
                            "name" => $this->input->post("name", true),
                            "email" => $this->input->post("email", true),
                            "adress" => $this->input->post("adress", true),
                            "homephone" => $this->input->post("homephone", true),
                            "company" => $this->input->post("company", true),
                            "password" => $this->input->post("password", true) == "12345" || !$this->input->post("password", true) ? $data->password : md5($this->input->post("password", true)),
                            "web" => $this->input->post("web", true),
                            "vergino" => $this->input->post("vergino", true),
                            "cellphone" => $this->input->post("cellphone", true),
                            "description" => $this->input->post("description", true),
                            "keywords" => $this->input->post("keywords", true),
                            "city" => $this->input->post("city", true),
                            "state" => $this->input->post("state", true),
                            "search" => $this->input->post("search", true),
                            "sales" => $this->input->post("sales", true)
                        );

                        $this->db->where("id", $id);

                        if ($this->db->update('merchant', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $data->brand = $this->db->get("brand")->result_array();

                $data->saless = $this->db->get("sales")->result_array();

                $data->brand_aku = $this->db->get("brand_aku")->result_array();

                $this->smarty->view('admin/merchant_option', $data);

                break;

            case "users":

                $data = $this->db->where("id", $id)->get("merchant")->row();

                if ($this->input->post()) {

                    if (
                        $this->input->post("email", true) &&
                        $this->input->post("password", true)
                    ) {

                        $obj = array(
                            "name" => $this->input->post("name", true),
                            "email" => $this->input->post("email", true),
                            "adress" => $this->input->post("adress", true),
                            "homephone" => $this->input->post("homephone", true),
                            "password" => $this->input->post("password", true) == "12345" || !$this->input->post("password", true) ? $data->password : md5($this->input->post("password", true)),
                            "cellphone" => $this->input->post("cellphone", true),
                            "description" => $this->input->post("description", true),
                            "keywords" => $this->input->post("keywords", true),
                            "city" => $this->input->post("city", true),
                            "state" => $this->input->post("state", true)
                        );

                        $this->db->where("id", $id);

                        if ($this->db->update('merchant', $obj)) {

                            redirect(base_url("admin/users"));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/users_option', $data);

                break;

            case "merchant_brand":

                if ($this->input->post()) {

                    if (
                    $id
                    ) {

                        $this->db->where("merchartID", $id);
                        $this->db->where("words", "brand");

                        if ($this->db->get("merchant_detail")->num_rows() < 1) {

                            $this->db->insert("merchant_detail", array(
                                "merchartID" => $id,
                                "words" => "brand",
                                "data" => implode(",", $this->input->post("brand", true))
                            ));

                        } else {

                            $this->db->where("merchartID", $id);
                            $this->db->where("words", "brand");

                            $this->db->update("merchant_detail", array(
                                "merchartID" => $id,
                                "words" => "brand",
                                "data" => implode(",", $this->input->post("brand", true))
                            ));

                        }

                        redirect(base_url("admin/edit/merchant/" . $id));

                    } else {

                        redirect(base_url("admin/edit/merchant/" . $id));

                    }

                } else {

                    redirect(base_url("admin/edit/merchant/" . $id));
                }

                break;

            case "merchant_brand_aku":

                if ($this->input->post()) {

                    if (
                    $id
                    ) {

                        $this->db->where("merchartID", $id);
                        $this->db->where("words", "brand_aku");

                        if ($this->db->get("merchant_detail")->num_rows() < 1) {

                            $this->db->insert("merchant_detail", array(
                                "merchartID" => $id,
                                "words" => "brand_aku",
                                "data" => implode(",", $this->input->post("brand_aku", true))
                            ));

                        } else {

                            $this->db->where("merchartID", $id);
                            $this->db->where("words", "brand_aku");

                            $this->db->update("merchant_detail", array(
                                "merchartID" => $id,
                                "words" => "brand_aku",
                                "data" => implode(",", $this->input->post("brand_aku", true))
                            ));

                        }

                        redirect(base_url("admin/edit/merchant/" . $id));

                    } else {

                        redirect(base_url("admin/edit/merchant/" . $id));

                    }

                } else {

                    redirect(base_url("admin/edit/merchant/" . $id));
                }

                break;

            case 'product':

                if ($id) {

                    $this->db->where("id", $id);

                    if ($this->db->get("product")->num_rows() > 0) {

                        $this->db->where("id", $id);

                        $data = $this->db->get("product")->row_array();

                        $data["select_brand"] = self::getCacheData("brand");
                        $data["select_rim_diameter"] = self::getCacheData("rim_diameter");
                        $data["select_tire_rate"] = self::getCacheData("tire_rate");
                        $data["select_tire_width"] = self::getCacheData("tire_width");
                        $data["select_speed_index"] = self::getCacheData("speed_index");
                        $data["select_car"] = self::getCacheData("car");
                        $data["select_patern"] = $this->db->get_where("patern", array("brand" => $data["brand"]))->result();

                        if ($this->input->post()) {

                            if (
                                $this->input->post("brand", true) &&
                                $this->input->post("patern", true) &&
                                $this->input->post("rim_diameter", true) &&
                                $this->input->post("tire_rate", true) &&
                                $this->input->post("tire_width", true) &&
                                $this->input->post("speed_index", true)
                            ) {

                                $model = $this->Mmodel->exportArray(
                                    $this->input->post("brand", true),
                                    $this->input->post("patern", true),
                                    $this->input->post("rim_diameter", true),
                                    $this->input->post("tire_rate", true),
                                    $this->input->post("tire_width", true)
                                );

                                $obj = array(
                                    "name" => $model['title'], //
                                    "description" => $model['description'], //
                                    "keywords" => $model['keywords'], //
                                    "brand" => $this->input->post("brand", true),
                                    "rim_diameter" => $this->input->post("rim_diameter", true),
                                    "tire_rate" => $this->input->post("tire_rate", true),
                                    "tire_width" => $this->input->post("tire_width", true),
                                    "speed_index" => $this->input->post("speed_index", true),
                                    "patern" => $this->input->post("patern", true),
                                    "year" => $this->input->post("year", true),
                                    "myamount" => $this->input->post("myamount", true),
                                    "popular" => $this->input->post("popular", true),
                                    "grade" => $this->input->post("grade", true),
                                    "yakit" => $this->input->post("yakit", true),
                                    "islak" => $this->input->post("islak", true),
                                    "ses" => $this->input->post("ses", true),
                                    "run_flat" => $this->input->post("run_flat", true),
                                    "extra_lot" => $this->input->post("extra_lot", true),
                                    "weight_index" => $this->input->post("weight_index", true),
                                    "car" => implode(",", $this->input->post("car", true)),
                                    "uri" => $this->tools->permalink($model['title']),
                                    "category" => $model['category'],
                                    "season" => $model['season'],
                                    "property" => $model['property'],
                                    "guvenlik" => $model['guvenlik'],
                                    "tasarruf" => $model['tasarruf'],
                                    "konfor" => $model['konfor'],
                                );

                                $this->db->where("id", $id);

                                if ($this->db->update('product', $obj)) {

                                    redirect(base_url("admin/edit/product/" . $id));

                                } else {

                                    $data = array(
                                        "errorCode" => 2,
                                        "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                                    );
                                }

                            } else {

                                $data["errorCode"] = 2;
                                $data["errorMsg"] = "Üzgünüm, boş veri veya hatalı istek gönderiyorsunuz!";

                            }
                        }

                        $this->smarty->view('admin/product_add', $data);

                    } else {

                        redirect(base_url("admin/product"));

                    }

                } else {

                    redirect(base_url("admin/product"));
                }

                break;

        }

    }

    /**
     * @param Upload Methods
     * @param strings
     */

    public function upload($table, $id)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        switch ($table) {

            case "logo":

                if ($id) {

                    if ($_FILES) {

                        if ($_FILES['file']['name']) {

                            $upload = $_FILES['file']['tmp_name'];
                            $name = "assets/upload/" . rand(112, 99999) . ".jpg";

                            if (move_uploaded_file($upload, FCPATH . $name)) {

                                $this->db->where("id", $id);

                                if ($this->db->update("merchant", array("logo" => $name))) {

                                    $this->db->where("id", $id);

                                    header('Content-Type: application/json');

                                    echo json_encode($this->db->get("merchant")->row());

                                } else {

                                    $this->db->where("id", $id);

                                    header('Content-Type: application/json');

                                    echo json_encode($this->db->get("merchant")->row());
                                }

                            } else {

                                echo json_encode(array(
                                    "error" => "Sorry, there was an error uploading your file."
                                ));

                            }

                        } else {

                            echo json_encode(array(
                                "error" => "Sorry, there was an error uploading your file."
                            ));
                        }

                    }

                } else

                    die();

                break;

            case "gallery":

                if ($id) {

                    if ($_FILES) {

                        if ($_FILES['file']['name']) {

                            $upload = $_FILES['file']['tmp_name'];
                            $name = "assets/upload/" . rand(112, 99999) . ".jpg";

                            if (move_uploaded_file($upload, FCPATH . $name)) {

                                if ($this->db->insert("gallery",
                                    array(
                                        "merchantID" => $id,
                                        "name" => $name
                                    )
                                )
                                ) {

                                    $this->db->where("merchantID", $id);

                                    header('Content-Type: application/json');

                                    echo json_encode($this->db->get("gallery")->result());

                                } else {

                                    $this->db->where("merchantID", $id);

                                    header('Content-Type: application/json');

                                    echo json_encode($this->db->get("gallery")->result());
                                }

                            } else {

                                echo json_encode(array(
                                    "error" => "Sorry, there was an error uploading your file."
                                ));

                            }

                        } else {

                            echo json_encode(array(
                                "error" => "Sorry, there was an error uploading your file."
                            ));
                        }

                    }

                } else

                    die();

                break;

            default:

                redirect(base_url("admin/"));
        }

    }

    /**
     * @param Add Methods
     * @param strings
     */

    public function add($table)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $data = array();

        switch ($table) {

            case "model":

                $data = array(
                    "data" => null,
                    "car" => self::getCacheData("car")
                );

                if ($this->input->post()) {

                    if ($this->input->post("title", true)) {

                        $obj = array(
                            "title" => $this->input->post("title", true),
                            "make_id" => $this->input->post("make_id", true),
                            "code" => strtoupper($this->input->post("title", true))
                        );

                        if ($this->db->insert('car_model', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/model_option', $data);

                break;

            case "patern":

                $data = null;

                if ($this->input->post()) {

                    if (
                        $this->input->post("brand", true) &&
                        $this->input->post("season", true) &&
                        $this->input->post("category", true) &&
                        $this->input->post("property", true) &&
                        $this->input->post("guvenlik", true) &&
                        $this->input->post("tasarruf", true) &&
                        $this->input->post("konfor", true) &&
                        $this->input->post("paternName", true)
                    ) {

                        $obj = array(
                            "brand" => $this->input->post("brand", true),
                            "paternName" => ucfirst($this->input->post("paternName", true)),
                            "season" => $this->input->post("season", true),
                            "category" => $this->input->post("category", true),
                            "property" => $this->input->post("property", true),
                            "tasarruf" => $this->input->post("tasarruf", true),
                            "guvenlik" => $this->input->post("guvenlik", true),
                            "konfor" => $this->input->post("konfor", true),
                        );

                        if ($this->db->insert('patern', $obj)) {

                            $last_id = $this->db->insert_id();

                            if ($_FILES["file"]) {

                                for ($i = 0; $i < count($_FILES["file"]["tmp_name"]); $i++) {

                                    $img_name = "assets/upload/" . uniqid() . ".jpg";

                                    if (move_uploaded_file($_FILES["file"]["tmp_name"][$i], FCPATH . $img_name)) {

                                        $this->db->insert("product_img", array(
                                            "patern_id" => $last_id,
                                            "image" => $img_name
                                        ));

                                    }

                                }

                            }

                            redirect(base_url("admin/patern/" . $this->input->post("brand", true)));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/patern_add', array(
                    "brand" => $this->db->get("brand")->result(),
                    'select_category' => self::getCacheData("category"),
                    'select_season' => self::getCacheData("season")
                ));

                break;

            case "marca":

                $data = null;

                if ($this->input->post()) {

                    if ($this->input->post("title", true)) {

                        $obj = array(
                            "title" => $this->input->post("title", true),
                            "code" => strtoupper($this->input->post("title", true))
                        );

                        if ($this->db->insert('car', $obj)) {

                            redirect(base_url("admin/marca"));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/marca_option', $data);

                break;

            case "merchant":

                $data = array(
                    "brand" => $this->db->get("brand")->result_array(),
                    "sales" => $this->db->get("sales")->result_array(),
                    "brand_aku" => $this->db->get("brand_aku")->result_array(),
                    "saless" => $this->db->get("sales")->result_array()
                );

                if ($this->input->post()) {

                    if (
                        $this->input->post("company", true) &&
                        $this->input->post("email", true) &&
                        $this->input->post("password", true)
                    ) {

                        $obj = array(
                            "status" => $this->input->post("status", true),
                            "company" => $this->input->post("company", true),
                            "accepts" => "on",
                            "password" => md5($this->input->post("password", true)),
                            "name" => $this->input->post("name", true),
                            "email" => $this->input->post("email", true),
                            "adress" => $this->input->post("adress", true),
                            "homephone" => $this->input->post("homephone", true),
                            "web" => $this->input->post("web", true),
                            "vergino" => $this->input->post("vergino", true),
                            "cellphone" => $this->input->post("cellphone", true),
                            "description" => $this->input->post("description", true),
                            "keywords" => $this->input->post("keywords", true),
                            "latlng" => $this->input->post("latlng", true),
                            "city" => $this->input->post("city", true),
                            "uri" => $this->tools->permalink($this->input->post("company", true)),
                            "state" => $this->input->post("state", true),
                            "search" => $this->input->post("search", true),
                            "sales" => $this->input->post("sales", true)
                        );

                        if ($this->db->insert('merchant', $obj)) {

                            $last_id = $this->db->insert_id();

                            $this->db->insert("merchant_detail", array(
                                "merchartID" => $last_id,
                                "words" => "brand",
                                "data" => ""
                            ));

                            $this->db->insert("merchant_detail", array(
                                "merchartID" => $last_id,
                                "words" => "brand_aku",
                                "data" => ""
                            ));

                            $this->db->insert("merchant_duty", array(
                                "m_id" => $last_id
                            ));

                            if ($_FILES) {

                                if ($_FILES["file"]["name"]) {

                                    $upload = $_FILES['file']['tmp_name'];
                                    $name = "assets/upload/" . rand(112, 99999) . ".jpg";

                                    if (move_uploaded_file($upload, FCPATH . $name)) {

                                        $this->db->where("id", $last_id);

                                        $this->db->update("merchant", array("logo" => $name));
                                    }
                                }
                            }

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/merchant_option', $data);

                break;

            case "page":

                if ($this->input->post()) {

                    if (
                        $this->input->post("subject", true) &&
                        $this->input->post("category", true) &&
                        $this->input->post("text", true)
                    ) {

                        $obj = array(
                            "subject" => $this->input->post("subject", true),
                            "category" => $this->input->post("category", true),
                            "text" => $this->input->post("text", true),
                            "uri" => $this->tools->permalink($this->input->post("subject", true))
                        );

                        if ($this->db->insert('page', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data[] = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data[] = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/page_add', $data);

                break;

            case "seo":

                if ($this->input->post()) {

                    if ($this->input->post("name", true)) {

                        $obj = array(
                            "name" => stripslashes($_POST["name"])
                        );

                        if ($this->db->insert('settings', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data[] = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data[] = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/seo_option', $data);

                break;

            case "management":

                if ($this->input->post()) {

                    if ($this->input->post("username", true) && $this->input->post("password", true)) {

                        $obj = array(
                            "username" => $this->input->post("username", true),
                            "status" => $this->input->post("status", true),
                            "password" => md5($this->input->post("password", true))
                        );

                        if ($this->db->insert('admin', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/management_option', $data);

                break;

            case "brand":

                if ($this->input->post()) {

                    if ($this->input->post("brand", true)) {

                        $obj = array(
                            "name" => $this->input->post("brand", true),
                            "details" => $this->input->post("details", true),
                        );

                        if ($this->db->insert('brand', $obj)) {

                            if ($_FILES["file"]) {

                                $img_name = "assets/upload/" . uniqid() . ".jpg";

                                if (move_uploaded_file($_FILES["file"]["tmp_name"], FCPATH . $img_name)) {

                                    $this->db->where("id", $this->db->insert_id());

                                    $this->db->update("brand", array(
                                        "image" => $img_name
                                    ));

                                }

                            }

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/brand_option', $data);

                break;

            case "sales":

                if ($this->input->post()) {

                    if ($this->input->post("sales", true)) {

                        $obj = array(
                            "name" => $this->input->post("sales", true),
                            "details" => $this->input->post("details", true),
                        );

                        if ($this->db->insert('sales', $obj)) {

                            if ($_FILES["file"]) {

                                $img_name = "assets/upload/" . uniqid() . ".jpg";

                                if (move_uploaded_file($_FILES["file"]["tmp_name"], FCPATH . $img_name)) {

                                    $this->db->where("id", $this->db->insert_id());

                                    $this->db->update("sales", array(
                                        "image" => $img_name
                                    ));

                                }

                            }

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/sales_option', $data);

                break;

            case "brand_aku":

                if ($this->input->post()) {

                    if ($this->input->post("brand", true)) {

                        $obj = array(
                            "name" => $this->input->post("brand", true)
                        );

                        if ($this->db->insert('brand_aku', $obj)) {

                            if ($_FILES["file"]) {

                                $img_name = "assets/upload/" . uniqid() . ".jpg";

                                if (move_uploaded_file($_FILES["file"]["tmp_name"], FCPATH . $img_name)) {

                                    $this->db->where("id", $this->db->insert_id());

                                    $this->db->update("brand_aku", array(
                                        "image" => $img_name
                                    ));

                                }

                            }

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/brand_option', $data);

                break;

            case "rim_diameter":

                if ($this->input->post()) {

                    if ($this->input->post("rim_diameter", true)) {

                        $obj = array(
                            "name" => $this->input->post("rim_diameter", true)
                        );

                        if ($this->db->insert('rim_diameter', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/rim_diatemer_option', $data);

                break;

            case "season":

                if ($this->input->post()) {

                    if ($this->input->post("season", true)) {

                        $obj = array(
                            "name" => $this->input->post("season", true)
                        );

                        if ($this->db->insert('season', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/season_option', $data);

                break;

            case "speed_index":

                if ($this->input->post()) {

                    if ($this->input->post("speed_index", true)) {

                        $obj = array(
                            "name" => $this->input->post("speed_index", true)
                        );

                        if ($this->db->insert('speed_index', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/speed_index_option', $data);

                break;

            case "tire_rate":

                if ($this->input->post()) {

                    if ($this->input->post("tire_rate", true)) {

                        $obj = array(
                            "name" => $this->input->post("tire_rate", true)
                        );

                        if ($this->db->insert('tire_rate', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/tire_rate_option', $data);

                break;

            case "tire_width":

                if ($this->input->post()) {

                    if ($this->input->post("tire_width", true)) {

                        $obj = array(
                            "name" => $this->input->post("tire_width", true)
                        );

                        if ($this->db->insert('tire_width', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/tire_width_option', $data);

                break;

            case "category":

                if ($this->input->post()) {

                    if ($this->input->post("category", true)) {

                        $obj = array(
                            "name" => $this->input->post("category", true)
                        );

                        if ($this->db->insert('category', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data = array(
                            "errorCode" => 2,
                            "errorMsg" => "Üzgünüm, boş veri gönderiyorsunuz!"
                        );
                    }
                }

                $this->smarty->view('admin/category_option', $data);

                break;

            case 'product':

                $data = array();

                $arr = array(
                    "select_brand" => self::getCacheData("brand"),
                    "select_rim_diameter" => self::getCacheData("rim_diameter"),
                    "select_tire_rate" => self::getCacheData("tire_rate"),
                    "select_tire_width" => self::getCacheData("tire_width"),
                    "select_speed_index" => self::getCacheData("speed_index"),
                    "select_season" => self::getCacheData("season"),
                    "select_category" => self::getCacheData("category"),
                    "select_car" => self::getCacheData("car"),
                    "select_patern" => $this->db->get_where("patern", array("brand" => $data["brand"]))->result(),
                    "new" => "yes",
                );

                foreach ($arr as $key => $val) {

                    $data[$key] = $val;

                }

                if ($this->input->post()) {

                    if (
                        $this->input->post("brand", true) &&
                        $this->input->post("patern", true) &&
                        $this->input->post("rim_diameter", true) &&
                        $this->input->post("tire_rate", true) &&
                        $this->input->post("tire_width", true) &&
                        $this->input->post("speed_index", true)
                    ) {

                        $model = $this->Mmodel->exportArray(
                            $this->input->post("brand", true),
                            $this->input->post("patern", true),
                            $this->input->post("rim_diameter", true),
                            $this->input->post("tire_rate", true),
                            $this->input->post("tire_width", true)
                        );

                        $obj = array(
                            "name" => $model['title'], //
                            "description" => $model['description'], //
                            "keywords" => $model['keywords'], //
                            "brand" => $this->input->post("brand", true),
                            "rim_diameter" => $this->input->post("rim_diameter", true),
                            "tire_rate" => $this->input->post("tire_rate", true),
                            "tire_width" => $this->input->post("tire_width", true),
                            "speed_index" => $this->input->post("speed_index", true),
                            "patern" => $this->input->post("patern", true),
                            "myamount" => $this->input->post("myamount", true),
                            "popular" => $this->input->post("popular", true),
                            "grade" => $this->input->post("grade", true),
                            "yakit" => $this->input->post("yakit", true),
                            "islak" => $this->input->post("islak", true),
                            "ses" => $this->input->post("ses", true),
                            "weight_index" => $this->input->post("weight_index", true),
                            "run_flat" => $this->input->post("run_flat", true),
                            "extra_lot" => $this->input->post("extra_lot", true),
                            "uri" => $this->tools->permalink($model['title']),
                            "admin_id" => $this->session->userdata('user_id'),
                            "category" => $model['category'],
                            "season" => $model['season'],
                            "property" => $model['property'],
                            "guvenlik" => $model['guvenlik'],
                            "tasarruf" => $model['tasarruf'],
                            "konfor" => $model['konfor'],
                        );

                        if ($this->db->insert('product', $obj)) {

                            redirect(base_url("admin/" . $table));

                        } else {

                            $data = array(
                                "errorCode" => 2,
                                "errorMsg" => "Üzgünüm, yeniden deneyiniz!!"
                            );
                        }

                    } else {

                        $data["errorCode"] = 2;
                        $data["errorMsg"] = "Üzgünüm, boş veri veya hatalı istek gönderiyorsunuz!";

                    }
                }

                $this->smarty->view('admin/product_add', $data);

                break;
        }
    }

    private function getCacheData($tag)
    {
        $this->load->library('Memcached_library');
        if ($this->memcached_library->get($tag) === false) {
            $results = $this->db->get($tag)->result();
            $this->memcached_library->add($tag, $results, 10);
        } else {
            $results = $this->memcached_library->get($tag);
        }

        return $results;
    }

    /**
     * @param jSON View Methods
     * @param strings
     */

    public function getWhere($table, $key, $value)
    {

        $this->db->where($key, $value);

        return $this->db->get($table)->row();
    }

    public function get_perm()
    {

        $username = $this->session->userdata('username');

        if ($this->db->get_where("admin", array("username" => $username))->num_rows() > 0) {

            return $this->db->get_where("admin", array("username" => $username))->row_array()["status"];
        }
    }

    public function json($e, $i = null)
    {

        $arr = array();

        switch ($e) {

            case "patern":

                $patern = $this->db->get_where("patern", array("brand" => $i));

                foreach ($patern->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->paternName,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/patern/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/patern/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "allproduct":

                if (file_exists(APPPATH . "cache/json/allproduct.json")) {

                    $cache_file = fopen(APPPATH . "cache/json/allproduct.json", 'r');
                    $arr = fread($cache_file, filesize(APPPATH . "cache/json/allproduct.json"));
                    fclose($cache_file);

                } else {

                    touch(APPPATH . "cache/json/allproduct.json");

                    $this->load->library('Memcached_library');

                    if ($this->memcached_library->get("json_allproduct") === false) {

                        $product = $this->db->get("product");

                        foreach ($product->result() as $pr) {

                            $arr[] = array(
                                "id" => $pr->id,
                                "create_time" => $pr->create_time,
                                "name" => $pr->name,
                                "description" => $pr->description,
                                "keywords" => $pr->keywords,
                                "brand" => !$pr->brand ? "" : !$this->getWhere("brand", "id", $pr->brand)->name ? "" : $this->getWhere("brand", "id", $pr->brand)->name,
                                "rim_diameter" => $this->getWhere("rim_diameter", "id", $pr->rim_diameter)->name,
                                "tire_rate" => $this->getWhere("tire_rate", "id", $pr->tire_rate)->name,
                                "tire_width" => $this->getWhere("tire_width", "id", $pr->tire_width)->name,
                                "speed_index" => $this->getWhere("speed_index", "id", $pr->speed_index)->name,
                                "season" => $this->getWhere("season", "id", $pr->season)->name,
                                "popular" => $pr->popular,
                                "weight_index" => $pr->weight_index,
                                "category" => $this->db->get_where("category", array("id" => $pr->category))->row()->name,
                                "settings" =>
                                    self::get_perm() === "staff" ? '<a href="' . base_url("admin/delete/product/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                        <a href="' . base_url("admin/edit/product/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>' : '<a href="' . base_url("admin/edit/product/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                            );
                        }

                        $this->memcached_library->add("json_allproduct", $arr, 10);

                    } else {
                        $arr = $this->memcached_library->get("json_allproduct");
                    }

                    $cache_file = fopen(APPPATH . "cache/json/allproduct.json", 'w');
                    fwrite($cache_file, json_encode($arr));
                    fclose($cache_file);

                }

                break;

            case "comments":

                $product = $this->db->get_where("comment", array("type" => $i));

                foreach ($product->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "create_time" => $pr->create_time,
                        "type" => $pr->type == "product" ? "Ürün" : $pr->type == "merchant" ? "Bayi" : $pr->type == "sales" ? 'Satıcı' : 'Marka',
                        "page" => $pr->type == "product" ? $this->db->get_where("product", array("id" => $pr->c_id))->row()->name : $pr->type == "merchant" ? $this->db->get_where("merchant", array("id" => $pr->c_id))->row()->company : $pr->type == "sales" ? $this->db->get_where("sales", array("id" => $pr->c_id))->row()->name : $this->db->get_where("brand", array("id" => $pr->c_id))->row()->name,
                        "name" => $pr->name,
                        "rating" => $pr->rating,
                        "subject" => $pr->subject,
                        "text" => $pr->text,
                        "status" => $pr->status == 1 ? "Onaylı" : "Onaysız",
                        "link" => '<a href="' . base_url("admin/edit/comments_option/" . $pr->id) . '"><svg class="glyph stroked star" style="height:16px; width:16px; stroke-width: 3px" title="Onayla / Onaylama"><use xlink:href="#stroked-star"/></svg></a>',
                        "settings" =>
                            self::get_perm() === "staff" ? '<a href="' . base_url("admin/delete/comments/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a> <a href="' . base_url("admin/edit/comments/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>' : '<a href="' . base_url("admin/edit/comments/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "message":

                if ($i == 1) {
                    $product = $this->db->order_by("id", "desc")->get_where("message", array("type" => 1));
                } else {
                    $product = $this->db->order_by("id", "desc")->get_where("message", array("type" => 10));
                }


                foreach ($product->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "create_time" => $pr->create_time,
                        "mid" => $this->db->get_where("merchant", array("id" => $pr->mid))->row()->company,
                        "name" => $pr->name,
                        "email" => $pr->email,
                        "text" => $pr->text,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/message/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>'
                    );
                }

                break;

            case "orders":

                $orders = $this->db->get("orders");

                foreach ($orders->result() as $pr) {

                    if ($pr->status == "1") {

                        $status = "Siparişiniz Değerlendiriliyor";

                    } elseif ($pr->status == "2") {

                        $status = "Ödeme Bekleniyor";

                    } elseif ($pr->status == "3") {

                        $status = "Sipariş İptal";

                    } else {

                        $status = "Tamamlandı";
                    }

                    $arr[] = array(
                        "id" => $pr->id,
                        "create_time" => $pr->create_time,
                        "merchant" => $this->db->get_where("merchant", array("id" => $pr->m_id))->row()->company,
                        "status" => $status,
                        "city" => $this->db->get_where("merchant", array("id" => $pr->m_id))->row()->city != 0 ? $this->getWhere("city", "id", $this->db->get_where("merchant", array("id" => $pr->m_id))->row()->city)->city : 0,
                        "state" => $this->db->get_where("merchant", array("id" => $pr->m_id))->row()->state != 0 ? $this->getWhere("state", "id", $this->db->get_where("merchant", array("id" => $pr->m_id))->row()->state)->state : 0,
                        "detail" =>
                            '<a href="' . base_url("admin/orders_detail/" . $pr->id) . '">Detay</a>',
                        "settings" =>
                            '<a href="' . base_url("admin/delete/orders/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>'
                    );
                }

                break;

            case "page":

                $product = $this->db->get("page");

                foreach ($product->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "category" => $pr->category == "1" ? "Kurumsal" : $pr->category == 2 ? "Hizmetler" : "Mevzuatlar",
                        "subject" => $pr->subject,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/page/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/page/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "contact":

                $product = $this->db->get("contract");

                foreach ($product->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "title" => $pr->title,
                        "settings" =>
                            '<a href="' . base_url("admin/edit/contact/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "management":

                $admin = $this->db->get("admin");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "create_time" => $pr->create_time,
                        "username" => $pr->username,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/management/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/management/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "seo":

                $admin = $this->db->get("settings");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "tag" => $pr->tag,
                        "name" => $pr->name,
                        "settings" =>
                            '<a href="' . base_url("admin/edit/seo/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "patern_brand":

                $admin = $this->db->get("brand");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->name,
                        "settings" =>
                            '<a href="' . base_url("admin/patern/" . $pr->id) . '"> Marka deseni gör</a>'
                    );
                }

                break;

            case "brand":

                $admin = $this->db->get("brand");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->name,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/brand/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/brand/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "sales":

                $admin = $this->db->get("sales");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->name,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/sales/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/sales/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "category":

                $admin = $this->db->get("category");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->name,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/category/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/category/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "brand_aku":

                $admin = $this->db->get("brand_aku");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->name,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/brand_aku/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/brand_aku/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "rim_diameter":

                $admin = $this->db->get("rim_diameter");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->name,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/rim_diameter/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/rim_diameter/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "season":

                $admin = $this->db->get("season");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->name,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/season/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/season/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "speed_index":

                $admin = $this->db->get("speed_index");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->name,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/speed_index/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/speed_index/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "tire_rate":

                $admin = $this->db->get("tire_rate");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->name,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/tire_rate/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/tire_rate/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "tire_width":

                $admin = $this->db->get("tire_width");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->name,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/tire_width/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/tire_width/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "users":

                $merchant = $this->db->get_where("merchant", array(
                    "status" => "users"
                ));

                foreach ($merchant->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "create_time" => $pr->create_time,
                        "name" => !$pr->name ? "-" : $pr->name,
                        "status" => "Üye",
                        "email" => $pr->email,
                        "homephone" => !$pr->homephone ? "-" : $pr->homephone,
                        "cellphone" => !$pr->cellphone ? "-" : $pr->cellphone,
                        "city" => $pr->city != 0 ? $this->getWhere("city", "id", $pr->city)->city : 0,
                        "state" => $pr->state != 0 ? $this->getWhere("state", "id", $pr->state)->state : 0,
                        "settings" =>
                            self::get_perm() === "staff" ? '<a href="' . base_url("admin/delete/users/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a><a href="' . base_url("admin/edit/users/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>' : '<a href="' . base_url("admin/edit/users/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "merchant":

                if ($i == 1) {

                    $merchant = $this->db->get_where("merchant", array(
                        "accepts" => "off",
                        "status !=" => "users"
                    ));
                } else if ($i == 2) {

                    $merchant = $this->db->get_where("merchant", array(
                        "accepts" => "on",
                        "status !=" => "users"
                    ));
                }

                foreach ($merchant->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "create_time" => $pr->create_time,
                        "name" => !$pr->name ? "-" : $pr->name,
                        "status" => $pr->status == "normal" ? "Lastik Bayi" : "Online Bayi",
                        "email" => $pr->email,
                        "company" => $pr->company,
                        "sales" => !$pr->sales ? "Belirlenmemiş" : $this->db->get_where("sales", array("id" => $pr->sales))->row()->name,
                        "homephone" => !$pr->homephone ? "-" : $pr->homephone,
                        "cellphone" => !$pr->cellphone ? "-" : $pr->cellphone,
                        "city" => $pr->city != 0 ? $this->getWhere("city", "id", $pr->city)->city : 0,
                        "state" => $pr->state != 0 ? $this->getWhere("state", "id", $pr->state)->state : 0,
                        "accepts" => $pr->accepts == "off" ? '<a href="' . base_url("admin/edit/add_merchant/" . $pr->id) . '" class="btn btn-primary">Email Onayı Yolla</a>' : 'Onaylanmış',
                        "settings" =>
                            self::get_perm() === "staff" ? '<a href="' . base_url("admin/delete/merchant/" . $pr->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a><a href="' . base_url("admin/edit/merchant/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>' : '<a href="' . base_url("admin/edit/merchant/" . $pr->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );
                }

                break;

            case "city":

                $admin = $this->db->get("city");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->city
                    );
                }

                break;

            case "state":

                $admin = $this->db->get("state");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "cityID" => $pr->cityID,
                        "name" => $pr->state
                    );
                }

                break;

            case "car":

                $this->db->order_by("title", "asc");

                $admin = $this->db->get("car");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->title
                    );
                }

                break;


            case "marca":

                $admin = $this->db->get("car");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->title,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/marca/" . $pr->id . "/0") . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/marca/" . $pr->id . "/0") . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'

                    );
                }

                break;

            case "model":

                $admin = $this->db->get("car_model");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->title,
                        "settings" =>
                            '<a href="' . base_url("admin/delete/model/" . $pr->id . "/0") . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/model/" . $pr->id . "/0") . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'

                    );
                }

                break;

            case "car2":

                $admin = $this->db->get("car");

                foreach ($admin->result() as $pr) {


                    $arr[] = array(
                        "id" => $pr->id,
                        "name" => $pr->title,
                        "marka" => "Evet",
                        "model" => "-",
                        "settings" =>
                            '<a href="' . base_url("admin/delete/car/" . $pr->id . "/0") . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/car/" . $pr->id . "/0") . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                    );

                    $admin2 = $this->db->get_where("car_model", array("make_id" => $pr->id));

                    foreach ($admin2->result() as $pr2) {

                        $arr[] = array(
                            "id" => $pr2->id,
                            "name" => $pr->title,
                            "marka" => "Hayir",
                            "model" => $pr2->title,
                            "settings" =>
                                '<a href="' . base_url("admin/delete/car/" . $pr->id . "/" . $pr2->id) . '"><svg class="glyph stroked cancel" style="height:16px; width:16px; stroke-width: 3px; margin-right: 10px;"><use xlink:href="#stroked-cancel"/></svg></a>
                                <a href="' . base_url("admin/edit/car/" . $pr->id . "/" . $pr2->id) . '"><svg class="glyph stroked pencil" style="height:16px; width:16px; stroke-width: 3px"><use xlink:href="#stroked-pencil"/></svg></a>'
                        );

                    }

                }

                break;

            case "car_model":

                $admin = $this->db->get("car_model");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "carID" => $pr->make_id,
                        "name" => $pr->title
                    );
                }

                break;

            case "gallery":

                $admin = $this->db->get("gallery");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "merchantID" => $pr->merchantID,
                        "name" => $pr->name
                    );
                }

                break;

            case "bulten":

                $admin = $this->db->get("email");

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "email" => $pr->email,
                        "settings" => '<a href="' . base_url("admin/delete/bulten/" . $pr->id) . '" class="btn btn-info">Bültenden çıkar</a>'
                    );
                }

                break;

            case "category_onaysiz":

                $admin = $this->db->get_where("e_category", array("status" => "passive"));

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "username" => $this->db->get_where("merchant", array("id" => $pr->userID))->row()->name,
                        "name" => $pr->name,
                        "settings" => '<a href="' . base_url("admin/delete/category_eticaret/" . $pr->id) . '" class="btn btn-info">Sil</a> <a href="' . base_url("admin/delete/onayla_category_eticaret/" . $pr->id) . '" class="btn btn-success">Onayla</a>'
                    );
                }

                break;

            case "category_onayli":

                $admin = $this->db->get_where("e_category", array("status" => "active"));

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "username" => $this->db->get_where("merchant", array("id" => $pr->userID))->row()->name,
                        "name" => $pr->name,
                        "settings" => '<a href="' . base_url("admin/delete/category_eticaret/" . $pr->id) . '" class="btn btn-info">Sil</a>'
                    );
                }

                break;

            case "ilanlar_onaysiz":

                $admin = $this->db->get_where("e_product", array("status" => "passive"));

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "create_time" => $pr->create_time,
                        "username" => $this->db->get_where("merchant", array("id" => $pr->userID))->row()->name,
                        "e_category" => $this->db->get_where("e_category", array("id" => $pr->e_category))->row()->name,
                        "productCode" => $pr->productCode,
                        "name" => $pr->title,
                        "settings" => '<a href="' . base_url("admin/delete/ilanlar_eticaret/" . $pr->id) . '" class="btn btn-info">Sil</a> <a href="' . base_url("admin/delete/onayla_ilanlar_eticaret/" . $pr->id) . '" class="btn btn-success">Onayla</a> <a href="' . base_url("admin/edit/ilanlar_eticaret/" . $pr->id) . '" class="btn btn-danger">Düzenle</a>'
                    );
                }

                break;

            case "ilanlar_onayli":

                $admin = $this->db->get_where("e_product", array("status" => "active"));

                foreach ($admin->result() as $pr) {

                    $arr[] = array(
                        "id" => $pr->id,
                        "create_time" => $pr->create_time,
                        "username" => $this->db->get_where("merchant", array("id" => $pr->userID))->row()->name,
                        "e_category" => $this->db->get_where("e_category", array("id" => $pr->e_category))->row()->name,
                        "productCode" => $pr->productCode,
                        "name" => $pr->title,
                        "settings" => '<a href="' . base_url("admin/delete/ilanlar_eticaret/" . $pr->id) . '" class="btn btn-info">Sil</a> <a href="' . base_url("admin/edit/ilanlar_eticaret/" . $pr->id) . '" class="btn btn-danger">Düzenle</a>'
                    );
                }

                break;
        }

        header("content-type:json");
        echo json_encode($arr);
    }

    public function bulten()
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/bulten', array(
            "status" => ""
        ));

    }

    public function e_ticaret($page = "category", $status = 1)
    {

        if (!$this->session->userdata('admin_logged_in'))
            redirect(base_url("admin/login"));

        $this->smarty->view('admin/e_ticaret_' . $page, array(
            "status" => $status
        ));

    }

    private function resizeImg($file, $width, $height, $quality)
    {
        try {
            /*** the image file ***/
            $image = $file;

            $exp = explode('/', $file);

            $id = explode('.', $exp[2])[0];

            /*** a new imagick object ***/
            $im = new Imagick();

            /*** ping the image ***/
            $im->pingImage($image);

            /*** read the image into the object ***/
            $im->readImage($image);

            /*** thumbnail the image ***/
            $im->thumbnailImage($width, $height);

            $im->setImageFormat('jpeg');
            $im->setImageCompression(Imagick::COMPRESSION_JPEG);
            $im->setImageCompressionQuality($quality);

            /*** Write the thumbnail to disk ***/
            $im->writeImage('assets/upload/' . $id . '.jpg');

            /*** Free resources associated with the Imagick object ***/
            $im->destroy();

            return $file;

        } catch (Exception $e) {
            print $e->getMessage();

            return $file . "<br>";
        }
    }

}