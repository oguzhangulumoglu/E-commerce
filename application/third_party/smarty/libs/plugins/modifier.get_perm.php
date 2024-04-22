<?php

    function smarty_modifier_get_perm ($username , $key)
    {
        $CI = & get_instance ();

        $CI->load->database ();


        if ( $CI->db->get_where ("admin" , array ( "username" => $username ))->num_rows () > 0 ) {

            return $CI->db->get_where ("admin" , array ( "username" => $username ))->row_array ()[ $key ];
        }
    }
