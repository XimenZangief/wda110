<?php
// function pdo($db){
//     $dsn = "mysql:host=localhost;charset=utf8;dbname=$db";
//     return new PDO($dsn, 'root', '');
// }

$dsn = "mysql:host=localhost;charset=utf8;dbname=member";
$pdo = new PDO($dsn, 'root', '');
function find($table, $id)
{
    // include "./include/pdo.php";
    global $pdo; //指定$pdo為全域變數(預設為區域)
    $sql = "SELECT * FROM `$table` WHERE `id` = '$id'";
    $result = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $result;
    //return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

/*update function設計
1.指定資料表 $table
2.指定更新欄位 $col, 陣列
3.指定更新的條件
*/
$col=['mail'=>'666', 'pwd'=>'666'];
$where=['acc'=>'123'];

function update($table, $col, $where)
{
    global $pdo;
    $sql_set = '';
    foreach ($col as $key => $value) {
        $sql_set .= "`$key`= '$value',";
    }
    trim($sql_set, ',');

    $sql_where = '';
    foreach ($col as $key => $value) {
        $sql_where .= "`$key`= '$value' && ";
    }
    mb_substr($sql_where,0,mb_strlen($sql_where)-4);

    $sql = "UPDATE `$table` SET $sql_set where $sql_where";

    echo $sql;
    $pdo->exec($sql);
    //return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

function all($table)

{   global $pdo;
    include "./include/pdo.php";
    $sql = "SELECT * from `$table`";
    $result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    //return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
