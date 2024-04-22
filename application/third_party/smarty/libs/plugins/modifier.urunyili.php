<?php

    function smarty_modifier_urunyili ($id)
    {
        $CI = & get_instance ();

        $CI->load->database ();

        return $CI->db->get_where ("product_amount" , array ( "pid" => $id ))->num_rows () > 0 ? ! $CI->db->get_where ("product_amount" , array ( "pid" => $id ))->row ()->year ? '-' : $CI->db->get_where ("product_amount" , array ( "pid" => $id ))->row ()->year : '-';

    }
