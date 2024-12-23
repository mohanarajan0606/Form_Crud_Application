<?php
session_start();

include 'dpc.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM client WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: reads.php");
    } else {
        echo "Error: " . $conn->error;
    }
}