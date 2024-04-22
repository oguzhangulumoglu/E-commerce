<?php

    function smarty_modifier_get_data_num($string, $table, $cell , $row, $search)
    {
            $CI= &get_instance();

            $CI->load->database();


        if($CI->db->query("select * from ".$table." where merchartID='{$string}' && words='{$cell}' && {$row} like '%{$search}%'")->num_rows() > 0){

            return $CI->db->query("select * from ".$table." where merchartID='{$string}' && words='{$cell}' && {$row} like '%{$search}%'")->num_rows();
        }
    }
