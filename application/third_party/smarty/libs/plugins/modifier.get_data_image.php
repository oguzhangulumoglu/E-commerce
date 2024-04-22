<?php

    function smarty_modifier_get_data_image($string, $row)
    {
            $CI= &get_instance();

            $CI->load->database();


        if($CI->db->query("select * from product_img where patern_id='{$string}'")->num_rows() > 0){

            return $CI->db->query("select * from product_img where patern_id='{$string}'")->row()->image;
        }
    }
