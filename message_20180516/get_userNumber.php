<?php
    include_once 'sql.php';
    include_once 'data_message.php';

    $sql = 'select * from message';
    $result = $mysqli->query($sql);
    $num = $result->num_rows;
    echo '#number#';
    echo $num;