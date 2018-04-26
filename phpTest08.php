<?php
    $x = $_GET['x'];
    $y = $_GET['y'];
    $z = $x + $y;
    //echo $x . ':' . gettype($x);
    //var_dump($y);   //看 長度 與 值

    echo "{$x} + {$y} = {$z}";