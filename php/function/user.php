<?php

$dsn="mysql:host=localhost;charset:utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

$sql="SELECT * from `account` where `id`='1'";
$user=$pdo->query($sql)->fetch();

echo '<pre>';
print_r($user);
echo '</pre>';

?>