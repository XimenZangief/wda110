<?php
session_start();
echo 'account is ' . $_COOKIE['name'];

echo '<hr>';
?>
<a href="javascript:history.back()">回上一頁</a>