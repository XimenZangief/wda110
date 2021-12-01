<?php

$acc=$_POST['acc'];
$pwd=$_POST['pwd'];
$mail=$_POST['mail'];
$name=$_POST['name'];
$address=$_POST['address'];
$birth=$_POST['birth'];
$mobile=$_POST['mobile'];

$sql_account="insert into `account`(`acc`, `pwd`, `mail`,`name`)values('$acc','$pwd','$mail','$name')";
$sql_detail="insert into `detail`( `name`, `address`, `mobile`, `birth`)values('$name', '$address','$mobile', '$birth')";

$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo= new pdo($dsn,'root','');

// echo $sql_account;
// echo '<hr>';
// echo $sql_detail;

$pdo->exec($sql_account);
$pdo->exec($sql_detail);

echo "註冊成功，1秒後回到首頁";

header("Refresh:1; url=../index.php");
?>