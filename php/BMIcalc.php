<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $bmi = round($_GET['weight'] / (($_GET['height'] / 100) *($_GET['height'] / 100)),2);

    echo 'BMI:' . $bmi . '<br>';
    if ($bmi < 18.5)
        echo '過輕';
    else if ($bmi >= 18.5 && $bmi < 24)
        echo '正常';
    else if ($bmi >= 24 && $bmi < 27)
        echo '過重';
    else if ($bmi >= 27 && $bmi < 30)
        echo '輕肥胖';
    else if ($bmi >= 30 && $bmi < 35)
        echo '中肥胖';
    else if ($bmi >= 35)
        echo '重肥胖';
    ?>
    <p><a href="./BMI.php?bmi=<?=$bmi?>">BACK</a></p>
</body>

</html>