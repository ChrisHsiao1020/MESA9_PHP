<?php
    $fp = opendir("dir1");                               // 相對路徑
    //$fp = opendir("/Applications/MAMP/htdocs/test1");     // / --> 根，絕對路徑
    //echo gettype($fp);            //目錄若不存在會傳回布林值

    while ($file = readdir($fp)){   //readdir讀不到時傳回0
        echo $file . '<br>';
    }
    closedir($fp);

//    $s1 = readdir($fp);           //. 本目錄
//    echo $s1 . '<br>';
//    $s1 = readdir($fp);           //.. 上一層
//    echo $s1 . '<br>';
//    $s1 = readdir($fp);
//    echo $s1 . '<br>';
//    $s1 = readdir($fp);
//    echo $s1 . '<br>';