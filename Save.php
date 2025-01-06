<?php
include 'Session_Check.php';
include 'dpc.php';

// Initialize variables
$id = $name = $email = $phone = $pass = "";
$editing = false;

// Check if an ID is passed for editing
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM client WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $item = $result->fetch_assoc();
        $name = $item['Fname'];
        $email = $item['Email'];
        $phone = $item['Phone'];
        $pass = $item['Password1'];
        $editing = true;
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];

    if ($id) {
        // Update existing record
        $sql = "UPDATE client SET Fname='$name', Email='$email', Phone='$phone', Password1='$pass' WHERE id=$id";
    } else {
        // Insert new record
        $sql = "INSERT INTO client (Fname, Email, Phone, Password1) VALUES ('$name', '$email', '$phone', '$pass')";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: reads.php");
        exit();
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
    <!--Check the title using for ternary operator-->
    <title><?= $editing ? "Edit Item" : "Create Item" ?></title>
    <!-- Check the css for using in ternay operator ....(conditon) ? true(statement1):false(statement2) -->
    <link rel="stylesheet" href="Styles/<?= $editing ? "Update.css" : "Create.css" ?>">
</head>
<body>
    <!--Check the heading for using in ternary operator-->
    <h1><?= $editing ? "Edit Item" : "Create Item" ?></h1>
    <form method="POST" action="">
        <!--Check the id in empty or value for using ternary operator -->
        <?= $editing ? '<input type="hidden" name="id" value="' . $id . '">' : '' ?>
        <div class="form-group">
            <label>First Name:</label>
            <input type="text" name="name" value="<?= htmlspecialchars($name) ?>" placeholder="Enter Your Name" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($email) ?>" placeholder="Enter Your Email" required>
        </div>
        <div class="form-group">
            <label>Phone:</label>
            <input type="number" name="phone" value="<?= htmlspecialchars($phone) ?>" placeholder="Enter Your Phone" required>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" id="password" name="password" value="<?= htmlspecialchars($pass) ?>" placeholder="Enter Your Password" required>
            <input type="checkbox" id="togglepassword"> Show Password
        </div>
        
        <!--Check the button head for title change using ternary operator -->
        <button type="submit"><?= $editing ? "Update" : "Add" ?></button>
    </form>
    <h2><a href="reads.php">Back to List</a></h2>
    <!-- Using javascript code for password visibility -->
    <script>
        const togglePassword = document.getElementById('togglepassword');
        const passwordField = document.getElementById('password');

        //The addEventListener method to event change in javascript
        togglePassword.addEventListener('change',()=>{
            passwordField.type = togglePassword.checked ? 'text' : 'password';
        });
    </script>
</body>
</html>
