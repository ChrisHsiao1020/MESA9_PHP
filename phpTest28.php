<?php
//    $s = "123";         //中文字一個字佔3個長度
//    echo strlen($s);

    $mystring = 'abc';
    $findme = 'a';
    $pos = strpos($mystring, $findme);   //查字元在字串第幾個位址

    if ($pos === false) {
        echo 'XX';
    }else{
        echo 'OK';
    }