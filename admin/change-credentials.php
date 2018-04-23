<?php
ob_start();
session_start();
include "../Content/includes/session.php";
include "../Content/includes/change-credentials-script.php";
?>

<!doctype html>
<html>
<head>
    <title>Erik van Schaften - Admin</title>
    <meta charset="utf-8">
    <!Bootstrap>
        <!Latest compiled and minified CSS>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!Optional theme>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <!End Bootstrap>
    <link rel="stylesheet" type="text/css" href="../Content/Css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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

<body class="backgroundAdmin">
    <main>
        <div class="spacer"></div>
        <div class="confirmation-box">
            <h1><?=$message?></h1>
            <a href="account.php">Ga terug naar de admin pagina</a>
        </div>
    </main>
</body>
</html>