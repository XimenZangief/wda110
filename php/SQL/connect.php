<?php
$dsn = "mysql:host=localhost;
        charset=UTF8;
        dbname=wda110;";
$dbuser = 'root';
$pdo = new PDO($dsn, 'root', '');

$range=(isset($_GET['id']))?$_GET['id']:20;
//if 網址沒輸入id_value則給予20;

$sql = "select * from `accounting` limit < $range;";
$rows = $pdo->query($sql)->fetchAll();



// echo '<pre>';
// var_dump($rows); //自動判斷變數型態並印出
// echo '</pre>';
?>

<table>
    <tr>
        <td>id</td>
        <td>項目</td>
        <td>價錢</td>
    </tr>
<?php
    foreach ($rows as $row) {
        echo "<tr>";
        echo "<td>".$row['id'] . "</td>";
        echo "<td>".$row['item'] . "</td>";
        echo "<td>".$row['pay'] . "元</td>";
        echo "</tr>";
    }
?>
</table>