<?php
    //$var1 = 10;
    //$var1 = '10';                       //彈性大，'   10'或'10   '都會判斷為10
    //if ($var1 == 10) {
    //if ($var1 === 10) {                 //三個等號比型別跟其值
    $var1 = '';                           //0, '0', '' Boolean判斷皆為false，'00'判斷為true
    if ($var1) {
        echo 'OK';
    } else {
        echo 'XX';
    }