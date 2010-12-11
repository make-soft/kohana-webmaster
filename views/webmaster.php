<?php defined('SYSPATH') or die('No direct script access.');

    echo View::factory('webmaster/gsv', $config['gsv']);
    echo View::factory('webmaster/alexa', $config['alexa']);
    echo View::factory('webmaster/geo', $config['geolocate']);
    echo View::factory('webmaster/ga', $config['ga']);
    echo View::factory('webmaster/quantserve', $config['quantserve']);
