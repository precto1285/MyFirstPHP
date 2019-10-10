<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My First PHP</title>
</head>
<body>
  <?php 
  // String Variable
  $statement = "<h1>Hello World!</h1>";
  // Number Variable
  $yearBorn = 1978;
  $currentYear = 2019;
  $age = $currentYear - $yearBorn;

  $name = "Philippe";

  echo $statement;
  echo "<hr/>";
  echo "<h2>My name is " . $name . "</h2>";
  echo "<p>I was born in " . $yearBorn . "</p>";
  echo "I am " . $age . " years old."
  ?>
</body>
</html>