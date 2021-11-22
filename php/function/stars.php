<?php
//三角形星星函式
function stars($row)
{
    for ($i = 1; $i <= $row; $i++) {
        for ($j = 1; $j <= $row; $j++) {
            if ($i == 1 || $i == $row) {
                echo "*";
            }
            // else if($j==1 || $j==$row || $j==$i || $j==$row+1-$i)
            // 印出對角線
            else if ($j == 1 || $j == $row) {
                echo "*";
            } else {
                echo "&ensp;";
            }
        }
        echo "<br>";
    }
}
?>
<form action="stars.php" method="post">
    <input type="number" name="num">
    <input type="submit" value="GOOOO">
</form>
<?php
if (!empty($_POST['num'])) {
    stars($_POST['num']);
}
?>