<?php

    function smarty_modifier_get_amount ($id , $type)
    {
        $CI = & get_instance ();

        $CI->load->database ();

        $query = $CI->db->get_where ("product" , array ( "id" => $id ));

        if ( $query->num_rows () > 0 ) {

            switch ( $type ) {

                case "amount":

                    $amount = $CI->db->select('amount,pid')->order_by ('amount' , 'asc')->get_where ("product_amount" , array ( "pid" => $id ));

                    return $amount->row ()->amount;

                    break;

                case "merchant":

                    $amount = $CI->db->select('mid,pid')->order_by ('amount' , 'asc')->get_where ("product_amount" , array ( "pid" => $id ));

                    return $amount->row ()->mid;

                    break;
            }
        }
    }
