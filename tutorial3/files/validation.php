<!DOCTYPE html>
<html lang="en">
    <body>
        <h2>HTML Form Validation</h2>

        <form action="validation.php" method="get">
            <label for="input-dob">Date Of Birth:</label>
            <input id="input-dob" type="date" name="dob" value="">
            <br />
            <label for="input-favorite-color">Favourite colour:</label>
            <input id="input-favorite-color" type="text" name="favouritecolour" value="">
            <br /><br />
            <input type="submit" value="Submit">
        </form>

        <p>Enter your date of birth and favourite colour.</p>

        <!-- EXERCISE 3a. -->
        <?php if(isset($_GET["dob"])) {

            //!--Check the date of birth input-- >
            $dob = $_GET["dob"];
            if($dob == ""){
                echo "<p>Please enter a valid date of birth.</p>";
            }
            else if(strtotime($dob) > time()){
                echo "<p>Please enter a valid date of birth after today's date.</p>";
            }
            else if(strtotime($dob) <= time()){
                echo "<p>Thanks, your DOB timestamp is " . strtotime($dob) . "!</p>";
            }
        }
            ?>

        <!-- EXERCISE 3b. and 3c. -->
        <?php $favourite_colours = array("blue", "red", "yellow", "orange", "black"); ?>
        <?php if (isset($_GET["favouritecolour"])){
            $favouritecolour = $_GET["favouritecolour"];
            if ($favouritecolour == "") {
                echo "<p>Please enter your favourite colour.</p>";
            }
            else if (in_array($favouritecolour, $favourite_colours)
                or in_array(strtolower($favouritecolour), $favourite_colours)) {
                echo "<p>Your favourite colour, $favouritecolour is one of ours too!.</p>";
            }
            else {
                echo "<p>That's not a valid favourite colour.</p>";
            }
        }?>
            <!-- Check the color input -->

    </body>
</html>