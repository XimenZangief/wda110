<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>BMI計算</h1>
    <form action='./BMIcalc.php' method='GET'>
        <p>身高：<input type='text' name='height' value=''></p>
        <p>體重：<input type='text' name='weight' value=''></p>
        <p><input type="submit" value="送出"></p>
    </form>
    <?php
    if(isset($_GET['bmi']))
        echo 'last BMI:'.$_GET['bmi'];
    ?>
</body>

</html>