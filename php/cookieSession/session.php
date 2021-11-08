<?php
session_start();
$_SESSION['name']='root';
echo $_SESSION['name'];

$_SESSION['stu']=[' alice','bob','cindy '];

?>