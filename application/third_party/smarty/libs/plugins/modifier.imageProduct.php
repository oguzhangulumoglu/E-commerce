<?php

    function smarty_modifier_imageProduct($string)
    {
            $CI= &get_instance();

            $CI->load->database();

        if($CI->db->query("select * from e_product_img where productID='{$string}'")->num_rows() > 0){

            return $CI->db->query("select * from e_product_img where productID='{$string}'")->row()->uri;
        }else {
            return "/assets/images/no_image.jpg";
        }
    }
