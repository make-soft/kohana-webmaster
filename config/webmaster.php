<?php defined('SYSPATH') or die('No direct script access.');

return array(
    //google-site-verification key
    'gsv' => array (
        'enabled' => FALSE,
        'meta_value' => 'gqIzLjNO4mrR6JY4UuJ8pU8HldEV74Ti_8XYoaOQ43k',
        ),
    // Alexa.com verification key
    'alexa' => array (
        'enabled' => FALSE,
        'meta_value' => '<alexa verification key>',
        ),
    // Google Analytics script    
    'ga' => array (
        'enabled' => FALSE,
        'account' => 'Google Analytics account ID',
        'domainName' => '.lignum-maszyny.pl', // for check sub-domains trafic 
        ),
    // Quantserve.com stats
    'quantserve' => array (
        'enabled' => FALSE,
        'account' => '<Quantserve account ID>',
        ),
    // Geo locate site
    'geolocate' => array (
        'enabled' => FALSE,
        // Dublin Core
        'DC_title' => 'Make-soft.pl',
        'ICBM'  => array (
            'la' => '52.753074', 
            'lo' => '15.227727'
            ),
        'geo' => array (
                'placename' => 'Gorzów Wielkopolski, Polska',
                'region' => 'PL-Lubuskie',
                'position' => '52.753074;15.227727',
            ),
        ),
    );