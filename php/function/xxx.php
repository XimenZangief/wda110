<?php
//不定時參數
function add($name,...$a){
    echo $name;
    echo '<pre>';
    print_r($a);
    echo '</pre>';
}

function add_2(...$arg){
    $sum=0;
    foreach($arg as $num){
        if(is_numeric($num)){
        $sum +=$num;
        }
    }
}

add(1,3,6,7,8,9,6,3,5,4,5);
add('alice','bob','cindy');
add(['a','b','c']);
add('ZANGIEF');
?>