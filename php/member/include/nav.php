<?php
if(isset($_SESSION['user'])){
?>
<nav class="nav">
    <a href="../index.php">回首頁</a>
    <a href="../content.php?action=dashboard">會員中心</a>
    <a href="../content.php?action=edit">會員編輯</a>
    <a href="../forgot.php">修改密碼</a>
    <a href="../API/del_alert.php">刪除帳號</a>
</nav>
<?php
}
else{?>
<nav class="nav">
    <a href="../index.php">回首頁</a>
    <a href="../dashboard.php">會員中心</a>
    <a href="../reg.php">會員註冊</a>
    <a href="../forgot.php">忘記密碼</a>
</nav>
<?php } ?>