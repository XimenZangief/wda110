<?php
if(isset($_SESSION['user'])){
?>
    <a href="../index.php">回首頁</a>
    <a href="../dashboard.php">會員中心</a>
    <a href="../edit.php">會員編輯</a>
    <a href="../forgot.php">修改密碼</a>
<?php
}
else{?>
<nav>
    <a href="../index.php">回首頁</a>
    <a href="../dashboard.php">會員中心</a>
    <a href="../reg.php">會員註冊</a>
    <a href="../forgot.php">忘記密碼</a>
</nav>
<?php } ?>