<!DOCTYPE html>
<html>
<head>
    <title>Arrays and Loops in PHP</title>
</head>
<body>
<h1>Tutorial 2 - Arrays (and how to iterate over them)</h1>

<?php
    $nums = array(5, 11, 14, 52, -80, 2, 4, 3, 8, 15, -12, 142);
    $sentence = "Hello and welcome to the second tutorial of INFO 263";
    $people = array("Jeff"=>"Red", "Alice"=>"Black", "Alex"=>"Green", "Batman"=>"Yellow", "Bruce"=>"Green",
        "Sally"=>"Blue", "Ashley"=>"Yellow", "Steve"=>"Black", "Michael"=>"Yellow", "Charlie"=>"Blue", "Ben"=>"Yellow");

    echo "Exercise 1<br />";
    echo "-------------<br />";
    function print_array($nums) {
        // BEGIN EXERCISE 1.
        for($i =0; $i < count($nums); $i++) {
            echo $nums[$i] . "<br>";
        }
    }
    
    print_array($nums);
    
    echo "<br />";
    echo "Exercise 2<br />";
    echo "-------------<br />";
    echo "Smallest:<br />";
    function print_smallest_number($nums) {
        // BEGIN EXERCISE 2a.
        echo min($nums) . "<br>";
    }
    print_smallest_number($nums);

    echo "Largest:<br />";
    function print_largest_number($nums) {
        // BEGIN EXERCISE 2b.
        echo max($nums) . "<br>";
    }
    print_largest_number($nums);
    echo "<br />";

    echo "Exercise 3<br />";
    echo "-------------<br />";
    function print_odd_numbers($nums) {
        // BEGIN EXERCISE 3.
        for($i=0; $i<count($nums); $i++) {
            if($nums[$i]%2!=0) {
                echo $nums[$i] . "<br>";
            }
        }
    }
    print_odd_numbers($nums);
    echo "<br />";

    echo "Exercise 4<br />";
    echo "-------------<br />";
    function remove_even_numbers($nums) {
        $even_nums = array();
        // BEGIN EXERCISE 4.
        foreach ($nums as $num) {
            if($num%2!=0) {
                $even_nums[] = $num;
            }
        }
        return $even_nums;
    }
    $remaining_numbers = remove_even_numbers($nums);
    print_array($remaining_numbers);
    echo "<br />";

    echo "Exercise 5<br />";
    echo "-------------<br />";
    function reverse_the_sentence($sentence) {
        // BEGIN EXERCISE 5.
        $words = explode(" ", $sentence);
        $reversed = array_reverse($words);
        return implode(" ", $reversed);
    }
    echo reverse_the_sentence($sentence);
    echo "<br><br>";

    echo "Exercise 6<br />";
    echo "-------------<br />";
    function print_favourite_colours($people) {
        // BEGIN EXERCISE 6.
        foreach($people as $key=>$value) {
            echo $key . ": " . $value . "<br />";
        }
    }
    print_favourite_colours($people);
    echo "<br />";

    echo "Exercise 7<br />";
    echo "-------------<br />";

    function print_colour_occurrences($people) {
        // BEGIN EXERCISE 7.
        $colours = [];
        foreach($people as $key=>$value) {
            $colours[] = $value;
        }
        $counts = array_count_values($colours);
        foreach($counts as $colour=>$count) {
            if ($count > 1) {
                echo "$count people selected $colour.<br />";
            }
            else {
                echo "$count person selected $colour.<br />";
            }
        }
    }
    print_colour_occurrences($people);
    echo "<br />"

?>
</body>
</html>
