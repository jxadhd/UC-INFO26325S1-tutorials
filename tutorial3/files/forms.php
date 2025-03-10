<!DOCTYPE html>
<html lang="en">
    <body>

    <h2>HTML Forms</h2>

    <form action="forms.php" method="get">
        <label for="input-first-name">First name: </label>
        <input id="input-first-name" type="text" name="firstname" value="">
        <br />
        <label for="input-last-name">Last name: </label>
        <input id="input-last-name" type="text" name="lastname" value="">
        <br /><br />
        <input type="submit" value="Submit">
    </form>

    <p>Enter your first and last name, then hit submit.</p>

    <?php
    // Please do not modify this section, only comment out which part you are not currently testing
    // ==========================================================================================================
//   if (isset($_GET["firstname"])) {
//        $first_name = $_GET["firstname"];
//
//        greet_informally($first_name);
//    }

    if (isset($_GET["firstname"], $_GET["lastname"])) {
        $first_name = $_GET["firstname"];
        $last_name = $_GET["lastname"];

        greet_formally($first_name, $last_name);
    }
    // ==========================================================================================================
    /**
     * A function which says hello to the user and prints their name in uppercase.
     * @param $first String first name of the user.
     */
    function greet_informally($first) {
        // BEGIN EXERCISE 1 & EXERCISE 2a.
        if ($first) {
            echo "Hello " . strtoupper($first) . ".";

        }
        else {
            echo "Please input a name.";
        }
    }

    /**
     * A function which will say hello to a user given their first and last names.
     * @param $first String first name of the user.
     * @param $last String last name of the user.
     */
    function greet_formally($first, $last) {
        // BEGIN EXERCISE 2b.
        if ($first and $last) {
            echo "Hello $first $last.";
        }
        else{
            echo "Please input your full name.";
        }
    }
    ?>

    </body>
</html>