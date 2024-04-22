<?php

    function smarty_modifier_get_services ($string , $type)
    {
        $CI = & get_instance ();

        $CI->load->database ();

        $merchantServices = $CI->db->get_where ("merchant_duty" , array ( "m_id" => $string ));

        switch ( $type ) {

            case "num":

                $num = $CI->db->get_where ("merchant_duty" ,
                    array (
                        "m_id" => $string ,
                        "service_1" => "0" ,
                        "service_2" => "0" ,
                        "service_3" => "0" ,
                        "service_4" => "0" ,
                        "service_5" => "0" ,
                        "service_6" => "0" ,
                        "service_7" => "0" ,
                        "service_8" => "0" ,
                        "service_9" => "0" ,
                        "service_10" => "0" ,
                        "service_11" => "0" ,
                        "service_12" => "0" ,
                        "service_13" => "0" ,
                        "service_14" => "0"
                    )
                )->num_rows ();

                return $num > 0 ? 0 : 1;

                break;

            default:

                if ( $merchantServices->num_rows () > 0 ) {

                    echo '<ul>';

                    $i = 1;

                    $mRow = $merchantServices->row ();

                    foreach ( $CI->db->get ("services")->result () as $row ) {

                        $key = "service_" . $row->id;

                        if ( $mRow->$key == '1' ) {

                                echo '<li class="'.($i < 6 ? '' : 'hidden').'"><a href="javascript:void(0)" data-toggle="tooltip" title="' . $row->name . '" data-custom-class="custom_tooltip"><img src="' . base_url ($row->image) . '" class="img-responsive" alt=""/></a></li>';

                            $i ++;

                        }

                    }

                    echo '<li class="hidden" style="position: absolute;"><a href="javascript:void('.$string.')" data-merchantID="'.$string.'" class="merchant-btn refush-btn" style="background: #ce202a;font-size: 18px;color: #fff;text-align: center;padding: 8px 0;"><i class="fa fa-fw fa-times" aria-hidden="true"></i></a></li>';

                    if ( $i > 5 ) {
                        echo '<li><a href="javascript:void('.$string.')" data-merchantID="'.$string.'" class="merchant-btn btn-red" >+' . ( $i - 6 ) . '</a></li>';
                    }


                    echo '</ul>';

                } else {

                    echo $string;

                }


                break;
        }

    }
