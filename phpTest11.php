<?php
//    $score = 70;
//    if ($score >= 60){
//        echo 'PASS';
//    }else{
//        echo 'DOWN';
//    }

    $score = rand(0,100);
    echo $score . '<br>';
    if ($score >= 60){
        echo 'PASS';
    }else{
        echo 'DOWN';
    }

    echo '<hr>';
    $var1 = 10; $var2 =3;
    if ($var1-- <= 10 && $var2++ > 3){
        echo "OK: {$var1} : {$var2}<br>";
    } else {
        echo "XX: {$var1} : {$var2}<br>";
    }


    //HomeWork:判斷是否閏年? 用if判斷式
    //%4 = 0 v
    //%100 = 0 x
    //%400 = 0 v