<?php

    function smarty_modifier_get_data_img($string, $table, $row)
    {
            $CI= &get_instance();

            $CI->load->database();


        if($CI->db->query("select * from ".$table." where pid='{$string}'")->num_rows() > 0){

            return $CI->db->query("select * from ".$table." where pid='{$string}'")->row()->$row;
        }
    }
