<?php 

if (!$enabled || $meta_value == '')
    return;

echo Webmaster::meta('google-site-verification', $meta_value);