<?php
    include_once 'sql.php';
    include_once 'Product.php';
    include_once 'myconfig.php';

    if (isset($_REQUEST['delid'])){
        // delete data
        $delid = $_REQUEST['delid'];
        $sql = "delete from product where id = {$delid}";
        $mysqli->query($sql);
    }

    //$sql = 'select * from product';
    //$sql = 'select * from product order by qty asc';      // 預設asc，正向排序;desc，反向排序
    //$sql = 'select * from product order by qty asc, pname desc';    //先用qty進行排序，相同時再用第二順位pname排序
    //$sql = 'select * from product order by id limit 4';     //排序完取出四個
    //$sql = "select * from product order by id limit 1,4";       //從1開始取出資料

    // 總筆數，方法一
//    $sql = 'select count(*) as `sum` from product';
//    $result = $mysqli->query($sql);
//    $data = $result->fetch_assoc();
//    $sum = $data['sum'];
//    echo $sum . '<br>';
    // 總筆數，方法二
    $sql = 'select id from product';
    $result = $mysqli->query($sql);
    $sum = $result->num_rows;
    //echo $sum . '<br>';

    $page = 1;
    if (isset($_REQUEST['page'])){
        $page = $_REQUEST['page'];
    }

    $totalPage = ceil($sum / RPP);
    $prev = $page==1?1:$page-1;
    $next = $page==$totalPage?$page:$page+1;
    $start = ($page-1)*RPP;
    $sql = "select * from product order by id limit {$start}," . RPP;
    $result = $mysqli->query($sql);

?>

<a href="addProduct.php">Add New</a>
<hr />
Product List:<br>
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>pname</th>
        <th>price</th>
        <th>qty</th>
        <th>delete</th>
        <th>edit</th>
    </tr>
    <script>
        function confirmDelete() {
            return confirm('Delete' + pname + '?');
        }
    </script>
    <?php
    while ( $product = $result->fetch_object('Product')){
        echo '<tr>';
        echo "<td>{$product->id}</td>";
        echo "<td>{$product->pname}</td>";
        echo "<td>{$product->price}</td>";
        echo "<td>{$product->qty}</td>";
        echo "<td><a href='?delid={$product->id}' onclick='return confirmDelete(\"{
            $product->pname})\";'>Delete</a></td>";
//        echo "<td><a href='mytest1.php'
//            onclick='return confirmDelete(\"{$product->pname})\";'>Delete</a></td>";
        echo "<td><a href='editProduct.php?editid={$product->id}'>Edit</a></td>";
        echo '</tr>';
    }
    ?>
</table>
<hr>
<a href="?page=<?php echo $prev; ?>">Prev</a>
<?php echo $page; ?>
<a href="?page=<?php echo $next; ?>">Next</a>