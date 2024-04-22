<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Europe/Istanbul');

class Online extends CI_Controller
{
    public $data = array();
    public $SMTP_HOST = "smtp.yandex.com.tr";
    public $SMTP_USER = "info@lastikkent.com.tr";
    public $SMTP_PASS = "Aziz2016";
    public $SMTP_PORT = "587";
    public $allow_ips = array(
        // '162.158.111.236',
        '0.0.0.0'
    );

    function __construct()
    {
        parent::__construct();
        if (in_array($this->tools->get_ip_address(), $this->allow_ips))
            exit('Inappropriate access detected');
    }

    public function getSeo ($tag)
    {
        $this->load->library ('Memcached_library');
        if ( $cache = $this->memcached_library->get ('cache_' . $tag) === false ) {
            $results = $this->db->get_where ("settings" , array ( "tag" => $tag ))->row ();
            $this->memcached_library->add ('cache_' . $tag , $results , 10);
        } else {
            $results = $this->memcached_library->get ('cache_' . $tag);
        }

        return $results;
    }

    private function getCacheData ($tag)
    {
        $this->load->library ('Memcached_library');
        if ( $cache = $this->memcached_library->get ($tag) === false ) {
            $results = $this->db->get ($tag)->result ();
            $this->memcached_library->add ($tag , $results , 10);
        } else {
            $results = $this->memcached_library->get ($tag);
        }

        return $results;
    }

    private function getCachePage ($id)
    {
        $this->load->library ('Memcached_library');
        if ( $cache = $this->memcached_library->get ("get_page_" . $id) === false ) {
            $results = $this->db->get_where ("page" , array ( "category" => $id ))->result ();
            $this->memcached_library->add ("get_page_" . $id , $results , 10);
        } else {
            $results = $this->memcached_library->get ("get_page_" . $id);
        }

        return $results;
    }

    public function sales($e = null)
    {

        if ( ! $this->session->userdata ('logged_in') )
            redirect (base_url ("main/login"));

        $this->db->where ("email" , $this->session->userdata ('email'));

        $data = $this->db->get ("merchant")->row_array ();

        if ( $this->input->get ("search" , true) ) {
            $this->db->like ("name" , $this->input->get ("search" , true) , 'both');
        }
        if ( $this->input->get ("category" , true) ) {
            $this->db->where ("brand" , $this->input->get ("category" , true));
        }
        if ( $this->input->get ("tire_width" , true) ) {
            $this->db->where ("tire_width" , $this->input->get ("tire_width" , true));
        }
        if ( $this->input->get ("tire_rate" , true) ) {
            $this->db->where ("tire_rate" , $this->input->get ("tire_rate" , true));
        }
        if ( $this->input->get ("rim_diameter" , true) ) {
            $this->db->where ("rim_diameter" , $this->input->get ("rim_diameter" , true));
        }
        if ( $this->input->get ("season" , true) ) {
            $this->db->where ("season" , $this->input->get ("season" , true));
        }

        $list = $this->db->join ("product" , "product.id=product_amount.pid")->get_where ("product_amount" , array ( "product_amount.mid" => $data[ "id" ] ))->result ();

        $arr = array (
            'title' => 'Online satış',
            "keywords" => self::getSeo ("duty_keywords")->name ,
            "description" => self::getSeo ("duty_description")->name ,
            "complete" => $e ,
            "phone" => self::getSeo ("phone")->name ,
            "email_sistem" => self::getSeo ("email")->name ,
            "email_sales" => self::getSeo ("email_sales")->name ,
            "adresss" => self::getSeo ("adress")->name ,
            "pages" => self::getCachePage (1) ,
            "pages2" => self::getCachePage (2) ,
            "list" => $this->db->get_where ("product" , array ( "myamount !=" => "" ))->result () ,
            "category" => self::getCacheData ("brand") ,
            "select_tire_rate" => self::getCacheData ("tire_rate") ,
            "select_tire_width" => self::getCacheData ("tire_width") ,
            "select_rim_diameter" => self::getCacheData ("rim_diameter") ,
            "select_speed_index" => self::getCacheData ("speed_index") ,
            "select_season" => self::getCacheData ("season") ,
            "select_category" => self::getCacheData ("category") ,
        );

        foreach ( $arr as $key => $val ) {

            $data[ $key ] = $val;

        }

        $this->smarty->view ('online_sales' , $data);

    }
}