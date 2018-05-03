<?php
//    $fp = fopen("test1/chris2.txt", 'r');
//
//
//    //$cont = fread($fp, 4096);
////    while ($c = fgetc($fp)){
//    while ($c = fgetss($fp)){
//        echo $c . '<br>';
//    }
//    fclose($fp);

    $fp = fopen("test1/chris2.txt", 'a+');

    fwrite($fp, "Hello, Chris");
//    $cont = fread($fp, 4096);
//    echo $cont;

    fclose($fp);        //寫入動作一定要close，避免資料遺失