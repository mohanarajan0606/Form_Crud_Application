<?php
include 'dpc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $sql = "INSERT INTO client (Fname, Email, Phone, Password1) VALUES ('$name', '$email', '$phone', '$pass' )";
    if ($conn->query($sql) === TRUE) {
        header("Location: reads.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Item</title>
    <link rel="stylesheet" href="create.css">
    
</head>
<body>
    <h1>Create Item</h1>
    <form method="POST" action="">
        <div class="create">
            <label for="">First Name : </label>
            <input type="text" name="name" placeholder="Enter Your Name" required><br>
        </div> 
        <div class="create">   
            <label for="">Email Id   : </label>
            <input type="text" name="email" placeholder="Enter Your Email" required><br>
        </div> 
        <div class="create">     
            <label for="">Phone No   : </label>
            <input type="text" name="phone" placeholder="Enter Your Mobile" required><br>
        </div>
        <div class="create">     
            <label for="">Password   : </label>
            <input type="password" name="password" placeholder="Enter Your Password" required><br> 
        </div>
            <button type="submit">Add</button>
        
    </form>
   <h2><a href="reads.php">Back to List</a></h2>
</body>
</html>