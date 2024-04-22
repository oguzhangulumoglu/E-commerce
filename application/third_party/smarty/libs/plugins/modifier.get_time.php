<?php

    function smarty_modifier_get_time ($string)
    {
        $time = explode (" " , $string);

        $date = explode ("-" , $time[ 0 ]);

        return $date[ 2 ] . "/" . $date[ 1 ] . "/" . $date[ 0 ] . " " . $time[ 1 ];

    }
