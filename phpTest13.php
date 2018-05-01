<?php

//    $v = 10;
//
//    switch ($v){
//        case 1:
//            echo 'A';
//            break;
//        case 10:
//            echo 'B';
//            break;
//        case 100:
//            echo 'C';
//            break;
//        default:
//            echo 'X';
//            break;
//    }

    //switch case語法要用break跳出，否則會往下執行

    $m = rand(1,12);
    echo $m . '<br>';
    switch ($m){
//        case 1:
//            echo '一月有31天';
//            break;
//        case 2:
//            echo '二月有28天';
//            break;
//        case 3:
//            echo '三月有31天';
//            break;
//        case 4:
//            echo '四月有30天';
//            break;
//        case 5:
//            echo '五月有31天';
//            break;
//        case 6:
//            echo '六月有30天';
//            break;
//        case 7:
//            echo '七月有31天';
//            break;
//        case 8:
//            echo '八月有31天';
//            break;
//        case 9:
//            echo '九月有30天';
//            break;
//        case 10:
//            echo '十月有31天';
//            break;
//        case 11:
//            echo '十一月有30天';
//            break;
//        case 12:
//            echo '十二月有31天';
//            break;
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo '31';
            break;
        case 4:
        case 6:
        case 9:
        case 11:
        default:
            echo '30';
            break;
        case 2:
            echo '28';
            break;
    }

    echo '<hr>';