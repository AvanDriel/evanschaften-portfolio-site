<?php
//database connection
    $host =  "localhost";
    $database = "evanschaften";
    $user = "root";
    $password = "";

$db = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
