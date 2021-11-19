<?php
session_start();
if(!(isset($_SESSION['user'])) && (isset($_SESSION['alert']))){
    header("location:index.php");
    exit();
}
//*重要，刪除資料須同時清除session*
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$user_id=$pdo->query("SELECT `id` from `account` where `account`='{$_SESSION['user']}'")->fetchColumn();

$sql_acc="DELETE from `account` where `id`='{$user_id}'";
$sql_detail="DELETE from `detail` where `id`='{$user_id}'";

$pdo->exec($sql_acc);
$pdo->exec($sql_detail);
unset($_SESSION['user']); //清掉session
header("location:index.php");
?>