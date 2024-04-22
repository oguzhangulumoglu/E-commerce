<?php

    function smarty_modifier_comments($id, $type)
    {
            $CI= &get_instance();

            $CI->load->database();


        switch($type){

            case "merchant":

                if($CI->db->get_where("comment", array("type" => "merchant", "c_id" => $id))->num_rows() > 0){

                    $return =  ceil(
                        $CI->db->get_where("comment", array("type" => "merchant", "c_id" => $id))->num_rows()
                    );

                }else{

                    $return = 0;
                }

                break;

            case "merchant_stars":

                if($CI->db->get_where("comment", array("type" => "merchant", "c_id" => $id))->num_rows() > 0){

                    $return =  ceil(
                        $CI->db->select("*, SUM(rating) as total")->get_where("comment", array("type" => "merchant", "c_id" => $id))->row()->total
                        /
                        $CI->db->get_where("comment", array("type" => "merchant", "c_id" => $id, "rating >" => "0"))->num_rows()
                    );

                }else{

                    $return = 0;
                }

                break;

            case "product_stars":

                if($CI->db->get_where("comment", array("type" => "product", "c_id" => $id))->num_rows() > 0){

                    $return =  ceil($CI->db->select("*, SUM(rating) as total")->get_where("comment", array("type" => "product", "c_id" => $id))->row()->total/$CI->db->get_where("comment", array("type" => "product", "c_id" => $id))->num_rows());

                }else{

                    $return = 0;
                }

                break;

            case "product":

                if($CI->db->get_where("comment", array("type" => $type, "c_id" => $id))->num_rows() > 0){

                    $return = $CI->db->get_where("comment", array("type" => $type, "c_id" => $id))->num_rows();

                }else{

                    $return = 0;
                }

                break;

            case "last_product_comments":

                if($CI->db->get_where("comment", array("type" => $type, "c_id" => $id))->num_rows() > 0){

                    $return = ucfirst($CI->db->order_by("id", "desc")->get_where("comment", array("type" => $type, "c_id" => $id))->row()->text);

                }else{

                    $return = "Üzgünüm, yorum bulunmuyor.";
                }

                break;
        }


       return $return;
    }
