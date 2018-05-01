<?php
    $p = array(1 => 0,0,0,0,0,0);

//    for ($i = 0; $i < 100; $i++){
//        $point = rand(1,6);
//        $p[$point]++;
//    }

    for ($i = 0; $i < 100; $i++){
        $point = rand(1,9);
        $p[$point>=7?$point-3:$point]++;
    }

    for ($i = 1; $i <= 6; $i++){
        echo "{$i}點出現{$p[$i]}次<br>";
    }

    echo '<br>';
    for ($i = 1; $i <= count($p); $i++){                //尋訪陣列元素
        echo "{$i}點出現{$p[$i]}次<br>";
    }

    echo '<br>';
    foreach ($p as $key => $value){                     //foreach用法
        echo "{$key}點出現{$value}次<br>";
    }