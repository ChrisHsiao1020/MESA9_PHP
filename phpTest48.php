<?php
    $img = ImageCreateFromJpeg("coffee.jpg");

    $blue = ImageColorAllocate($img, 0, 0, 255);
    imagefttext ( $img , 24 , 0 , 10 , 30 , $blue , "./brad.ttf" , "Hello, World" );

    header('Content-Type: image/jpeg');
    ImageJpeg($img);

    ImageDestroy($img);