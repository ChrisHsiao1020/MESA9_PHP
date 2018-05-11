<?php
    include_once 'sql.php';

//    $sql = "insert into product (pname,price,qty) calues ('test1', 123, 12)";
//    $mysqli->query($sql);

    $sql = "insert into product (pname,price,qty) calues (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $var1 = 'test2';
    $var2 = 123;
    $var3 = 12;
    // s:string; i:integer; d:double; b:blob
    $stmt->bind_param("sii", $var1,$var2, $var3);
    $stmt->execute();