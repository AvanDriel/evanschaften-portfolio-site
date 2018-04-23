<?php
ob_start();
session_start();
require_once "../Content/includes/reservation-data.php";
include "../Content/includes/session.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Erik van Schaften - Reservations</title>

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
        <h1><b>Reserveringen</b></h1>
        <h1><a href="account.php">Account</a></h1>
        <h1><a href="workshop-edit.php">Workshops</a></h1>
        <h3><a href = "logout.php" title = "Logout">Logout</a></h3>
    </div>

    <main>
        <div class="spacer"></div>
        <div class="container">
            <div class="row current-reservations">
                <div class="current-reservations-header">
                    <h1>Reserveringen</h1>
                </div>

                <div class="current-reservations-content">
                    <table>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>Email</th>
                            <th>Datum</th>
                            <th>Workshop</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($registrations as $index => $registration) { ?>
                            <tr>
                                <td><?= htmlentities($registration['id']); ?></td>
                                <td><?= htmlentities($registration['firstname']); ?></td>
                                <td><?= htmlentities($registration['lastname']); ?></td>
                                <td><?= htmlentities($registration['email']); ?></td>
                                <td><?= htmlentities($registration['date']); ?></td>
                                <td><?= htmlentities($registration['workshop']); ?></td>
                                <td><a href="delete-confirmation.php?id=<?= $registration['id']; ?>">Delete</a> </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
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