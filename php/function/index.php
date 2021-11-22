<?php
function add($a, $b){
    echo $a+$b;
    return $a+$b;
}

echo add(3,5)+10; //echo 8, return 8+10
echo '<br>';
$result=add(3,5); //指定數值給result，只吃到return 8
echo $result+10; //echo 8,return 8+10
echo '<br>';
echo $result.'+10'; //return 8，接字串「+10」
?>