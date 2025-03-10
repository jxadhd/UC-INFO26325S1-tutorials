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

    // Overwriting and retrieving items using offsets (indices)
    $paper [] = "Copier paper";
    $paper[] = "Ink jet paper";
    $paper[] = "Laser paper";
    $paper[] = "Photo paper";
    $paper [5] = "Acid-free paper";
    // ^ Usually makes an error
    // Looping over the array contents.
    for ($j = 0 ; $j < 6; ++$j)
        echo "<br><br>$j: $paper[$j]<br>";

    // Associative arrays
    $p1 = array("Copier", "Inkjet", "Laser", "Photo");

    echo "p1 element: " . $p1[2] . "<br>";

    $p2 = array('copier' => "Copier & Multipurpose",
                "Inkjet" => "Inkjet Printer",
                "Laser" => "Laser Printer",
                "Photo" => "Photographic Paper");

    echo "p2 element: ". $p2["Inkjet"]. "<br>";

    // Looping over Associative Arrays
     $paper = array(
         'copier' => "Copier & Multipurpose",
         'inkjet' => "Inkjet Printer",
         'laser' => "Laser Printer",
         'photo' => "Photographic Paper");

     foreach($paper as $item => $description)
        echo "$item: $description<br>";

     // More looping
     $paper = array(

         'copier' => "Copier & Multipurpose",

         'Inkjet' => "Inkjet Printer",

         'Laser' => "Laser Printer",

         'Photo' => "Photographic Paper");

     while (list($item, $description) =
         each($paper))
         echo "$item: $description<br>";
     
?>
</body>

</html>

