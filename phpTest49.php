<?php
    $src = imagecreatefromjpeg("image_14.jpg");     //Create a new image from file or URL
    $dst = imagecreatetruecolor(100, 100);     //Create a new true color image
    $src_w = imagesx($src); $src_h = imagesy($src);         //Get image width & height
    if ($src_w < $src_h){
        // 長型
        $dst_h = 100;
        $dst_w = $src_w * 100 / $src_h;
        $dst_y = 0;
        $dst_x = 100 / 2 - $dst_w / 2;
    }else{
        // 寬型
        $dst_w = 100;
        $dst_h = $src_h * 100 / $src_w;
        $dst_x = 0;
        $dst_y = 100 / 2 - $dst_h / 2;
    }
    imagecopyresized ( $dst, $src,
        $dst_x , $dst_y ,
        0, 0,
        $dst_w , $dst_h ,
        $src_w , $src_h );                      //Copy and resize part of an image
    header("Content-type: image/jpeg");
    imagejpeg($dst);
    //imagejpeg($dst, "test3/new.jpg");         // 輸出檔案
    imagedestroy($src);
    imagedestroy($dst);