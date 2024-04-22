<?php  if ( ! defined ('BASEPATH') )
    exit( 'No direct script access allowed' );

    class Tools
    {

        public function permalink ($string)
        {
            $find = array ( 'Ç' , 'Ş' , 'Ğ' , 'Ü' , 'İ' , 'Ö' , 'ç' , 'ş' , 'ğ' , 'ü' , 'ö' , 'ı' , '+' , '#' );
            $replace = array ( 'c' , 's' , 'g' , 'u' , 'i' , 'o' , 'c' , 's' , 'g' , 'u' , 'o' , 'i' , 'plus' , 'sharp' );
            $string = strtolower (str_replace ($find , $replace , $string));
            $string = preg_replace ("@[^A-Za-z0-9+]@i" , ' ' , $string);
            $string = trim (preg_replace ('/\s+/' , ' ' , $string));
            $string = str_replace (array ( ' ' , '.' ) , array ( '-' , '' ) , $string);

            return $string;
        }

        function get_ip_address ()
        {
            static $ip_address;
            if ( null === $ip_address ) {
                // where are we looking?
                $locations = array (
                    'HTTP_CLIENT_IP' ,
                    'REMOTE_ADDR' ,
                    'HTTP_X_FORWARDED_FOR' ,
                    'HTTP_PC_REMOTE_ADDR' ,
                );
                // search for the IP address
                foreach ( $locations as $location ) {
                    if ( isset( $_SERVER[ $location ] ) ) {
                        $ip_address = $_SERVER[ $location ];
                        break;
                    }
                }
                // may contain multiple addresses
                if ( false !== strpos ($ip_address , ',') ) {
                    $ip_address = explode (',' , $ip_address);
                    $ip_address = end ($ip_address);
                }
                $ip_address = trim ($ip_address);
                // match the ip address against an IPv4 pattern matcher
                if ( ! preg_match ('/^\d{1,3}(\.\d{1,3}){3}$/' , $ip_address) ) {
                    $ip_address = '0.0.0.0';
                }
            }

            return $ip_address;
        }


    }