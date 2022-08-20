<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Randomizer</title>
</head>

<body>
  <div id="main-container">
    <form id="form-container" action="randomizer-processor.php" method="post">
      <input class="flex-item" type="text" name="nameOne" value="Be" required>
      <input class="flex-item" type="text" name="nameTwo" value="Enzo" required>
      <input class="flex-item" type="text" name="nameThree" value="Lucas" required>
      <input class="flex-item" type="text" name="nameFour" value="Luiz" required>
      <button id="btn" type="submit" name="submit">Randomize!</button>
    </form>
  </div>
</body>

</html>