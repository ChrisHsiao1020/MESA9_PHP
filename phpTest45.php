<?php
    // 產生畫布
    $img = ImageCreateTrueColor(400, 40);

    // 開始作畫
    $yellow = ImageColorAllocate($img, 255, 255, 0);
    ImageFill($img, 0, 0, $yellow);

    // 輸出 (1.檔案 2.瀏覽器)
    header('Content-Type: image/jpeg');
    ImageJPEG($img);

    // 清除記憶體
    ImageDestroy();