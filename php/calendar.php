<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            width: 500px;
margin: auto;
padding: 20px;
border: 1px solid black;
        }
        td{
            padding: 5px;
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>線上月曆</h1>
    <table>
        <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
    <?php
    $day1=date('Y-m-01');
    $month=date('m');
    $weekDay1=date('w',strtotime($day1));
    echo 'firstDay：'. $day1. '<br>';
    echo 'month：'. $month. '<br>';
    echo 'weekDay1：'. $weekDay1. '<br>';

    for($i=0;$i<6;$i++)
    {
        echo '<tr>';
        for($j=0;$j<7;$j++){
            if( ($i==0 && $j<$weekDay1) || ($i==$weekDay1 && $j>0) )
                echo '<td></td>';
            else
                echo '<td>'. ($i*7+$j+1-$weekDay1) .'</td>';
        }
    }
    ?>
</body>
</html>