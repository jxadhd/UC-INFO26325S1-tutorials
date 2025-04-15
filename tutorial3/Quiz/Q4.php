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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input values
    $u = trim($_POST['username'] ?? '');
    $p = trim($_POST['password'] ?? '');

    // Validate credentials with clear logic
    if (!empty(check_username($u)) | !empty(check_password($p))) {
        if (check_username($u) && check_password($p)) {
            echo "Welcome, Superman!";
        } elseif (check_username($u) && !check_password($p)) {
            echo "Superman, are you drunk again?";
        } else {
            echo "You are not Superman, are you?";
        }
    } else {
        echo "You are not Superman, are you?";
    }
}
?>

</body>
</html>