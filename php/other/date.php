<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>給定兩個日期，計算中間間隔天數</h1>
    <?php
    date_default_timezone_set('Asia/Taipei');//宣告時區
    echo date('Y-m-d'). '<br>';
    echo 'start time'. strtotime('2021-10-01');//時間轉換成字串(秒數)
    echo '<br>';
    echo 'end time'. strtotime('2021-11-03');
    echo '<br>';
    echo 'result:' . 
        (strtotime('2021-11-03')-strtotime('2021-10-01'))/3600/24 . 
        'days'; //計算後秒數除以(24*60*60)換算成日。
    $date1=date_create("2021-11-03");
    $date2=date_create("2021-10-01");
    $diff=date_diff($date1,$date2);
    echo $diff->format("%R%a days");
    ?>
    <hr>
    <h1>計算距離自己下一次生日還有幾天</h1>
    <?php
    date_default_timezone_set('Asia/Taipei');
    $today=strtotime('now');//當下時間秒數
    $nB=strtotime('2022-06-05');
    $gap=($nB-$today)/86400;
    echo floor($gap). 'days<br>';
    $year=floor(floor($gap)/365);
    $month=floor(floor(floor($gap)%365)/30);
    $day=floor(floor(floor($gap)%365)%30);
    echo '剩'.$year.'年'.$month.'月'.$day. '日<br>';
    echo 'result:' . 
        (strtotime('2022-06-05')-strtotime(date('Y-m-d')))/3600/24 . 
        'days'; //計算後秒數除以(24*60*60)換算成日。
    ?>
    <hr>
    <h1>利用date()函式的格式化參數，完成以下的日期格式呈現<br></h1>
        <ul>
            <li>2021/10/05</li>
            <li>10月5日 Tuesday</li>
            <li>2021-10-5 12:9:5</li>
            <li>2021-10-5 12:09:05</li>
            <li>今天是西元2021年10月5日 上班日(或假日)</li>
        </ul>
    <?php
        date_default_timezone_set('Asia/Taipei');
        echo date('Y/m/d').'<br>';
        echo date('m月j日l').'<br>';
        echo date('Y-m-d H:i:s').'<br>';
        echo date('Y-n-j H:i:s').'<br>';
        $date=date('今天是西元Y年m月j日');
        if(date('N')>=6){
            echo $date . '假日';}
        else{
            echo $date . '上班日';}
    ?>
    <hr>
    <h1>利用迴圈來計算連續五個周一的日期</h1>
    <ul>
        <li>2021-10-04 星期一</li>
        <li>2021-10-11 星期一</li>
        <li>2021-10-18 星期一</li>
        <li>2021-10-25 星期一</li>
        <li>2021-11-01 星期一</li>
    </ul>
    <?php
    date_default_timezone_set('Asia/Taipei');
    $now= strtotime('now').'<br>';
    echo $now;
    echo date('Y-m-d H:i:s').'<br>';
    $tomorrow= strtotime('+1 days');
    echo date('明天Y-m-d H:i:s',$tomorrow).'<br>';
    $nextM=strtotime('+1 month');
    echo date('下個月Y-m-d H:i:s',$nextM).'<br>';

    $weekStr=['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六', ];
    $base='2021-10-04';
    $basetime= strtotime($base);

    // echo date('Y-m-d', $basetime). ' ' . $weekStr[date('w',$basetime)];
    for($i=0;$i<5;$i++){
        $secs=strtotime('+' . (7*$i) . 'days',$basetime);
        echo date('Y-m-d',$secs).' '. $weekStr[date('w',$secs)]. '<br>';
    }
    ?>
</body>
</html>