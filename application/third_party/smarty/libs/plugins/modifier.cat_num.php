<?php

    function smarty_modifier_cat_num ($string , $user = 0 , $type)
    {
        $CI = & get_instance ();

        $CI->load->database ();

        switch ( $type ) {

            case "cat":

                return $CI->db->query ("select * from e_product where userID='{$user}' && e_category='{$string}' && status='active'")->num_rows ();

                break;

            case "all":

                return ($CI->db->query ("select * from e_product where userID='{$user}' && status='active'")->num_rows () + $CI->db->query ("select * from product_amount where mid='{$user}'")->num_rows ());

            case "lastik":

                return $CI->db->query ("select * from product_amount where mid='{$user}'")->num_rows ();

            case "name":

                return $CI->db->get_where ("e_category" , array ( "id" => $string))->row ()->name;

                break;
        }

    }
