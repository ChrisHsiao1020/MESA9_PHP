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


// 小專題目

// 1.即時聊天室
// 1.1 AJAX
// 1.2 WebSocket
// 1.3 會員 + 大頭貼 (對話筐顯示大頭貼) (傳檔)

// 2.社區管理系統 (資料庫)
// 2.1 公告
// 2.2 郵件收發

// 3.Open Data