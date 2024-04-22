<?php

    function smarty_modifier_get_product ($string)
    {
        $CI = & get_instance ();

        $CI->load->database ();

        return $CI->db->select ("id,brand")->get_where ("product" , array ( "brand" => $string ))->num_rows ();

    }
