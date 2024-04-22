<?php

    function smarty_modifier_get_merchant_product ($string, $type)
    {
        $CI = & get_instance ();

        $CI->load->database ();

        $query = $CI->db->select("product_amount.mid,product_amount.pid,product.id,product.category")->join("product","product.id=product_amount.pid")->group_by("product.category")->get_where("product_amount", array("product_amount.mid" => $string));

        switch($type){

            case "num":

                return $query->num_rows();

                break;

            default:

                if ( $query->num_rows () > 0 ) {

                    echo '<ul>';

                    foreach($query->result() as $row){

                        $category = $CI->db->select("id, name, image")->get_where("category", array(
                            "id" => $row->category
                        ))->row();

                        echo '<li><a href="javascript:void(0)" data-toggle="tooltip" title="' . $category->name . '" data-custom-class="custom_tooltip"><img src="' . base_url ($category->image) . '" class="img-responsive" alt=""/></a></li>';

                    }

                    echo '</ul>';

                }


                break;
        }

    }
