<?php
require_once "database.php";

//select data from db
    $query = "SELECT * FROM userdata";
    $result = mysqli_query($db, $query);

//put data in array and save in var
    $userdata = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $userdata[] = $row;
        $id = $row['id'];
        $username = $row['username'];
        $hash = $row['password'];
    }


?>