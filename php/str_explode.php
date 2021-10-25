<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>explode</title>
</head>
<body>
    <?php
    $str='this, is, a, book';
    $array=explode(',',$str);

    echo '<pre>';
    print_r($array);
    echo '</pre>';
    ?>
</body>
</html>