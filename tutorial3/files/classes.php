<!DOCTYPE html>
<html>
<head>
    <title>Classes in PHP</title>
</head>
<body>
    <h1>Classes</h1>

    <?php
    include_once "Person.php";
    // EXERCISE 7b

    // All People
    $person1 = new Person("John", 21, "Green");
    $person2 = new Person("Sally", 24, "Yellow");
    $person3 = new Person("Alice", 19, "Red");
    $person4 = new Person("Patrick", 21, "Blue");
    $person5 = new Person("Batman", 30, "Black");
    $people = array($person1, $person2, $person3, $person4, $person5);

    // All Aliens
    $alien1 = new Alien("Blork", "425", "Blorkenium Falcon", "Blork stunner");
    $alien2 = new Alien("Steve", "222", "Spaceship", "Pew Pew");
    $aliens = array($alien1, $alien2);

    # Exercise 7a - This should still work
    # Printing the name of person1 and changing it
    echo $person1->getName();
    echo "<br />";
    $person1->setName("Peter");
    echo "{$person1->getName()}";
    echo "<br />";

    # Printing people
    echo "<br />";
    function print_people($people) {
        foreach ($people as $person)
        {
            echo "{$person->getName()}, {$person->getAge()}, {$person->getFavouriteColour()}<br />";
        }
    }
    print_people($people);
    echo "<br />";

    // Batman and patrick eat a 'Carrot' and some 'French Fries
    $person5->eatFood("Carrot");
    echo "<br />";
    $person4->eatFood("French Fries");
    echo "<br />";

    echo "<br />";
    echo "Exercise 7b<br />";
    echo "----------------<br />";
    // Fire the laser.
    // Then fly away in your spaceship.

    echo "<br />";
    echo "Exercise 7c<br />";
    echo "----------------<br />";
    function print_aliens($aliens) {
        // TODO
    }

    echo "<br />";
    echo "Exercise 8<br />";
    echo "-------------------<br />";
    function make_all_species_jump($people, $aliens) {
        // TODO
    }
    ?>
</body>
</html>
