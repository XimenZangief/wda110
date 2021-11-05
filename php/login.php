<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            align-self: center;
            text-align: center;
        }
        .screen{
            
        }
    </style>
</head>

<body>
    <div class="leftSide">
    </div>
    <div class="rightSide">
        <section class="section">
            <form action="./login_1.php" class="screen" method="POST">
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