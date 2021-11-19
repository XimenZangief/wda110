<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($sql,'root','');

$id=$_POST['id'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];
$birth=$_POST['birth'];

$sql_acc="UPDATE `account` set `mail`=''where `id`='$id'";
$sql_detail="UPDATE `detail` set `address`='$address',`mobile`='$mobile',`birth`='$birth' where `id`='$id'";

$pdo->exec($sql_acc);
$pdo->exec($sql_detail);

header("location:../dashboard.php?user={$_GET['user']}");
                                 
?>