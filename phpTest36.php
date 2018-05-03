<?php
    date_default_timezone_set("Asia/Taipei");

    $fp = opendir("test1");                               // 相對路徑
    //$fp = opendir("/Applications/MAMP/htdocs/test1");     // / --> 根，絕對路徑
    //echo gettype($fp);            //目錄若不存在會傳回布林值

//    while ($file = readdir($fp)){   //readdir讀不到時傳回0
//        echo $file . '<br>';
//    }

    while ($file = readdir($fp)){
        if (is_dir("test1/{$file}")){
            echo '[dir]';
        }else if (is_file("test1/{$file}")){
            echo '[file]';
        }
        echo $file . ':' . filesize("test1/{$file}") .
        ':'.
        date("Y-m-d H:i:s",
            filemtime("test1/{$file}")) . '<br>';
    }
    closedir($fp);

    //@unlink("test1/chris1.txt");

    //mkdir("test2");

//    $s1 = readdir($fp);           //. 本目錄
//    echo $s1 . '<br>';
//    $s1 = readdir($fp);           //.. 上一層
//    echo $s1 . '<br>';
//    $s1 = readdir($fp);
//    echo $s1 . '<br>';
//    $s1 = readdir($fp);
//    echo $s1 . '<br>';