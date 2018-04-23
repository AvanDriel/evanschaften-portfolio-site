<?php
include_once "database.php";

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];

$message = 'Oops! Something went wrong.';

$delete = "DELETE FROM workshopdata WHERE workshopdata.id = $id";
$create = "INSERT INTO workshopdata (id, title, description, date1, date2)
           VALUES ('$id','$title', '$description', '$date1', '$date2')";

mysqli_query($db, $delete);
mysqli_query($db, $create);
$message = 'Change Successful';