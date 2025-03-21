<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="Q2.php" method="get">
    <fieldset>
        <label for="input-first-name">First name:</label>
        <input id="input-first-name" type="text" name="firstname">
        <label for="input-last-name">Last name:</label>
        <input id="input-last-name" type="text" name="lastname">
        <input type="submit" name="submit" value="Login">
    </fieldset>
</form>
<?php
if (isset($_GET['submit'])) {
    $firstName = isset($_GET['firstname']) ? trim($_GET['firstname']) : '';
    $lastName = isset($_GET['lastname']) ? trim($_GET['lastname']) : '';

    switch (true) {
        case ($firstName == '' && $lastName == ''):
            // User clicked the Login button without any other input
            echo "Anonymous login attempt";
            break;

        case ($firstName !== '' && $lastName !== ''):
            // User clicked the Login button and provided both names
            echo "Login attempt by $lastName, $firstName";
            break;

        default:
            // All other form submissions
            echo "Incomplete login attempt";
            break;

    }
}
else {
    echo "Incomplete login attempt";
}
?>
</body>
</html>