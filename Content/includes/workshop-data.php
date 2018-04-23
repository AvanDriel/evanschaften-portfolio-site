<?php
require_once "database.php";

//select the data
    $workshop1 = "SELECT * FROM workshopdata WHERE id='1'";
    $workshop2 = "SELECT * FROM workshopdata WHERE id='2'";
    $result1 = mysqli_query($db, $workshop1);
    $result2 = mysqli_query($db, $workshop2);

//create standard values to display error message
    $id = 'Could not fetch data';
    $title = 'Could not fetch data';
    $description = 'Could not fetch data';

//put data of first workshop in array, then save data
    $workshop1 = [];
    while ($row = mysqli_fetch_assoc($result1)) {
        $workshop1[] = $row;
        $id1 = $row['id'];
        $title1 = $row['title'];
        $description1 = $row['description'];
        $w1date1 = $row['date1'];
        $w1date2 = $row['date2'];
    }

//put data of second workshop in array, then save data
    $workshop2 = [];
    while ($row = mysqli_fetch_assoc($result2)) {
        $workshop2[] = $row;
        $id2 = $row['id'];
        $title2 = $row['title'];
        $description2 = $row['description'];
        $w2date1 = $row['date1'];
        $w2date2 = $row['date2'];
    }



