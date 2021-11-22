<?php

//透過foreach方式印出陣列資料
$rows=all('account');
echo '<table>';
foreach($rows as $row){
    echo '<tr><td>'.$row['acc'].'-'.$row['pwd'].'<br></td></tr>';
}
echo '</table>';
function all($table)
{
    $dsn = "mysql:host=localhost;charset=utf8;dbname=member";
    $pdo = new PDO($dsn, 'root', '');
    $sql = "SELECT * from `$table`";
    $result = $pdo->query($sql)->fetchAll();
    return $result;
    //return $pdo->query($sql)->fetchAll();
}

// echo '<pre>';
// var_dump(all('account'));
// echo '</pre>';

?>