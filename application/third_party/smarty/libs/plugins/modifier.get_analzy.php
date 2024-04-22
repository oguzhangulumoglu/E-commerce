<?php

    function smarty_modifier_get_analzy($string, $row)
    {
            $CI= &get_instance();

            $CI->load->database();

            switch($row){

                case "total_product":

                    echo $CI->db->select("id,mid")->get_where("product_amount", array("mid" => $string))->num_rows() + $CI->db->select("id,userID")->get_where("e_product",  array("userID" => $string))->num_rows();

                    break;

                case "total_category":
                    default:

                        echo $CI->db->select("id,userID")->get_where("e_category", array("userID" => $string))->num_rows() + ($CI->db->select("id,mid")->get_where("product_amount", array("mid" => $string))->num_rows()  > 0 ? 1 : 0);

                    break;
            }

    }
