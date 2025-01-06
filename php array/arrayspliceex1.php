<?php
//original arrays
$original_arr = array("BMW","Toyota","Scorpio","Thar","Rolesroyal");

echo "original array in :";
foreach($original_arr as $x){
    echo "$x <br>";
    
}
echo "<br>";

// value to be inserted
$inserted_value = "Bollero";
// where the position
$position = 3;

echo "Inserted array in :";
array_splice($original_arr,$position,0,$inserted_value);
foreach($original_arr as $x){
    echo "$x <br>";
}


?>