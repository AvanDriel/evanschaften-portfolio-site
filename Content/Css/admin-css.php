<?php header("Content-type: text/css");
$alertdisplay = "none";
?>
/*Login Form*/

    .form-signin {
        max-width: 400px;
        padding: 30px;
        margin: 0 auto;
        color: #017572;
        background-color: whitesmoke;
    }

    .form-signin .form-signin-heading,
    .form-signin .checkbox {
        margin: 10px;
    }

    .form-signin .checkbox {
        font-weight: normal;
    }

    .form-signin .form-control {
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
    }

    h2{
        text-align: center;
    }

/*Toggles display if the alert has to show*/
    .message {
     display=<?=$alertdisplay?>;
    }

    h2 {
        background-color: whitesmoke;
        margin: 0;
        padding: 50px;
        padding-bottom: 0;
        border-radius: 20px 20px 0px 0px;
    }

    .form-box {
        max-width: 400px;
        margin: 0 auto;
    }

    form {
        border-radius: 0px 0px 20px 20px;
    }