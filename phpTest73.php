<?php
    $cont = file_get_contents("http://gis.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.json");
//    $root = json_decode($cont);
//    $root = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $cont), true );
    var_dump($cont);
//    foreach ($cont as $k => $v){
//        echo "{$k}:{$v}<br>";
//    }


// HomeWork
// 政府的開放資料：觀光
// 尋訪 => 放入資料庫