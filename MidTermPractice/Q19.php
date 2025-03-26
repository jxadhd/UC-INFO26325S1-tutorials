<?php
if (isset($_GET['submit'])) {
    if ((isset($_GET['firstname']) && isset($_GET['lastname']))) {
        $f = $_GET['firstname'];
        $l = $_GET['lastname'];
        echo "Login attempt by $l, $f";
    }
    else if (!isset($_GET['firstname']) && !isset($_GET['lastname'])) {
        echo "Anonymous login attempt";
    } else {
        echo "Incomplete login attempt";
    }
}
?>