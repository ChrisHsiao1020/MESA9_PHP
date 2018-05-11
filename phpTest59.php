<?php
    $mysqli = new mysqli('127.0.0.1', 'root', 'root', 'iii');
    mysqli_set_charset ( $mysqli , "utf8" );
    //$mysqli->set_charset("utf8");

    // 增
    $sql1 = 'insert into cust (cname,tel,birthday) values ("test1","123","2000-02-09")';
    // 刪
    $sql2 = 'delete from cust where id = 106';
    // 修
    $sql3 = 'update cust set cname="Chris", tel="123" where id = 108';
    // 查
    $sql4 = 'select * from cust';

    //$mysqli->query($sql3);

    if ($result = $mysqli->query($sql4)){
        // result -> mysqli_result class 物件實體
        //echo 'OK';
        while ($data = $result->fetch_assoc()) {

                foreach ($data as $k => $v) {
                    echo "{$k} : {$v}<br>";
                }
                echo '<hr>';
        }
    }else{
        echo 'XX';
    }

    echo 'OK';
