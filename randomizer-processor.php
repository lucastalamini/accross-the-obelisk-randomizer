<link rel="stylesheet" href="style.css"/>

<?php

// Check if the form was submitted

if (isset($_POST['submit'])) {

    // Assign the value of each form field to a variable

    $nameOne = $_POST['nameOne'];
    $nameTwo = $_POST['nameTwo'];
    $nameThree = $_POST['nameThree'];
    $nameFour = $_POST['nameFour'];

    // Create an array using the $name variables

    $names = [$nameOne, $nameTwo, $nameThree, $nameFour];

    // Array containing each of the available classes

    $classes = ["Mage 🧙‍♂️", "Healer 🌿", "Thief 🏹", "Tank 🛡️"];

    // Randomize the array containing the available classes

    shuffle($classes);

    // Map through the randomized classes array while assigning each class to one of the values on the $names array
    echo "<div id=\"main-container\"><div id=\"php-container\">";
    array_map(
        static function ($name, $class) {
            echo "<text id=\"php-item\">$name will play as the $class</text>";
        },
        $names,
        $classes
    );
    echo "</div></div>";
} else {

    // Error message in case the randomizer-processor.php is accessed directly

    echo "Please submit the form.";
}
