<h2>請使用迴圈列出3,5,7,11,13,17...97的數列</h2>
<?php
for($i=3;$i<100;$i++){
    $test= false;
    for($j=2;$j<$i;$j++){
        if( $i%$j==0 )
            $test= true;
    }
    if($test ==false)
        echo $i.",";
}
?>
