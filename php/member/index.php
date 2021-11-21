<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBJ member</title>
    <link rel="stylesheet" href="./style.css">
    <?php
    if (isset($_GET['err'])) {
        echo "PLZ RESTART";
    }
    if(isset($_SESSION['user'])){
    ?>
        <a href="./dashboard.php"><button>會員中心</button></a>
    <?php
    }else{?>
        <a href="reg.php"><button>註冊新會員</button></a>
        <a href="login.php"><button>點我登入</button></a>
    <?php } ?>
    </head>

<body>
    <?php include "./include/header.php"; ?>
    <?php include "./include/nav.php"; ?>
    <?php include "./include/side_bar.php"; ?>
    <?php include "./include/footer.php"; ?>
</body>

</html>