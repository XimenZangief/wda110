<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "header.php"; ?>
    <?php 
        if(isset($_GET['do'])){
            include "nav_container.php"; 
    }?>
    <div class="body">
        THIS IS FILE02
    </div>
    <?php include "footer.php"; ?>
</body>

</html>