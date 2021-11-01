<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>GET</h1>
    <form action='./recive.php' method='GET'>
        <input type='text' name='book' value='GET'>
        <input type='submit' value='送出'>
    </form>
    <h1>POST</h1>
    <form action='./recive.php' method='POST'>
        <input type='text' name='book' value='POST'>
        <input type='submit' value='送出'>
    </form>
    <h1>filePOST</h1>
    <form action='./recive.php' method='POST' enctype='multipart/form-data'>
        <input type='file' name='book' value='fileGET'>
        <input type='submit' value='送出'>
    </form>
</body>

</html>