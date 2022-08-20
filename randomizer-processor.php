<style>
  * {
    background-color: #000000;
    color: #f1f1f1;
    font-size: 30px;
    font-family: "Mukta", sans-serif;
  }

  #php-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
    background: transparent;
  }

  #php-item {
    color: #f1f1f1;
    background: transparent;
  }
</style>

<?php

// Check if the form was submitted

if (isset($_POST['submit'])) {

  // Assign the value of each form field to a variable

  $nameOne = $_POST['nameOne'];
  $nameTwo = $_POST['nameTwo'];
  $nameThree = $_POST['nameThree'];
  $nameFour = $_POST['nameFour'];

  // Create an array using the $name variables

  $names = array($nameOne, $nameTwo, $nameThree, $nameFour);

  // Array containing each of the available classes

  $classes = array("Mage 🧙‍♂️", "Healer 🌿", "Thief 🏹", "Tank 🛡️");

  // Randomize the array containing the available classes

  shuffle($classes);

  // Map through the randomized classes array while assigning each class to one of the values on the $names array

  array_map(function ($name, $class) {
    echo "<div id=\"php-container\"><p id=\"php-item\">$name will play as the $class" . "<br>" . "<br> </p></div>";
  }, $names, $classes);
} else {

  // Error message in case the randomizer-processor.php is accessed directly

  echo "Please submit the form.";
}
