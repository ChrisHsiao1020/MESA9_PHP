// Homework
// 質數 1 ~ 100 ，表格，是的話背景黃色
<br>
<hr>

<table border="1" width="100%">
<?php
    $jTemp = 1;
    for($k=1; $k<=2; $k++) {
        echo '<tr>';
        for ($j = $jTemp; $j <= 50*$k; $j++) {
            for ($i = 2; $i <= $j; $i++) {
                if ($j % $i == 0)
                    break;
            }
            if ($i == $j) {
                //echo "{$i} is a Prime Number<br>";
                echo '<td bgcolor="yellow">' . $i;
            } else {
                echo '<td>';
                echo $j;
            }
            echo '</td>';
        }
        $jTemp = $j;
        echo '</tr>';
    }
?>
</table>