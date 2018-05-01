<?php
//    foreach ($_GET as $key => $value){
//    foreach ($_POST as $key => $value){         //POST不會顯示在url裡，具有資料隱藏性
    foreach ($_REQUEST as $key => $value){        //REQUEST可接收GET及POST，但安全性沒有POST高
            if (gettype($value) == 'array'){
            foreach ($value as $k => $v){
                echo "{$k} : {$v}<br>";
            }
        }else {
            $value = nl2br($value);
            echo "{$key} : {$value}<br>";
        }
    }

    //$_GET     ------> method:get
    //$_POST    ------> method:post
    //$_REQUEST ------> method:get/post