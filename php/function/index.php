<?php
function add($a, $b)
{
    echo $a + $b;
    return $a + $b; //若return發生，則傳值後跳出function，不執行後續
}

echo add(3, 5) + 10; //echo 8, return 8+10
echo '<br>';
$result = add(3, 5); //指定數值給result，只吃到return 8
echo $result + 10; //echo 8,return 8+10
echo '<br>';
echo $result . '+10'; //return 8，接字串「+10」
?>
<!-- e -->
<form action="index.php" method="post"> 
    <input type="text" name="name" id="">
    <input type="submit" value="GOOOO">
</form>
<?php
function hello($str)
{
    if(!empty($_POST['name'])){
        echo 'hello，'.$str;
    }
}
hello($_POST['name']);
?>
