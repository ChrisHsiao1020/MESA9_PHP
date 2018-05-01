<?php
    $poker = range(0,51);
    shuffle($poker);
    foreach ($poker as $k => $v){
        echo "{$k} : {$v}<br>";
    }

    echo '<hr>';

    //發牌給四個玩家
    $players = array(array(),array(),array(),array());

    foreach ($poker as $i => $p){
        //$players[$i%4][(int)($i/4)] = $p;
        $players[$i%4][] = $p;
    }

    foreach ($players[1] as $v){
        echo "{$v}<br>";
    }
?>

<table border="1" width="100%">
    <?php
    $suits = array('&spades;','&hearts;','&diams;','&clubs;');
    $v = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
    foreach ($players as $player){
        sort($player);
        echo '<tr>';
        foreach ($player as $p){
            echo "<td>{$suits[(int)($p/13)]}{$v[$p%13]}</td>";
        }
        echo '</tr>';
    }
    ?>
</table>

