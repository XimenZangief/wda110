<?php
    session_start();
    unset($_SESSION['user']);

    echo '登出';
    header("refresh:3;url=index.php");
?>