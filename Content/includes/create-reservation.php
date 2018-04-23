<?php
require_once "database.php";

//Escape all special characters for sql injection
    $firstname = mysqli_real_escape_string($db,$_POST['firstname']);
    $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $date = mysqli_real_escape_string($db,$_POST['date']);
    $workshop = mysqli_real_escape_string($db,$_POST['workshop']);

//Insert user data into db registrations
    $sql = "INSERT INTO registrations (firstname, lastname, email, date, workshop)
            VALUES ('$firstname', '$lastname', '$email', '$date', '$workshop')";

$newURL = '../../Pages/workshops/index.php';