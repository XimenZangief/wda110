<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <?php include "./include/head.php"; ?>
</head>

<body>
    <?php include "./include/header.php"; ?>
    <?php include "./include/nav.php"; ?>
    <?php include "./include/side_bar.php"; ?>
    <div class="content">
        <?php 
        $action = (isset($_GET['action']))?$_GET['action']:'login';
        include "./frontEnd/" .$action. ".php";
        ?>
    </div>
    <?php include "./include/footer.php"; ?>
</body>

</html>