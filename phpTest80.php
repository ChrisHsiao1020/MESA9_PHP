<?php
    include_once 'phpTest81.php';

    $x = $_REQUEST['x'];
    $y = $_REQUEST['y'];

    $result = calXY($x, $y);

//    header("Location: phpTest82.php?result={$result}");

    $view = file_get_contents('phpTest82.html');
    $view = str_replace('###', $result, $view);
    echo $view;