<?php
//require_once("check_credentials.php");
//    switch (true) {
//        case isset($_COOKIE['authenticated_user']):
//            echo "Welcome back, " . $_COOKIE['authenticated_user'] . "!";
//            break;
//        case ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password'])):
//            switch (true) {
//                case (check_credentials($_POST['username'], $_POST['password'])):
//                    echo "Welcome back, " . $_POST['username'] . "!";
//                    break;
//                case (!check_credentials($_POST['username'], $_POST['password'])):
//                    echo "Unknown username or password";
//                    break;
//            }
//            break;
//        default:
//            echo "Please enter your credentials";
//            break;
//    }
require_once('check_credentials.php');
if (isset($_COOKIE['authenticated_user'])) {
    echo "Welcome back, {$_COOKIE['authenticated_user']}!";
} elseif (isset($_POST['username'], $_POST['password']) and
    !check_credentials($_POST['username'], $_POST['password'])) {
    echo "Unknown username or invalid password";
} elseif (isset($_POST['username'], $_POST['password']) and
    check_credentials($_POST['username'], $_POST['password'])) {
    echo "User {$_POST['username']} has been re-authenticated";
} else {
    echo "Please enter your credentials";
}
?>