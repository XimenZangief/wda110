<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>找出五百年內的閏年</title>
</head>
<body>
<?php

$leaps=[];
$year=2021;
for($i=$year;$i<=($year+500);$i++){
    if(($i%4 == 0) and ($i%100 != 0) or ($i%400 == 0)){
        $leaps[]=$i;
    }
}

// echo "<pre>";
// print_r($leaps);
// echo "</pre>";

if(in_array(2152,$leaps)){
    echo 2152 ."is leaps.";}
else{
    echo 2152 ."is not leaps.";}

?>
</body>
</html>