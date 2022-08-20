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

if (isset($_POST['submit'])) {

  $nameOne = $_POST['nameOne'];
  $nameTwo = $_POST['nameTwo'];
  $nameThree = $_POST['nameThree'];
  $nameFour = $_POST['nameFour'];

  $names = array($nameOne, $nameTwo, $nameThree, $nameFour);

  $classes = array("Mage 🧙‍♂️", "Healer 🌿", "Thief 🏹", "Tank 🛡️");

  shuffle($classes);

  array_map(function ($name, $class) {
    echo "<div id=\"php-container\"><p id=\"php-item\">$name will play as the $class" . "<br>" . "<br> </p></div>";
  }, $names, $classes);
} else {
  echo "Please submit the form.";
}
