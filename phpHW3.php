// Homework
// 質數 1 ~ 100 ，表格，是的話背景黃色
<br>
<hr>

<?php
    $primeNumber = array();
    $j = 1;
    for ($i=0; $i<100; $i++) {
        $primeNumber[$i] = $j;
        $j++;
    }
    $result = 0;
    $isRepeat = '';
    $repeatCount = 0;

    for ($j=0; $j<10; $j++) {
        for ($i = 2; $i < 10; $i++) {
            if (($primeNumber[$j] % $i) == 0) {
                if ($repeatCount < 1) {
                    $repeatCount++;
                    echo "{$primeNumber[$j]} is a Prime Number<br>";
                }
            }
        }
    }

//echo "{$primeNumber[$i]} is not a Prime Number<br>";
