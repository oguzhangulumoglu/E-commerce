<?php

    function smarty_modifier_get_image ($string , $key)
    {
        $CI = & get_instance ();

        $CI->load->database ();

        if ( $CI->db->query ("select * from e_product_img where productID='{$string}'")->num_rows () > 0 ) {

            return $CI->db->query ("select * from e_product_img where productID='{$string}' order by id asc")->row ()->$key;

        } else {

            return "/assets/images/no_image.jpg";
        }
    }
