<?php
    for ($i = 0; $i < 10; $i++){
        echo "{$i}<br>";
    }
    echo '<hr>';

    //for(;;)無窮迴圈

    $j = 1;
    for (sayYa(); $j<10; showHr()){
        echo "{$j}<br>";
        $j++;
    }

    function sayYa(){
        echo 'Ya';
    }

    function showHr(){
        echo '<hr>';
    }