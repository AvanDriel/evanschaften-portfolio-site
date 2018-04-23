<?php
ob_start();
session_start();

require_once "../Content/includes/user-data.php"

?>

<html lang = "en">

<head>
    <title>EvS Admin page</title>
    <!Bootstrap>
        <!Latest compiled and minified CSS>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!Optional theme>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <!End Bootstrap>
    <link rel="stylesheet" type="text/css" href="../Content/Css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../Content/Css/admin-css.php"/>

    <!Favicon>
        <link rel="apple-touch-icon" sizes="57x57" href="../Content/Img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../Content/Img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../Content/Img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../Content/Img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../Content/Img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../Content/Img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../Content/Img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../Content/Img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../Content/Img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../Content/Img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../Content/Img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../Content/Img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../Content/Img/favicon/favicon-16x16.png">
        <link rel="manifest" href="../Content/Img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    <!End Favicon>
</head>

<body class="backgroundFade">
<main>
    <div class="spacer"></div>
    <div class = "form-box">
        <h2>Erik van Schaften Admin Login</h2>

        <div class = "message">
            <?php include_once '../Content/includes/login-verification.php'?>
        </div>

        <form class = "form-signin" role = "form"
              action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
              ?>" method = "post">
            <h4 class = "form-signin-heading"><?= $msg; ?></h4>
            <input type = "text" class = "form-control"
                   name = "username" placeholder = "username"
                   required autofocus></br>
            <input type = "password" class = "form-control"
                   name = "password" placeholder = "password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
                    name = "login">Login</button>
        </form>

    </div>
</main>
</body>
</html>