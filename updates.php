<?php
session_start();

include 'dpc.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // print_r($id);
    $sql = "SELECT * FROM client WHERE id=$id";
    // print_r($sql);
    $result = $conn->query($sql);
    // print_r($result);
    $item = $result->fetch_assoc();
    // print_r($item);
    
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    // print_r($id);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $sql = "UPDATE client SET Fname='$name', Email='$email', Phone='$phone', Password1='$pass' WHERE id=$id";
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
    <title>Edit Item</title>
    <link rel="stylesheet" href="Styles/update.css">
    <!-- <style>
        input{
            padding: 7px;
        }
        button{
            font-size: 20px;
        }
    </style> -->
</head>
<body>
    <h1>Edit Item</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?= $item['id'] ?>">
        <h4>First Name : <input type="text" name="name" value="<?= $item['Fname'] ?>" required></h4>
        <h4>Last Name  : <input type="text" name="email" value="<?= $item['Email'] ?>" required></h4>
        <h4>Phone No   : <input type="number" name="phone" value="<?= $item['Phone'] ?>" required></h4>
        <h4>Password   : <input type="password" name="password" value="<?=$item['Password1'] ?>"required></h4>
        <button type="submit">Update</button>
    </form>
    <h2><a href="reads.php">Back to List</a></h2>
</body>
</html>