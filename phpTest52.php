<?php
    include_once 'Bike.php';

    $myScooter = new Scooter(4);
    echo $myScooter->getSpeed() . '<br>';            //如果子類別沒有建構式則會使用父類別的建構式
    $myScooter->upSpeed();
    $myScooter->upSpeed();
    echo $myScooter->getSpeed() . '<br>';
    $myScooter->downSpeed();
    echo $myScooter->getSpeed() . '<br>';
    $myScooter->upSpeed(4);
    echo $myScooter->getSpeed() . '<br>';