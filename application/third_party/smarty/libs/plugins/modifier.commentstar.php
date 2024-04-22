<?php

    function smarty_modifier_commentstar ($id)
    {
        $CI = & get_instance ();

        $CI->load->database ();


        if ( $CI->db->get_where ("comment" , array ( "type" => "marka" , "c_id" => $id ))->num_rows () > 0 ) {

            $return = ceil ($CI->db->select ("*, SUM(rating) as total")->get_where ("comment" , array ( "type" => "marka" , "c_id" => $id ))->row ()->total / $CI->db->get_where ("comment" , array ( "type" => "marka" , "c_id" => $id ))->num_rows ());

        } else {

            $return = 0;
        }

        return $return;
    }
