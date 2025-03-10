<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Processing Data PHP</title>
</head>
<body>
    <h1>Processing Web Data on the Server Side</h1>
    <h2>Intro to Web Forms</h2>
    <pre>
        <b><?= $out ?></b>
        Enter either F or C temp value and click "Convert"...
        <form method="post" action="convert.php">
            Fahrenheit <input type="text"  name="f" size="7">
            Celsius    <input type="text"  name="c" size="7">
            <input type="submit" value="Convert">
        </form>
    </pre>

    <h2>Intro to Cookies with PHP</h2>

    <?php
    $cookie_name = "user_uuid";
    $cookie_value = "b60fd850-176a-11ed-861d-0242ac120002";

    // 86400 = 1 day
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");


    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    }
    else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>