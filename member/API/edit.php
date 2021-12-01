<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:index.php");
    exit();
}
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

$id=$_POST['id'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];
$birth=$_POST['birth'];

$sql_acc="UPDATE `account` set `mail`=''where `id`='$id'";
$sql_detail="UPDATE `detail` set `address`='$address',`mobile`='$mobile',`birth`='$birth' where `id`='$id'";

$pdo->exec($sql_acc);
$pdo->exec($sql_detail);

echo '修改成功';
header("refresh:3;url=../content.php?action=dashboard");
?>