<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    /*
    | -------------------------------------------------------------------------
    | Memcached settings
    | -------------------------------------------------------------------------
    | Your Memcached servers can be specified below.
    |
    |	See: https://codeigniter.com/user_guide/libraries/caching.html#memcached
    |
    */

    $memcached['servers'] = [

        'default' => [

            'host'            => 'localhost',
            'port'            => '11211',
            'weight'          => '1',
            'persistent'      => false,

        ],
    ];

    // --------------------------------------------------------------------------
    // Configuration
    // --------------------------------------------------------------------------
    $memcached['config'] = [

        'engine'                 => 'Memcache',                // Set which caching engine you are using. Acceptable values: Memcached or Memcache
        'prefix'                 => '',                        // Prefixes every key value (useful for multi environment setups)
        'compression'            => false,                    // Default: FALSE or MEMCACHE_COMPRESSED Compression Method (Memcache only).

        // Not necessary if you already are using 'compression'
        'auto_compress_tresh'      => false,                    // Controls the minimum value length before attempting to compress automatically.
        'auto_compress_savings'    => 0.2,                        // Specifies the minimum amount of savings to actually store the value compressed. The supplied value must be between 0 and 1.

        'expiration'               => 3600,                    // Default content expiration value (in seconds)
        'delete_expiration'        => 0,                        // Default time between the delete command and the actual delete action occurs (in seconds)

    ];

    $config['memcached'] = $memcached;

