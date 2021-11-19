<?php
// $acc=$_POST['acc'];
// $pwd=$_POST['pwd'];
session_start();
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo= new PDO($dsn,'root','');
// $sql="select * from `account` where `account`=$acc && `pwd`=$pwd";
$sql="SELECT count(*) from `account` where `acc`='{$_POST['acc']}' && `pwd`='{$_POST['pwd']}'";

$result=$pdo->query($sql);
echo '<pre>';
var_dump($result);
echo '</pre>';
$result=$pdo->query($sql)->fetchColumn();
echo '<pre>';
var_dump($result);
echo '</pre>';

if($result>0){
    $_SEESION['user']=$_POST['acc'];
    header('location:../dashboard.php');
}
else{
    header('location:../index.php?err=1');
}

?>