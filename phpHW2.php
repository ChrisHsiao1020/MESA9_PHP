<?php
    $poker = array();
    for ($i = 0; $i < 52; $i++) $poker[] = $i;
    $temp = '';

    for ($i = 51; $i >= 0; $i--) {
        $rand = rand(0,$i);
        $temp = $poker[$i];
        $poker[$i] = $poker[$rand];
        $poker[$rand] = $temp;
        echo "$poker[$i]<br>";
    }
