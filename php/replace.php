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
        $str='aaa123';
        echo str_repeat(str_replace($str, '*', $str),strlen($str));
        echo '<hr>';
        echo str_repeat('*', strlen($str)); //ezMode
        echo '<hr>';

        echo str_replace('a','*',$str);
    ?>
</body>
</html>