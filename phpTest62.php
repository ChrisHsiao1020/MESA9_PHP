I am phpTest62<hr>
<?php
    include_once 'MyOOTest.php';

    session_start();

////    $a = rand(1,49);
////    $a = 1.234;
////    $a = TRUE;
//    $a = array(1,2,3,4);
//    //echo $a;
//    $_SESSION['a'] = $a;
//
//    $a[2] = 100;
//    foreach ($a as $k => $v){
//        echo "{$k} : {$v}<br>";
//    }

//    $fp = fopen('chris.txt', 'w+');
//    echo gettype($fp);
//    //fwrite($fp, 'Hello, Chris');
//    $_SESSION['fp'] = $fp;

    $s1 = new Student(90,87,94);
    echo $s1->calSum() . ":" . $s1->calAvg();

    $_SESSION['s1'] = $s1;

    $s1->ch = 100;
    $s1->eng = 47;

?>
<hr />
<a href="phpTest63.php">phpTest63</a>
