<?php

    function smarty_modifier_get_max_amount ($string)
    {
        $CI = & get_instance ();

        $CI->load->database ();

        if ( $CI->db->query ("select * from product_amount where pid='{$string}'")->num_rows () > 0 ) {

            $data = $CI->db->query ("select * from product_amount where pid='{$string}' order by amount asc")->row ();

            if ( $data->amount ) {

                $str = number_format ($data->amount , 2 , '.' , '');

                $e = explode ("." , $str);

                return $e[ 0 ] . "." . $e[ 1 ];

            } else

                return "0.00";

        } else {

            return "0.00";
        }
    }
