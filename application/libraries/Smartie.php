<?php  if ( ! defined ('BASEPATH') ) exit( 'No direct script access allowed' );
    require_once ( APPPATH . 'third_party/smarty/libs/Smarty.class.php' );

    class Smartie extends Smarty
    {

        var $debug = false;

        public $defualtType = ".tpl";

        function __construct ()
        {
            parent::__construct ();

            $this->template_dir = APPPATH . "views/";
            $this->compile_dir = APPPATH . "cache/templates_c";
            if ( ! is_writable ($this->compile_dir) ) {
                @chmod ($this->compile_dir , 0777);
            }

            $this->caching = 0;

            $this->assign ('FCPATH' , FCPATH); // path to website
            $this->assign ('APPPATH' , APPPATH); // path to application directory
            $this->assign ('BASEPATH' , BASEPATH); // path to system directory

        }

        function setDebug ($debug = true)
        {
            $this->debug = $debug;
        }

        function view ($template , $data = array() , $return = FALSE)
        {
            if ( ! $this->debug ) {
                $this->error_reporting = false;
            }
            $this->error_unassigned = false;

            foreach ( $data as $key => $val ) {
                $this->assign ($key , $val);
            }

            if ( $return == FALSE ) {
                $CI =& get_instance ();
                if ( method_exists ($CI->output , 'set_output') ) {
                    $CI->output->set_output ($this->fetch ($template . $this->defualtType));
                } else {
                    $CI->output->final_output = $this->fetch ($template . $this->defualtType);
                }

                return;

            } else {

                return $this->fetch ($template . $this->defualtType);
            }
        }
    }
