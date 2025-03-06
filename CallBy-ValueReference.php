<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lecture Notes - Working With Data</title>
</head>

<body>
<?php
$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";
echo $a1 . " " . $a2 . " " . $a3 . "<br>";

function fix_names(&$n1, &$n2, &$n3)
    /*
     * The '&' ampersand character tells the
     * program to make a "call by reference",
     * referencing the original stored variables
     * instead of duplicating them to new ones.
     * The process of duping variables into a
     * function is known as "call by value".
    */
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
}

fix_names($a1, $a2, $a3);
echo $a1 . " " . $a2 . " " . $a3;

?>
</body>

</html>