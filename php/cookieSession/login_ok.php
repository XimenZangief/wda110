<?php
$acc='root';
$pwd='0000';
if($acc= $_POST['account'] && $pwd==$_POST['pwd']){
    $_SESSION['user']=$_POST['acc'];
    header('location:login_ok.php');
}
else{
    header('location:login.php?status=false');
    echo 'error <br>';
}
?>