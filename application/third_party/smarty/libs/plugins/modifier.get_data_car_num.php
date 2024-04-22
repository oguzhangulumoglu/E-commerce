<?php

    function smarty_modifier_get_data_car_num($string, $id)
    {
            $CI= &get_instance();

            $CI->load->database();


        if($CI->db->query("select * from product where id='{$id}' && car like '%{$string}%'")->num_rows() > 0){

            return $CI->db->query("select * from product where id='{$id}' && car like '%{$string}%'")->num_rows();
        }
    }
