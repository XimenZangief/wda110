<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    $n=[];
    // $i=0;
    // while($i<6){
    //     $t=rand(1,38);
    //     if(!in_array($t,$n)){
    //         $n[$i]=$t;
    //         $i++;
    //     }
    // }
    $i=0;
    while(count($n)<6){
        $t=rand(1,38);
        if(!in_array($t,$n))
            $n[]=$t;
        $i++;
    }
    echo "<pre>";
    print_r($n);
    echo "</pre>";  
    echo $i."<hr>";
    foreach($n as $ns){
        echo $ns.",";
    }
    ?>
</body>
</html>