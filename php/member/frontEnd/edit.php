<form action="./API/edit.php?user=<?= $_SESSION['user']; ?>" method="post">
    <?php
    $dsn = "mysql:host=localhost;charset=utf8;dbname=member";
    $pdo = new PDO($dsn, 'root', '');
    $sql = "select * from `account`,`detail`
                       where `account`.`id` = `detail`.`id` &&
                             `account`.`acc`= '{$_SESSION['user']}';";
    $user = $pdo->query($sql)->fetch();
    ?>
    <table>
        <tr>
            <td colspan='2'>編輯會員資料</td>
            <td></td>
        </tr>
        <tr>
            <td>ID:<?= $user['id']; ?></td>
            <td><input type="hidden" name="id" value="<?= $user['id']; ?>"></td>
        </tr>
        <tr>
            <td>帳號</td>
            <td><input type="readonly" name="acc" value="<?= $user['acc']; ?>"></td>
        </tr>
        <tr>
            <td>密碼</td>
            <td><input type="password" name="pwd" value="<?= $user['pwd']; ?>"></td>
        </tr>
        <tr>
            <td>MAIL</td>
            <td><input type="text" name="mail" value="<?= $user['mail']; ?>"></td>
        </tr>
        <tr>
            <td>名字</td>
            <td><input type="text" name="name" value="<?= $user['name']; ?>"></td>
        </tr>
        <tr>
            <td>手機</td>
            <td><input type="text" name="mobile" value="<?= $user['mobile']; ?>"></td>
        </tr>
        <tr>
            <td>生日</td>
            <td><input type="date" name="birth" value="<?= $user['birth']; ?>"></td>
        </tr>
        <tr>
            <td>地址</td>
            <td><input type="text" name="address" value="<?= $user['address']; ?>"></td>
        </tr>
    </table>
    <input type="submit" value="EDIT">
    <input type="reset" value="RESET">
</form>