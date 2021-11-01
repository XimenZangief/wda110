<?php
echo $_GET['book'];
echo "<span style='color:red'>" ;
echo $book;
echo "</span>";

echo $_POST['book'];
echo "<span style='color:red'>" ;
echo $book;
echo "</span>";

echo $_FILES['book']['name'];
$filepath = $_FILES['book']['tmp_name'];
echo $filepath;
move_uploaded_file($filepath, "./".$_FILES['book']['name']);
?>