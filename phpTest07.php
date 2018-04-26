<?php
    $result = $x = $y = '';               //string
    $op = 1;
    if (isset($_GET['x'])) {       //isset() 弱型別語言，判斷是否存在
        $x = $_GET['x'];
        $y = $_GET['y'];
        $op = $_GET['op'];
        if($_GET['op'] == 1)
            $result = $x + $y;      //integer
        else if($_GET['op'] == 2)
            $result = $x - $y;      //integer
        else if($_GET['op'] == 3)
            $result = $x * $y;      //integer
        else if($_GET['op'] == 4)
            $result = $x / $y;      //integer

//        echo "{$x} + {$y} = {$result}";
}
?>

<form>
    <input type="text" name="x" value="<?php echo $x; ?>" />
    <select name="op">
        <option value="1" <?php if ($op == 1) {echo 'selected';} ?>>+</option>
        <option value="2" <?php if ($op == 2) {echo 'selected';} ?>>-</option>
        <option value="3" <?php if ($op == 3) {echo 'selected';} ?>>x</option>
        <option value="4" <?php if ($op == 4) {echo 'selected';} ?>>/</option>
    </select>
    <input type="text" name="y" value="<?php echo $y; ?>" />
    <input type="submit" value="=" />
    <?php
        echo $result;
    ?>
</form>


<!--<form action="phpTest08.php">-->
<!--    <input type="text" name="x" />-->
<!--    +-->
<!--    <input type="text" name="y" />-->
<!--    <input type="submit" value="=" />-->
<!--</form>-->