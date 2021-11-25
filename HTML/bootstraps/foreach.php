<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .box {
            width: 200px;
            height: 200px;
        }
    </style>
    <?php function dd($var){
        print_r($var);
    } ?>
</head>

<body>
   <div class="container-fluid">
        <?php $errArr = [
            // ['key1'=>'value1', 'key2'=>'value2', 'key3'=>'value3'],
            0=>['id' => '1', 'message' => 'primary ID', 'type' => 'primary'],
            1=>['id' => '2', 'message' => 'info ID', 'type' => 'info'],
            2=>['id' => '3', 'message' => 'success ID', 'type' => 'success'],
            3=>['id' => '4', 'message' => 'warning ID', 'type' => 'warning'],
            4=>['id' => '5', 'message' => 'danger ID', 'type' => 'danger']
        ]; ?>

        <?php foreach ($errArr as $id => $data) : ?>        
        <div class="alert alert-<?= dd($data['type']); ?>  alert-dismissible mt-3">
            <button type="button" class="close" aria-label="close" data-dismiss="alert">x</button>
            <h3><?= dd($data['type']); ?></h3>
            <?= dd($data['message']);  ?>
        </div>
        <?php endforeach; ?>
    </div>
</body>

</html>