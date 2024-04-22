<?php
    defined ('BASEPATH') OR exit( 'No direct script access allowed' );

    class Optimize extends CI_Controller
    {

        function dir ()
        {

            foreach ( $this->db->order_by('id','asc')->get ("product_img")->result () as $row ) {

                if ( ! is_dir ("assets/upload/" . $row->pid) ) {

                    mkdir ("assets/upload/" . $row->pid , '0777');
                }

                if(count(explode('/', $row->image)) === 3) {

                    $name = str_replace ("assets/upload/" , "" , $row->image);

                    copy( $row->image, "assets/upload/" . $row->pid . "/" . $name);

                    $this->db->where ("id" , $row->id);

                    $this->db->update ("product_img" , array (
                        "image" => "assets/upload/" . $row->pid . "/" . $name
                    ));

                    unlink($row->image);

                    echo "OK--> Copy_IMG(".$row->id.")---> PID_No".$row->pid. "--> Rand:".md5($row->pid)."\n";

                }

                /*
                $name = str_replace ("assets/upload/" , "" , $row->image);

                $this->db->where ("id" , $row->id);

                $this->db->update ("product_img" , array (
                    "image" => "assets/upload/" . $row->pid . "/" . $name
                ));
                */

            }
        }
    }