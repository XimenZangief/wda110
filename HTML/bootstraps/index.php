<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>STORY</title>
    <style>
        .box {
            background-color: skyblue;
            border: 1px solid black;
            height: 200px;
        }

        #myCarousel {
            width: 1200px;
            height: 800px;
            overflow: hidden;
            margin: auto;
        }

        .carousel-item>img {
            display: block;
            margin: auto;
            max-height: 800px;
            min-width: 800px;
            overflow: hidden;
        }
    </style>
    <?php
    $arr=[['id'=>'1','src'=>'','content'=>'','chinese'=>'','eng'=>''],
          ['id'=>'2','src'=>'','content'=>'','chinese'=>'','eng'=>''],
          ['id'=>'3','src'=>'','content'=>'','chinese'=>'','eng'=>''],
          ['id'=>'4','src'=>'','content'=>'','chinese'=>'','eng'=>''],
          ['id'=>'5','src'=>'','content'=>'','chinese'=>'','eng'=>''],
    ];?>
    <?= $data[0]['src']; ?>
</head>


<body class="bg-dark">
    <div class="container">
        <p class="h1 text-white  text-center">INFO</p>
        <div id="myCarousel" class="carousel slide center" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="https://c.tenor.com/-SrdahVefRgAAAAC/gawr-gura-hololive.gif" class="d-block" alt="">
                    <h3>123</h3>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="https://c.tenor.com/l6u0sCzYdiwAAAAC/gura-roomba-gawr-gura.gif" class="d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="https://c.tenor.com/0qexJNBcWJYAAAAd/gawr-gura-gura.gif" class="d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="https://c.tenor.com/Pzfj5Q5rRC0AAAAd/gawr-gura-hololive.gif" class="d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="https://c.tenor.com/q86AGnNX5UQAAAAC/gura-headpat-gawr-gura.gif" class="d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://c.tenor.com/eo7B_X-CxQ8AAAAi/gawr-gura-walfie.gif" alt="">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span><i class="fas fa-angle-left fa-4x"></i></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span><i class="fas fa-angle-right fa-4x"></i></span>
            </a>
        </div>
        <div class="row flex-column h-100">
            <div class="h-50 bg-cover" style="background: url('http')"></div>
            <div class="h-50 bg-cover" style="background: url('http')"></div>
        </div>
    </div>
</body>

</html>