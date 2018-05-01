<?php
    $id = 'A123456789';
    if (preg_match('/^[A-Z][12][0-9]{8}$/', $id)){
        echo 'OK';
    }else{
        echo  'XX';
    }

    // 練習手機號碼、市話、日期、IP、Email