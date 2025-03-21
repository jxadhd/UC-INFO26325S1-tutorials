<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="Q4.php" method="POST">
    <fieldset>
        <label for="input-username">Username:</label>
        <input id="input-username" type="text" name="username">
        <label for="input-password">Password:</label>
        <input id="input-password" type="password" name="password">
        <input type="submit" value="Login">
    </fieldset>
</form>

<?php
require_once "check_username_and_password.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    switch (true) {
        case isset($_POST['submit']):
            switch (true) {
                case check_username($username):
                    switch (true) {
                        case check_password($password):
                            echo "Welcome, Superman!";
                            break;
                        default:
                            echo "Superman, are you drunk again?";
                            break;
                    }
                    break;
                default:
                    echo "You are not Superman, are you?";
                    break;
            }
        default:
            break;
    }

}
?>

</body>
</html>