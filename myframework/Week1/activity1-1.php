<!-- Maricel Rodriguez
     Assignment 1 -->

<?php
echo "<h1>Assignment 1</h1>";
echo "<p>Maricel Rodriguez</p>";



//PART ONE
echo "<br>";
echo "<h2>Part One: Hello World</h2>";
class Hello{
  public function __construct($to){
    $this->to = $to;
  }

  public function sayHello(){
    echo 'Hello, ',$this->to, '!';
  }
}

$helloInstance = new Hello("world");
$helloInstance->sayHello();



//PART TWO
echo "<br>";
echo "<h2>Part Two: Test Functionality with a Person</h2>";

$name = "Maricel";
$age = 24;

echo "<b>Using double quotes:</b>";
echo "<br>";
echo "My name is " . $name . " and my age is " . $age . ".";

echo "<br><br>";
echo "<b>Using single quotes:</b>";
echo "<br>";
echo 'My name is ', $name, ' and my age is ' , $age, '.';

$person = array($name, $age);

echo "<br><br>";
echo "<b>Using index:</b>";
echo "<br>";
echo "My name is ", $person[0], " and my age is " , $person[1], ".";

echo "<br><br>";
echo "<b>Using index:</b>";
echo "<br>";
echo "My name is ". $person[0], " and my age is " . $person[1], '.';

$person = array("name"=>$name, "age"=>$age);

echo "<br><br>";
echo "<b>Using Key/Value Pairs:</b>";
echo "<br>";
echo "My name is ". $person["name"], " and my age is " . $person["age"], '.';

$age = null;

echo "<br><br>";
echo "<b>Age as null:</b>";
echo "<br>";
echo $age;
//It prints nothing! Nada!

unset($name);

echo "<br><br>";
echo "<b>Unset name:</b>";
echo "<br>";
echo $name;
//It is now undefined!



//PART THREE
echo "<br>";
echo "<h2>Part Three: Letter Grades Function</h2>";

function calcLetterGrade($numGrade){
  if ($numGrade < 60){
    $letGrade = "F";
  } elseif ($numGrade < 70){
    $letGrade = "D";
  } elseif ($numGrade < 80){
    $letGrade = "C";
  } elseif ($numGrade < 90){
    $letGrade = "B";
  } else {
    $letGrade = "A";
  }

  return $letGrade;
}

echo "94 is " . calcLetterGrade(94) . "<br>";
echo "54 is " . calcLetterGrade(54) . "<br>";
echo "89.9 a " . calcLetterGrade(89.9) . "<br>";
echo "60.01 a " . calcLetterGrade(60.01) . "<br>";
echo "102.1 a " . calcLetterGrade(102.1) . "<br>";



//PART FOUR
echo "<br>";
echo "<h2>Part Four: Colors</h2>";

$colors = array("Red", "Orange", "Gold", "Green", "Blue");

for($i = 0; $i < count($colors); $i++){
  echo '<span style="color:'.$colors[$i].'">'.$colors[$i].'</span><br>';
}
?>
