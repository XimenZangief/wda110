<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php session_start(); ?>
    <style>
        body {
            box-sizing: border-box;
            width: 1024px;
            height: 768px;
            display: flex;
            flex-wrap: wrap;
        }

        .leftSide {
            flex-basis: 40%;
            background-color: skyblue;
        }

        .rightSide {
            flex-basis: 60%;
            display: flex;
        }

        .section {
            background-color: lightgrey;
            width: 600px;
            height: 400px;
            border: lightgrey solid 1px;
            box-shadow: 2px 2px;
            align-self: center;
            text-align: center;
        }
    </style>
</head>

<body>
    
    <div class="leftSide">
    </div>
    <div class="rightSide">
        <section class="section">
            <form action="./check_login.php" id="login" method="POST">
                <?php
                $users=[
                    ['account'=>'root','pwd'=>'0000'],
                    ['account'=>'bob','pwd'=>'0605'],
                    ['account'=>'alice','pwd'=>'1228'],
                    ['account'=>'cindy','pwd'=>'0314'],
                ];
                if(!empty($_POST)){
                    $account= $_POST['account'];
                    $pwd= $_POST['pwd'];
                    $test=false;
                    foreach($users as $user){        
                        if($account==$user['account'] && $pwd==$user['pwd'])
                            $test=true;        
                    }
                    if($test || $_GET['status']==true){
                        echo 'correct <br>';
                        setcookie("account", $account ,time()+999999);
                        setcookie("pwd", $pwd ,time()+999999);
                    }
                    else
                        echo 'error <br>';
                }
                ?>
                <p>LoginPage</p>
                <p>
                    <label for="account">ACCOUNT</label>
                    <input type="text" name="account" id="account">
                </p>
                <p>
                    <label for="pwd">PASSWORD</label>
                    <input type="password" name="pwd" id="pwd">
                </p>
                <input type="submit" value="LOGIN" id="sub">
                <input type="reset" value="cancel">
            </form>
        </section>
    </div>
</body>

</html>