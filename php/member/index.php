<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBJ member</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        nav {
            height: 60px;
            box-shadow: 0 2px 10px #000;
            display: block;
            width: 100%;
            padding: 10px 10px;
            text-align: right;
        }

        button {
            padding: 5px 10px;
            margin: 0px 5px;
            border-radius: 5px 5px;
            background-color: lightgrey;
        }

        .login-box {
            background-color: lightskyblue;
            width: 60vh;
            height: 60vh;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include "header.php"; ?>
    <?php include "nav.php"; ?>
    <?php include "site_bar.php"; ?>
    <div class="content">
        <label for="acc">帳號</label>
        <input type="text" name="acc" id="">
        <br>
        <label for="pwd">密碼</label>
        <input type="text" name="pwd" id="">

    </div>
    <?php include "footer.php"; ?>
    <nav>
        <a href="reg.php"><button>register</button></a>
        <a href="login.php"><button>login</button></a>
    </nav>
</body>

</html>