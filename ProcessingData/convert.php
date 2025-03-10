<?php // convert.php
    $f = $c = "";

    if (isset($_POST['f'])) $f = sanitizeString($_POST['f']);
    if (isset($_POST['c'])) $c = sanitizeString($_POST['c']);

    if ($f != '') {
        $c = intval((5 / 9) * ($f - 32));
        $out = "$f °F equals $c °C";
    }
    elseif ($c != '') {
        $f = intval((9 / 5) * $c + 32);
        $out = "$c °C equals $f °F";
    }
    else $out = "No value was entered";
    function sanitizeString($var)
    {
        $var = stripslashes($var);
        $var = strip_tags($var);
        $var = htmlentities($var);
        return $var;
    }
?>