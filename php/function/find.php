<?php
function find($table,$id)
{
    include "./include/pdo.php";
    $sql = "SELECT * FROM `$table` WHERE `id` = '$id'";
    $result = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $result;
    //return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}
echo '<pre>';
var_dump(find('account','2'));
echo '</pre>';
?>