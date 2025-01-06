<?php

  // Declaring associated array
  $ass_arr = ["a"=>"Geeks", "b"=>"For", "c"=>"Geeks"];

  // Deleting element associated with key "b"
  unset($ass_arr["b"]);

  // Printing array after deleting the element
  print_r($ass_arr);

  // Declaring indexed array
  $ind_arr = ["Geeks","For","Geeks"];

  // Deleting element and index 1
  unset($ind_arr[1]);
  echo "<br>";
  // Printing array after deleting the element
  print_r($ind_arr);

  $markSheet = array("Nikunj" => 45, "Dhruv" => 78, "Yash" => 93, "Arti" => 69); 

  $keys = array_keys($markSheet); // Get all keys of the array
  echo "<br>";

  foreach ($keys as $key) {
    echo "$key - $markSheet[$key] \n";
  } 
  
  echo "<br>";
  //array_walk function 
  echo "The array_walk function tutorial <br>";


  //declare the array 
  $msheet = array("Vijay" => 80, "Dinesh" => 70, "Yashar" => 85, "Vignesh" => 90);

  array_walk($msheet,function($value,$key){
    echo "The key $key has value of $value "."<br>";
  }) ;

  ?>
<html>
<body>
    <?php
        //JSON Format Tutorial
        $a = array("a1"=>26,"a2"=>40,"a3"=>80);
        // $b=json_decode($a);
        // foreach($a as $key => $value){
        //     echo "key =".$key."value =".$value."<br>";
        // }
        // echo "<p>Json encode method</p>";
        echo json_encode($a);
    ?>
    <p>Json Decode method</p>
    <?php
       //JSON decode method
       $jsonobj = '
       {
           "a":30,
           "b":50,
           "c":60
        }';
        // echo json_encode($jsonobj);
        $obj=json_decode($jsonobj);
        foreach($obj as $key=>$value){
            echo "The key = ".$key." "."Value is = ".$value."<br>"; 
        }
        // echo $obj;

    ?>

    <script>
        let a=`{
            "company" :"GeeksforGeeks",
            "Estd" :2009,
            "Location":"Noida"    
        }`
       let result = JSON.parse(a);
       console.log("The result of :"+result.company);
       

    </script>
</body>
</html>