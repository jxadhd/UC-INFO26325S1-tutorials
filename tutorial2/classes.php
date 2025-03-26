<!DOCTYPE html>
<html lang="en">
<head>
    <title>Classes in PHP</title>
</head>
<body>
    <h1>Classes</h1>

    <?php
        include_once "Person.php";
        // BEGIN EXERCISE 8b.

        $person1 = new Person("John", 21, "Green");
        $person2 = new Person("Sally", 24, "Yellow");
        $person3 = new Person("Alice", 19, "Red");
        $person4 = new Person("Patrick", 21, "Blue");
        $person5 = new Person("Batman", 30, "Black");
        $people = array($person1, $person2, $person3, $person4, $person5);

        echo "Exercise 9a<br />";
        echo "---------------<br />";
        // BEGIN EXERCISE 9a.
        echo $person1->getName() . "<br>";
        $person1->setName("Josh");
        echo "John's name is now " . $person1->getname() . ". <br>";
        echo "<br />";
        echo "Exercise 9b<br />";
        echo "---------------<br />";
        function print_people($people) {
            // BEGIN EXERCISE 9b.

            foreach($people as $name) {
                $age = $name->getAge();
                $c = $name->getFavouriteColour();
                $n = $name->getName();
                echo "$n, $age, $c <br>";
            }
        }
        print_people($people);

        echo "<br />";
        echo "Exercise 9c<br />";
        echo "---------------<br />";
        // BEGIN EXERCISE 9c.
        // Make Batman and patrick eat a 'Carrot' and some 'French Fries'
        $person5->eatFood("Carrot");
        echo "<br>";
        $person4->eatFood("French Fries");
    ?>
</body>
</html>
