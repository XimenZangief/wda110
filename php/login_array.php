<?php
// if(!empty($_POST)){
// $account= $_POST['account'];
// $pwd= $_POST['pwd'];

// if($account=='root' && $pwd=='0000')
//     echo 'correct <br>';
// else
//     echo 'error <br>';
// }
// else{
//     echo 'not normal login';
// }

$users=[
    ['account'=>'root','pwd'=>'0000'],
    ['account'=>'bob','pwd'=>'0605'],
    ['account'=>'alice','pwd'=>'1228'],
    ['account'=>'cindy','pwd'=>'0314'],
];
if(!empty($_POST)){
    $account= $_POST['account'];
    $pwd= $_POST['pwd'];
    $count=0;
    foreach($users as $user){        
        if($account==$user['account'] && $pwd==$user['pwd'])
            $count++;        
    }
    if($count>0)
        echo 'correct <br>';
    else
        echo 'error <br>';
}else
    echo 'not normal login';

?>