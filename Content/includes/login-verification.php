<?php
//Init message (empty)
$msg = '';

//Check if fields are filled
if (isset($_POST['login']) && !empty($_POST['username'])
    && !empty($_POST['password'])) {
    //Verify username and password
    if ($_POST['username'] == $username &&
       (password_verify($_POST['password'], $hash)) == true) {
        //Start session, send user to reservations page
        $_SESSION["valid"] = true;
        header('Location: reservations.php');
    }else {
        //Show error message
        $msg = 'Wrong username or password';
        $alertdisplay = "block";
    }
}

