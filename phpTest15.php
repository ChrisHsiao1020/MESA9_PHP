<?php
    $a1[0] = 123;
    $a1[1] = 12.3;
    $a1[2] = 'Chris';
    var_dump($a1);

    echo '<hr>';

    $a2[0] = 123;
    $a2[1] = 12.3;
    $a2[4] = 'Chris';
    var_dump($a2);

    echo '<hr>';

    $a3['name'] = 'Chris';
    $a3['weight'] = 63;
    $a3['gender'] = true;
    $a3['age'] = 35;
    $a3[123] = 456;
    var_dump($a3);

    echo '<hr>';

    $a4 = array(12, 34, 56, 'III', false);
    var_dump($a4);

    echo '<hr>';

    $a1[] = 111;                //依照最大的填入
    $a1[] = 222;
    var_dump($a1);