<?php
 
  $servername="localhost";
  $username="root";
  $password="";

  $db_name="php_form";

  $connect=mysqli_connect($servername,$username,$password,$db_name);

  if(!$connect){
    echo "connection failed.";
  }

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=$_POST['Firstname'];
    $lname=$_POST['LastName'];
    $phone=$_POST['Phone'];
    $email=$_POST['Email'];
    $location=$_POST['country'];
    // $gender=$_POST['gender'];
    // $Interests=$_POST['Interests'];
    $Comments=$_POST['Comments'];
    $password=$_POST['Password'];

      $sql = "INSERT INTO client (Fname, Lname, Phone, Email, Country, Comments,password1) 
            VALUES ('$fname', '$lname', '$phone', '$email', '$location', '$Comments','$password')";

        // Execute the query and check for errors
    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }


 
        
}
// Close the connection
mysqli_close($connect);
?>