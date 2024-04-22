<?php

    function smarty_modifier_get_data_session($string, $table, $row)
    {
        $CI= &get_instance();

        $CI->load->database();

        $user = $CI->db->query("select * from merchant where email='{$_SESSION["email"]}'")->row();

        if($CI->db->query("select * from ".$table." where mid='{$user->id}' && pid='{$string}'")->num_rows() > 0){

            return $CI->db->query("select * from ".$table." where mid='{$user->id}' && pid='{$string}'")->row()->$row;
        }

    }
