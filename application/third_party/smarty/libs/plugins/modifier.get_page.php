<?php

    function smarty_modifier_get_page ($string)
    {
        $CI = & get_instance ();

        $CI->load->database ();

        return $CI->db->get_where ("page" , array ( "category" => $string ))->result ();

    }
