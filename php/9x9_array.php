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
    $nine=[];
    for ($j = 1; $j <= 9; $j++) {
        for ($i = 1; $i <= 9; $i++) {
            $nine[]= " $j x $i =" . ($j * $i) ;
        }
    }
    // echo "<pre>";
    // print_r($nine);
    // echo "</pre>";
    echo "<table>";
    for($i=0;$i<count($nine);$i++){
        echo "<tr>"."<td>". $nine[$i];
        if(($i+1) % 9 == 0)
        echo "</td>"."</tr>";
    }echo "</table>";
    ?>
    
</body>

</html>