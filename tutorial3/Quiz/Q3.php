<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="Q3.php" method="get">
    <fieldset>
        <label for="input-dob">Date Of Birth:</label>
        <input id="input-dob" type="date" name="dob">
        <input type="submit" value="Submit">
    </fieldset>
</form>
<?php
    // Check if the form was submitted
    if (isset($_GET["dob"])) {
        $dob = trim($_GET['dob']);

        switch (true){
            case $dob == '':
                echo "Do you not remember your date of birth?";
                break;
            default:
                $stamp = strtotime($dob);

                switch (true){
                    case $stamp > time():
                        echo "Where did you park your time machine?";
                        break;
                    default:
                        $age = floor((time() - $stamp) / (365 * 60 * 60 * 24));
                        echo "Are you really $age years old?";
                }

        }
    }
    else {
        echo "Do you not remember your date of birth?";
    }
?>
</body>
</html>