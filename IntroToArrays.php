 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Arrays - Working With Data</title>
</head>

<body>
<?php
    // Declaring an array
    $team = array('Bill', 'Mary', 'Mike', 'Chris', 'Anne');
    $team = ['Bill', 'Mary', 'Mike', 'Chris', 'Anne'];
    echo $team[3] . "<br>";

    // Adding (appending) items
    $team[] = "Josh";
    echo $team[5] . "<br>";

    // Display array contents for debug
    print_r($team);

    // Change an entry
    $team[0] = "John";
    print_r($team);
?>
</body>

</html>

