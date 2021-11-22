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
    include "./include/pdo.php";
    $sql = "SELECT * from `$table`";
    $result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    //return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

// echo '<pre>';
// var_dump(all('account'));
// echo '</pre>';

?>