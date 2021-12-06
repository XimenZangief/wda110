<?php include_once "./api/db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>問卷系統</title>
</head>

<body>
    <!-- 直接用mb-0把jumbotron的mb-2給無情覆寫 -->
    <div class="jumbotron p-0 mb-0" style="overflow:hidden;height:250px">
        <a href="index.php">
            <div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-ride="carousel">
                <div class="carousel-inner position-absolute" style="top:-250px">
                    <div class="carousel-item active">
                        <img class="d-block w-100 bg-primary" src="" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 bg-secondary" src="" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 bg-info" src="" alt="Third slide">
                    </div>
                </div>
            </div>
        </a>
    </div>
    <?php
    if(isset($_SESSION['err'])){
        echo "帳號密碼錯誤";
    }
    if(isset($_SESSION['user'])){
        echo "<span>welcome - {$_SESSION['user']} -</span>";
    ?>
        <a href="logout.php"><button>登出</button></a>
    <?php
    }else{
    ?>
    <nav>
        <a href="?do=login">會員登入</a>
        <a href="?do=reg">註冊新會員</a>
    </nav>
    <?php } ?>
    <div class="container">
        <?php

        $do = (isset($_GET['do'])) ? $_GET['do'] : 'show_vote_list';
        $file = "./frontend/" . $do . ".php";
        if (file_exists($file)) {
            include $file;
        } else {
            include "./frontend/show_vote_list.php";
        }
        ?>
        <div class="bg-primary fixed-bottom">my iron body is invincible, so be ware</div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
        </script>
</body>

</html>