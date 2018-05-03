<?php
    include_once 'Bike.php';

    $chris = new People();
    $chris->setBike();
    echo $chris->bike->getSpeed().'<br>';

    $you = new People();
    $you->setBike();
    $you->bike->upSpeed();
    $you->bike->upSpeed();
    $you->bike->upSpeed();
    echo $you->bike->getSpeed();
