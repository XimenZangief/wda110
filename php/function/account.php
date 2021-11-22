<?php include_once "db.php"?>

<?php
    $acc=find('account',1);
    echo $acc['acc'] .'-'. $acc['pwd'];
?>