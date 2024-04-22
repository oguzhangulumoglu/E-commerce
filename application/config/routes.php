<?php
    defined ('BASEPATH') OR exit( 'No direct script access allowed' );

    $route[ 'default_controller' ] = 'Main';

    $route[ 'genel/lastik/(:any)' ] = 'Main/product/$1';
    $route[ 'genel/lastik/(:any)/(:any)' ] = 'Main/product/$1/$2';
    $route[ 'genel/bayi/(:any)' ] = 'Main/merchant/$1';

    $route[ 'lastik-markalari' ] = 'Main/marca';
    $route[ 'lastik-saticilari' ] = 'Main/sales';
    $route[ 'en-yakin-bayi-arama' ] = 'Main/merchant_search/1';

    $route[ 'en-yakin-aku-bayi-arama' ] = 'Main/merchant_search/2';

    $route[ 'ile-gore-lastik-bayisi-ara' ] = 'Main/merchant_bayi/lastik';
    $route[ 'ile-gore-aku-bayisi-ara' ] = 'Main/merchant_bayi/aku';

    $route[ 'bayide-ara/(:any)' ] = 'Main/merchants_search/$1';
    $route[ 'bayide-ara/(:any)/(:any)' ] = 'Main/merchants_search/$1/$2';
    $route[ 'bayide-lastik/(:any)/(:any)' ] = 'Main/search_merchant/$1/$2';
    $route[ 'bayide-lastik/(:any)/(:any)/(:any)' ] = 'Main/search_merchant/$1/$2/$3';
    $route[ 'marka/(:num)/(:any)' ] = 'Main/marca_detail/$1';
    $route[ 'lastik-saticisi/(:num)/(:any)' ] = 'Main/sales_detail/$1';
    $route[ 'lastik-satici-arama' ] = 'Main/merchant_search/3';

    // Cart Route

    $route[ 'bayi/(:any)/(:any)/(:any)' ] = 'Main/merchant_sales/$1/$2/$3';

    $route[ '404_override' ] = '';
    $route[ 'sitemap.xml' ] =  'Main/sitemap';
    $route[ 'translate_uri_dashes' ] = false;
