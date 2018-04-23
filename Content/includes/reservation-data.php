<?php
require_once "database.php";

//get data from db
    $query = "SELECT * FROM registrations";
    $result = mysqli_query($db, $query);

//create array which will be displayed on reservation page
    $registrations = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $registrations[] = $row;
    }



