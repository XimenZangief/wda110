
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <?php include "./include/head.php";?>
</head>
<body>
    <?php include "./include/header.php";?>
    <?php include "./include/nav.php";?>
    <?php include "./include/site_bar.php";?>
    <div class="content">
        <form action="./api/check.php" method="post" id="loginForm">
            <table>
                <tr>
                    <td colspan="2">LOGIN</td>
                </tr>
                <tr>
                    <td>帳號</td>
                    <td><input type="text" name="acc" id=""></td>
                </tr>
                <tr>
                    <td>密碼</td>
                    <td><input type="password" name="pwd" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <input type="submit" value="OK">
                    <input type="reset" value="RESET">
                </tr>
            </table>
        </form>
    </div>
    <?php include "./include/footer.php";?>
</body>
</html>