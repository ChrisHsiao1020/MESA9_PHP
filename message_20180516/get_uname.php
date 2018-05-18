<?php
    include_once 'sql.php';
    include_once 'data_message.php';

    $sql = 'select * from message';
    $result = $mysqli->query($sql);
    $num = $result->num_rows;
    for($i=0; $i<$num; $i++) {
        $message = $result->fetch_object('Message');
        $uname = $message->uname;
    }
    echo '#uname#';
    echo $uname;