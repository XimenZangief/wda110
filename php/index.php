<?php
$row=5;
if($row%2 == 0){
    $row=$row+1;
}
for($i=1;$i<=$row;$i++){
    $mid=($row+1)/2;
    if($i<=$mid){
        $stars=2*$i-1;
        $space=$mid-$i;
    }else{
        $stars=2*($row-$i)+1;
        $space=($mid-1)-($row-$i);
    }
    for($k=1;$k<=$space;$k++)
        echo "&ensp;";

    for($j=1;$j<=$stars;$j++)
        echo "*";
    echo "<br>";
}
    
?>