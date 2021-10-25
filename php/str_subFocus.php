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
        $s='The reason why a great man is great is that he resolves to be a great man';
        echo substr($s, 0, 10) . str_repeat('.',3);
        echo '<br>';

        $a='學會PHP網頁程式設計，薪水會加倍，工作會好找';       
        echo str_replace('程式設計', "<b>" . mb_substr($a, 7, 4) . "</b>" , $a);
        echo '<hr>';
        echo str_replace('程式設計', "<b>" . mb_substr($a, mb_strpos($a, '程式設計'), 4) . "</b>" , $a);
        echo '<hr>';
        echo str_replace('程式設計', "<b>" . mb_strpos($a, '程式設計') . "</b>" , $a);
        echo '<hr>';
        echo str_replace('程式設計', "<span style='font-size:30px; color:red;'>" . '程式設計' . "</span>" , $a);
        echo '<hr>';

        
$str='學會PHP網頁程式設計，薪水會加倍，工作會好找';
$sub='程式設計';

$split=explode($sub,$str);
//print_r($split);
echo $split[0] . "<span style='font-size:30px;color:red'>" . $sub . '</span>' . $split[1];
echo '<hr>';

$style="<span style='font-size:30px; color:red;'>". $sub . '</span>';
echo str_replace($sub, $style, $str);
    ?>
    
</body>
</html>