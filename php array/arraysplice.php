<?php

// PHP program to illustrate the use 
// of array_splice() function

$array1 = array("10"=>"raghav", "20"=>"ram", 
    "30"=>"laxman","40"=>"aakash","50"=>"ravi");

$array2 = array("60"=>"ankita","70"=>"antara");

echo "The returned array: <br>";
print_r(array_splice($array1, 1, 4, $array2));
echo "<br>";

echo "\nThe original array is modified to: <br>";
print_r($array1);

?>