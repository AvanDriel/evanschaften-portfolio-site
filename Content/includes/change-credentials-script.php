<?php
include "database.php";
include "user-data.php";

//Make new name and new pass handlers
$newname = mysqli_real_escape_string($db,$_POST['newname']);
    //Hash the password
$newpass = $hash = password_hash(mysqli_real_escape_string($db,$_POST['newpass']), PASSWORD_DEFAULT);

//Make error message
$message = 'Oops! Something went wrong.';

//Delete and Create strings for changing the username and password
$delete = "DELETE FROM userdata WHERE userdata.id = $id";
$create = "INSERT INTO userdata (username, password)
           VALUES ('$newname', '$newpass')";

//Get current userdata
$userdata = [];
while ($row = mysqli_fetch_assoc($result)) {
    $userdata[] = $row;
    $username = $row['username'];
    $password = $row['password'];
}

//Check if there is data in every field
if (!empty($_POST['currentname']) &&
    !empty($_POST['currentpass']) &&
    !empty($_POST['newname']) &&
    !empty($_POST['newpass'])){
    //Verify the current username and password
    if ($_POST['currentname'] == $username &&
        (password_verify($_POST['newpass'], $hash)) == true) {
        //If correct, change the username and password
        mysqli_query($db, $delete);
        $username = $_POST['newname'];
        $password = $_POST['newpass'];
        mysqli_query($db, $create);
        //Change error message to success message
        $message = 'Change Successful';
    }
}