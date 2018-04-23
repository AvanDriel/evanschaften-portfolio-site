<?php
ob_start();
session_start();
include "../Content/includes/session.php";
include "../Content/includes/workshop-data.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Erik van Schaften - Admin</title>

    <!bootstrap CSS >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!theme>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="../Content/Css/style.css"/>

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

<div class="header-admin">
    <h1><a href="reservations.php">Reserveringen</a></h1>
    <h1><a href="account.php">Account</a></h1>
    <h1><b>Workshops</b></h1>
    <h3><a href = "logout.php" title = "Logout">Logout</a></h3>
</div>

<main>
    <div class="spacer"></div>
    <div class="container">
        <div class="row workshop-data">
            <div class="workshop-data-header">
                <h1>Workshops aanpassen</h1>
                <h3><?=$title1?></h3>
            </div>
            <div class="form-wrapper">
                <div class="workshop1-data">
                    <form action="workshop-edit-confirmation.php" method="post">
                        <div class="data-field id-tag">
                            <label for="id">Workshop 1</label>
                            <textarea id="id" type="text" name="id">1</textarea>
                        </div>

                        <div class="data-field">
                            <label for="title">Huidige titel</label>
                            <textarea id="title" type="text" name="title"><?=$title1?></textarea>
                        </div>

                        <div class="data-field">
                            <label for="description">Huidige beschrijving</label>
                            <textarea id="description" type="text" name="description"><?=$description1?></textarea>
                        </div>

                        <div class="data-field">
                            <label for="description">Datum 1</label>
                            <textarea id="date1" type="text" name="date1"><?=$w1date1?></textarea>
                        </div>

                        <div class="data-field">
                            <label for="description">Datum 2</label>
                            <textarea id="date2" type="text" name="date2"><?=$w1date2?></textarea>
                        </div>

                        <div class="data-submit">
                            <input type="submit" name="submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer"></div>
    <div class="container">
        <div class="row workshop-data">
            <div class="workshop-data-header">
                <h3><?=$title2?></h3>
            </div>
            <div class="form-wrapper">
                <div class="workshop2-data">
                    <form action="workshop-edit-script.php" method="post">
                        <div class="data-field id-tag">
                            <label for="id">Workshop 2</label>
                            <textarea id="id" type="text" name="id">2</textarea>
                        </div>

                        <div class="data-field">
                            <label for="title">Huidige titel</label>
                            <textarea id="title" type="text" name="title"><?=$title2?></textarea>
                        </div>

                        <div class="data-field">
                            <label for="description">Huidige beschrijving</label>
                            <textarea id="description" type="text" name="description"><?=$description2?></textarea>
                        </div>

                        <div class="data-field">
                            <label for="description">Datum 1</label>
                            <textarea id="date1" type="text" name="date1"><?=$w2date1?></textarea>
                        </div>

                        <div class="data-field">
                            <label for="description">Datum 2</label>
                            <textarea id="date2" type="text" name="date2"><?=$w2date2?></textarea>
                        </div>

                        <div class="data-submit">
                            <input type="submit" name="submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer"></div>
</main>


<!JavaScript>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!Bootstrap>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
