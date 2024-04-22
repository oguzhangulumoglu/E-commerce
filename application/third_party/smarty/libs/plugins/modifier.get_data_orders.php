<?php

    function smarty_modifier_get_data_orders($string)
    {
            $CI= &get_instance();

            $CI->load->database();


        if($CI->db->query("select * from orders_detail where o_id='{$string}'")->num_rows() > 0){

            return $CI->db->query("select *,product.id as pid from orders_detail inner join product on product.id=orders_detail.product_code  where orders_detail.o_id='{$string}'")->result();
        }
    }
