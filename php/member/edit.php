<?php
session_start();

if(isset($_SESSION['user'])){
    header("location:index.php");
    exit(); //強制跳脫
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯會員</title>
    <?php include "./include/head.php"; ?>
</head>

<body>
    <?php include "./include/header.php"; ?>
    <?php include "./include/nav.php"; ?>
    <?php include "./include/site_bar.php"; ?>
    <div class="content">
    <?php include "./frontEnd/edit.php"?>
    </div>
    <?php include "./include/footer.php"; ?>
</body>

</html>