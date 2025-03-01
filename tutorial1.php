<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tutorial 1 Notes</title>
</head>

<body>
<h1>INFO263 Tutorial 1 - Static vs Dynamic Web Pages</h1>
<p>This is an example of a static page sentence: The time is 1PM.</p>
<p>
    This is an example of a dynamic page sentence: The time is
    <?php echo date(DATE_RSS) ?>.
</p>
<p>
    As we can see, PHP allows us to create dynamic web pages that change when loading based on certain conditions.
</p>

<h2>Defining variables</h2>
<p>To define a variable in PHP, prefix it with a $, like $aVariable.</p>
<p>
    <?php
    $location = "Home";
    $weather = "raining";
    echo "The weather at $location is $weather.";
    ?>
</p>
<p>To see how the above sentence was formed using PHP variables, see the source code.</p>

<h2>Casting</h2>
<p>
    <?php
    $a = 56;
    $b = 12;
    $c = $a / $b;
    echo "Sometimes we need to use explicit casting to get the result in the form we want. Consider the equation " . $a
    . " / " . $b . " = " . $c . ".";
    ?>
    To convert a floating point variable to an integer, just add (int) before calling the variable:
    <?php
    echo (int) $c . ".";
    ?>
</p>

<h2>Using Function Parameters</h2>
<p></p>
<?php
    function stringConverter($s1, $s2){
        return strtoupper($s1) . " " . strtolower($s2);
    }
    echo stringConverter("Hello", "World");
?>

<h2>Variable Scoping</h2>

</body>

</html>
