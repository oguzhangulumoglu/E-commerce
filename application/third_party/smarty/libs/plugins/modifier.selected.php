<?php

    function smarty_modifier_selected ($id , $type , $merchantID)
    {
        if ( ! function_exists ('get_instance') )
            return "Can't get CI instance";

        $CI =& get_instance ();

        $CI->load->database ();

        if ( $CI->db->query ("select * from merchant_detail where merchartID='{$merchantID}' && words='{$type}'")->num_rows () > 0 ) {

            $array = explode ("," , $CI->db->query ("select * from merchant_detail where merchartID='{$merchantID}' && words='{$type}'")->row ()->data);

            $a = array_key_exists ($id , $array);

            if ( $a )
                return "checked";
        }

        // Fixme: yapılacak ilk indis görmüyor

    }
