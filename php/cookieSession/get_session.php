<?php
session_start();
echo 'account is ' . $_SESSION['name'];

echo '<hr>';
echo 'stu is';

echo '<pre>';
print_r($_SESSION['stu']);
echo '</pre>';


?>