<?php
    $year = '';
    $result = '';
    $remainder1 = 0;
    $remainder2 = 0;
    $remainder3 = 0;
    if (isset($_GET['year'])) {
        $year = $_GET['year'];
        $remainder1 = $year % 4;
        $remainder2 = $year % 400;
        $remainder3 = $year % 100;
        if ($remainder1 == 0) {
            if ($remainder2 == 0) {
                $result = 'YES';
            } else if ($remainder3 == 0) {
                $result = 'NO';
            } else {
                $result = 'YES';
            }
        } else {
            $result = 'NO';
        }
    }
?>

<form>
    <input type="text" name="year" value="" placeholder="請輸入年份(西元)" />判斷是否閏年？
    <input type="submit" value="Yes Or No">
    <?php
        echo '<br>' . $result;
    ?>
</form>