<?php

    function smarty_modifier_get_data_car($string)
    {
            $CI= &get_instance();

            $CI->load->database();


        if($CI->db->query("select * from car_model where make_id='{$string}'")->num_rows() > 0){

            return $CI->db->query("select * from car_model where make_id='{$string}'")->result();
        }
    }
