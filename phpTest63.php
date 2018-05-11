I am phpTest63<hr>
<?php
    include_once 'MyOOTest.php';
    session_start();
//    $a = $_SESSION['a'];
//    var_dump($a);
//
//    //echo $a;

//    $fp = $_SESSION['fp'];
//    echo gettype($fp);
//    //fwrite($fp, 'Hello, Chris')

    if (!isset($_SESSION['s1'])) header('Location: phpTest62.php');

    $s1 = $_SESSION['s1'];
    echo $s1->calSum() . ":" . $s1->calAvg();
?>
<a href="phpTest64.php">phpTest64</a>
