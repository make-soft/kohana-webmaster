<?php 
    $CRLF = "\r\n";
    if (!$enabled)
        return;
        
    if ($DC_title != '')
        echo Webmaster::meta('DC.title', $DC_title);
    foreach ($geo as $key => $value)
        if ($value != '')
            echo Webmaster::meta('geo.'.$key, $value);
    if ($ICBM['la'] != '' && $ICBM['lo'] != '')
        echo Webmaster::meta('ICBM', sprintf('%s, %s', $ICBM['la'], $ICBM['lo']));
