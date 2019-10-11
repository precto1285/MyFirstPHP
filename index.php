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
// Playing with Strings
  $name = "Philippe";

  echo $statement;
  echo "<hr/>";
  echo "<h2>My name is " . $name . "</h2>";
  echo "<p>I was born in " . $yearBorn . "</p>";
  echo "I am " . strtoupper($age . " years old.");
echo "<br>";
  echo "My name spelled Backwards: ";
  echo strtoupper($name[7]) . $name[6] . $name[5] . $name[4] . $name[3] . $name[2] . $name[1] . strtolower($name[0]);

echo "<hr>";
// Integer is a number without any decimal
$intNum = 456;
echo $intNum . " is an Integer <br>";
$floatNum = 234.45;
echo $floatNum . " is a Float <br>";


// PHP Constants - an identifier for a simple value. (Automatically Global)
define("Bass", "Fender", true);
echo Bass . "<br>";

// PHP Constants with arrays:
define("Guitar", ["Gibson", "Fender", "Ibanez", "ESP"]);
echo Guitar[2] . "<br>";

// If Else Statements:
$eight = 8;
$nine = 9;
$sumNum = $eight + $nine;
if($sumNum <= 15){
  echo $eight . "<br>";
}
else{
  echo $nine . "<br>";
};

// Switch Statements:
$color = "green";
$sentence = "Your favorite color is ";
switch ($color) {
  case "red":
    echo $sentence . "red!";
    break;
  case "blue":
    echo $sentence . "blue!";
    break;
  case "green":
    echo $sentence . "green!";
    break;
  default:
    echo $sentence . "neither red, blue, no green!"; 
};

  ?>
</body>
</html>