<?php
    include_once 'Bike.php';

//    echo 'counter = ' . Bike::$counter . '<br>';
//    $myBike = new Bike();
//    echo $myBike->getSpeed() . '<br>';
//    $urBike = new Bike(1.23);
//    echo $urBike->getSpeed() . '<br>';
//    echo Bike::$counter . '<br>';

    $myId = new TWId('', true, 0);
    echo $myId->getId() . '<br>';
    if (TWId::checkTWId($myId->getId())){
        echo 'OK';
    }else{
        echo 'XX';
    }

    echo '<hr>';

    try {
        $urID = new TWId('A123456789');
        echo $urID->getId() . '<br>';
    }catch(Exception $e){
        $urID = null;
        echo $e->getMessage();
    }
    echo '<hr>';
