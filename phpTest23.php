<?php
    sayYa(); sayYa(); sayYa();
    sayHello('Chris');
    sayHelloV2('Chris');
    sayHelloV2();
    sayHelloV3(3, 'Chris');
    sayHelloV3(3);
    sayHelloV4();
    sayHelloV4(123);
    sayHelloV4('Chris');
    sayHelloV4(123, 'Chris', true);

    function sayYa(){
        echo 'Ya<br>';
    }

    function sayHello($name){
        echo "Hello, {$name}<br>";
    }

    function sayHelloV2($name = 'World'){
        echo "Hello, {$name}<br>";
    }

    function sayHelloV3($value, $name = 'World'){
        for ($i = 0; $i < $value; $i++) {
            echo "Hello, {$name}<br>";
        }
    }

    function sayHelloV4(){
        $ps = func_get_args();      //捕抓所有傳遞進來的參數 => array
        foreach ($ps as $k => $v){
            echo "{$k} : {$v}<br>";
        }
    }