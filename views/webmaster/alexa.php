<?php 

if (!$enabled || $meta_value == '')
   return;
echo Webmaster::meta('alexaVerifyID', $meta_value);
