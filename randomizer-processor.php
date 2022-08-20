<style>
  <?php include 'C:\Users\lucas\Documents\xampp\htdocs\accross-the-obelisk-randomizer\style.css'; ?>* {
    background-color: #000000
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
  echo "Fail loser lol L.";
}
