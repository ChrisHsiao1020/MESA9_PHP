<?php
    include 'MyOOTest2.php';

    $obj1 = new Rectangle();
    $obj2 = new Triangle();

    calShapeArea($obj1);
    echo '<hr />';
    calShapeArea($obj2);
    echo '<hr />';

    $s1 = new Student1(); $s2 = new Student2(); $s3 = new Student3();

    if ($s3 instanceof iOS){            //檢查是否繼承某個類別
        echo 'OK';
    }else{
        echo 'XX';
    }

    function calShapeArea(Shape $shape){
        $shape->calArea();
    }