<?php

    function smarty_modifier_is ($id , $type , $merchant)
    {
        $CI = & get_instance ();

        $CI->load->database ();


        switch ( $type ) {

            case "brand":

                if ( $CI->db->select ("*")->join ("product_amount" , "product.id=product_amount.pid")->get_where ("product" , array ( "product.brand" => $id , "product_amount.mid" => $merchant ))->num_rows () > 0 ) {

                    return 1;

                } else {

                    return false;
                }

                break;

            case "tire_width":

                if ( $CI->db->select ("*")->join ("product_amount" , "product.id=product_amount.pid")->get_where ("product" , array ( "product.tire_width" => $id , "product_amount.mid" => $merchant ))->num_rows () > 0 ) {

                    return 1;

                } else {

                    return false;
                }

                break;

            case "tire_rate":

                if ( $CI->db->select ("*")->join ("product_amount" , "product.id=product_amount.pid")->get_where ("product" , array ( "product.tire_rate" => $id , "product_amount.mid" => $merchant ))->num_rows () > 0 ) {

                    return 1;

                } else {

                    return false;
                }

                break;

            case "rim_diameter":

                if ( $CI->db->select ("*")->join ("product_amount" , "product.id=product_amount.pid")->get_where ("product" , array ( "product.rim_diameter" => $id , "product_amount.mid" => $merchant ))->num_rows () > 0 ) {

                    return 1;

                } else {

                    return false;
                }

                break;

            case "speed_index":

                if ( $CI->db->select ("*")->join ("product_amount" , "product.id=product_amount.pid")->get_where ("product" , array ( "product.speed_index" => $id , "product_amount.mid" => $merchant ))->num_rows () > 0 ) {

                    return 1;

                } else {

                    return false;
                }

                break;

            case "season":

                if ( $CI->db->select ("*")->join ("product_amount" , "product.id=product_amount.pid")->get_where ("product" , array ( "product.season" => $id , "product_amount.mid" => $merchant ))->num_rows () > 0 ) {

                    return 1;

                } else {

                    return false;
                }

                break;

            case "patern":

                if ( $CI->db->select ("*")->join ("product_amount" , "product.id=product_amount.pid")->get_where ("product" , array ( "product.patern" => $id , "product_amount.mid" => $merchant ))->num_rows () > 0 ) {

                    return 1;

                } else {

                    return false;
                }

                break;
        }

    }
