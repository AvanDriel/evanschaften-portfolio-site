<!DOCTYPE html>
<html lang="en">
<head>
    <title>Erik van Schaften - Objects</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../Content/Css/style.css"/>
    <!bootstrap CSS >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!theme>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!Favicon>
        <link rel="apple-touch-icon" sizes="57x57" href="../../Content/Img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../../Content/Img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../../Content/Img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../../Content/Img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../../Content/Img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../../Content/Img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../../Content/Img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../../Content/Img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../../Content/Img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../../Content/Img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../../Content/Img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../../Content/Img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../../Content/Img/favicon/favicon-16x16.png">
        <link rel="manifest" href="../../Content/Img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    <!End Favicon>
</head>

<body class="backgroundFade">
<header>
    <a href="index.php"><img src="../../Content/Img/global/buttons/backbutton.png" class="backbutton"/></a>
    <h1>Gender Object</h1>
</header>

<main>
    <div class="spacer"></div>
    <!Carousel>
    <div class="container-fluid">
        <div class="container">
            <div class="row carousel_wrap">
                <div class="col-sm-2"></div>
                <div id="myCarousel" class="carousel slide col-sm-8" data-ride="carousel" style="padding: 0;">
                    <!Indicators>
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>

                    <!Wrapper for slides>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="../../Content/Img/objects/genderobjects/slide1.JPG" >
                        </div>

                        <div class="item">
                            <img src="../../Content/Img/objects/genderobjects/slide2.JPG">
                        </div>

                        <div class="item">
                            <img src="../../Content/Img/objects/genderobjects/slide3.JPG">
                        </div>

                        <div class="item">
                            <img src="../../Content/Img/objects/genderobjects/slide5.JPG">
                        </div>

                        <div class="item">
                            <img src="../../Content/Img/objects/genderobjects/slide6.JPG">
                        </div>
                    </div>

                    <!Left and right controls>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
    <!End Carousel>

    <div class="spacer_small"></div>

    <div class="description">
        <h2>#genderlicious #dynamic #connect #fluid #process</h2>
    </div>

</main>

<!JavaScript>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!Bootstrap>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>