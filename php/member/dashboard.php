<?php
session_start();

if(!(isset($_SESSION['user']))){
    header("location:index.php");
    exit(); //強制跳脫
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>

<body>
    <?php include "./include/header.php"; ?>
    <?php include "./include/nav.php"; ?>
    <?php include "./include/side_bar.php"; ?>
    <div class="content">
        歡迎 <?=$_SESSION['user'];?> 會員 <br>
        <?php
        $dsn="mysql:host=localhost;charset=utf8;dbname=member";
        $pdo=new PDO($dsn,'root','');
        $sql="SELECT * from `account`,`detail` where `account`.`id`=`detail`.`id` && `account`.`acc`='{$_SESSION['user']}'";
        ?>
        個人資料:
        <li>帳號<?=$user['acc'];?></li>
        <li>地址<?=$user['address'];?></li>
        <li>手機<?=$user['mobile'];?></li>
        <li>信箱<?=$user['mail'];?></li>
        <li>生日<?=$user['birth'];?></li>

    </div>
    <?php include "./include/footer.php"; ?>
</body>

</html>