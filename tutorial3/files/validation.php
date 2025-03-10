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
        <?php if(isset($_GET["dob"])): ?>
            <!-- Check the date of birth input -->
            <?php if ($_GET["dob"] == ""): ?>
                <p>Please input a date</p>
            <?php endif; ?>
        <?php endif; ?>


        <!-- EXERCISE 3b. and 3c. -->
        <?php $favourite_colours = array("blue", "red", "yellow", "orange", "black"); ?>
        <?php if (isset($_GET["favouritecolour"])): ?>
            <!-- Check the color input -->
        <?php endif; ?>

    </body>
</html>