<?php
if(!empty($_POST)){
$account= $_POST['account'];
$pwd= $_POST['pwd'];

if($account=='root' && $pwd=='0000')
    echo 'correct <br>';
else
    echo 'error <br>';
}
else{
    echo 'not normal login';
}
?>