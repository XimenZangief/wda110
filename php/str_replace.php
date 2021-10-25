<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string_replace</title>
</head>
<body>
    <?php
        $str='aaa132323121y';
        echo "str_repeat(str_replace($str, '*', $str),strlen($str))".'<br>';
        echo str_repeat(str_replace($str, '*', $str),strlen($str));
        echo '<hr>';
        echo "str_repeat('*', strlen($str))".'<br>';
        echo str_repeat('*', strlen($str)); //ezMode
        echo '<hr>';

        echo "str_replace('a','*',$str)".'<br>';
        echo str_replace('a','*',$str);
        echo '<hr>';

        $array=[];
        for($i=0; $i<strlen($str); $i++){
            $s=substr($str, $i,1);
            if(!in_array($s,$array)){
                $array[]=$s;
            }
        }
        ?>
        echo str_replace($array, '*', $str)<br>
        <?php
        echo str_replace($array, '*', $str);
        ?>

</body>
</html>