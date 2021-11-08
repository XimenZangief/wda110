<?php
$users=[
    ['account'=>'root','pwd'=>'0000'],
    ['account'=>'bob','pwd'=>'0605'],
    ['account'=>'alice','pwd'=>'1228'],
    ['account'=>'cindy','pwd'=>'0314'],
];
if(!isset($_GET['status']) && $_GET['status']==false)
    echo "<span style='color:red'>ERROR</span>";
if(!empty($_POST)){
    $account= $_POST['account'];
    $pwd= $_POST['pwd'];
    $test=false;
    foreach($users as $user){        
        if($account==$user['account'] && $pwd==$user['pwd'])
            $test=true;        
    }
    if($test){
        echo 'correct <br>';
        $_SESSION['user']=$_POST['account'];
        setcookie('user', $account ,time()+999999);
        setcookie('pwd', $pwd ,time()+999999);
        // header('location:login.php?status=true');
    }
    else{
        // header('location:login.php?status=false');
        echo 'error <br>';
    }
}
?>