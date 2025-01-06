<?php
// Indexed Array
$fruits = array("Apple", "Banana", "Cherry");
echo "The first fruit is: " . $fruits[0] . "<br>";

// Associative Array
$age = array("Alice" => 25, "Bob" => 30, "Charlie" => 35);
echo "Alice is " . $age["Alice"] . " years old. <br>";

// Multidimensional Array
$students = array(
    array("John", 20, "A"),
    array("Jane", 22, "B"),
    array("Jack", 19, "C")
);
echo "Name: " . $students[0][0] . ", Age: " . $students[0][1] . ", Grade: " . $students[0][2] . " <br>";

// Loop through an Indexed Array
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit <br>";
}

// Loop through an Associative Array
foreach ($age as $name => $value) {
    echo "$name is $value years old. <br>";
}

foreach ($students as $student){
     echo "Name: {$student[0]}, Age: {$student[1]}, Grade: {$student[2]}<br>";
}

// Add elements to an array
$fruits[] = "Orange";
$age["Diana"] = 28;
array_push($students,"Vijay",21,"D");




$myarr = array("HTML","CSS","JAVASCRIPT","PHP","MYSQL");

foreach($myarr as $res){
      echo "The Course Of: .$res"; 
      echo "<br>"; 
}

function myFunction(){
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, myFunction());

echo "$myArr[1]";



// Display updated arrays
print_r($fruits);
echo "<br>";
print_r($age);
echo "<br>";
print_r($students); 
?>
