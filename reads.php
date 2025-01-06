<?php

include 'Session_Check.php';
include 'dpc.php';

$sql = "SELECT * FROM client";
$result = $conn->query($sql);
// print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Items</title>
    <link rel="stylesheet" href="Styles/read.css">
    <!-- <style>
        td{
            padding: 25px;

        }
        table{
            margin-top: 20px;
            width: 100%;
        }.update{
            padding: 10px;
        }.delete{
            float:right;
        }
        
    </style> -->
</head>
<body>
    <a href="Login.html">Logout</a>
    <h1>Customer List</h1>
    <a href="Save.php">Add New Users</a>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) :?>
            <!-- <?php print_r($row) ;?> -->
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['Fname'] ?></td>
            <td><?= $row['Email'] ?></td>
            <td><?= $row['Phone']?></td>
            <td><?= $row['Password1']?></td>
            <td>
                <a class="update" href="Save.php?id=<?= $row['id'] ?>">Edit</a>
                <a class="delete" href="deletes.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>