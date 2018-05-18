<?php
// 查檔
//    $filename = $_REQUEST['filename'];
//    $cont = $_REQUEST['cont'];
//
//    $fp = fopen("./{$filename}", 'w');
//
//    fwrite($fp, $cont);
//
//    fclose($fp);
//
//    header("Location: ./{$filename}");

// 讀取
    $fp = fopen("./history.txt", 'r');
    while ($c = fgetss($fp)){
        echo $c . '<br>';
    }
    fclose($fp);

// 寫入
//    $fp = fopen("./history.txt", 'a+');
//    fwrite($fp, "12345");
//    fclose($fp);