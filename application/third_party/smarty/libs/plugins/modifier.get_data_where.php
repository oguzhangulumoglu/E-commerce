<?php

    function smarty_modifier_get_data_where($string, $table,$findkey, $where, $row)
    {
            $CI= &get_instance();

            $CI->load->database();


        if($CI->db->query("select * from ".$table." where {$findkey}='{$string}' && mid='{$where}' ")->num_rows() > 0){

            return $CI->db->query("select * from ".$table." where {$findkey}='{$string}' && mid='{$where}'")->row()->$row;
        }
    }
