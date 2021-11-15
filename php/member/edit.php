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
        <form action="./API/edit.php" method="post">
            <table>
                <tr>
                    <td colspan='2'>編輯會員資料</td>
                    <td></td>
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
                    <td>MAIL</td>
                    <td><input type="text" name="mail" id=""></td>
                </tr>
                <tr>
                    <td>名字</td>
                    <td><input type="text" name="name" id=""></td>
                </tr>
                <tr>
                    <td>手機</td>
                    <td><input type="text" name="mobile" id=""></td>
                </tr>
                <tr>
                    <td>生日</td>
                    <td><input type="date" name="birth" id=""></td>
                </tr>
                <tr>
                    <td>地址</td>
                    <td><input type="text" name="address" id=""></td>
                </tr>
            </table>
            <input type="submit" value="OK">
            <input type="reset" value="RESET">
        </form>
    </div>
    <?php include "./include/footer.php"; ?>
</body>

</html>