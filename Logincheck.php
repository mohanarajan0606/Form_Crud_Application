<?php

session_start();

// Database connection
$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "php_form";  // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get input values from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Validate inputs
if (!empty($email) && !empty($password)) {
    // Query to check if the user exists
    $sql = "SELECT * FROM client WHERE Email = ? AND password1 = ?";
    
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // print_r($stmt);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    // print_r($result);
    
    if ($result->num_rows > 0) {
        // Login successful
        $_SESSION['user_email'] = $email; 
        header("Location: reads.php");   
        exit();
    } else {
        // Login failed
        echo "<p style='color: red;'>Invalid email or password. Please try again.</p>
               <a href='Login.html'>Back To The Login Page</a>";
    }
    
    $stmt->close();
} else {
    echo "<p style='color: red;'>Please fill out all fields.</p>";
}


// Close the connection
$conn->close();
?>
