歡迎 <?= $_SESSION['user']; ?> 會員 <br>
<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=member";
$pdo = new PDO($dsn, 'root', '');
$sql = "SELECT * from `account`,`detail` where `account`.`id`=`detail`.`id` && `account`.`acc`='{$_SESSION['user']}'";
$user = $pdo->query($sql)->fetch();
?>
    個人資料:
    <li>帳號<?= $user['acc']; ?></li>
    <li>地址<?= $user['address']; ?></li>
    <li>手機<?= $user['mobile']; ?></li>
    <li>信箱<?= $user['mail']; ?></li>
    <li>生日<?= $user['birth']; ?></li>