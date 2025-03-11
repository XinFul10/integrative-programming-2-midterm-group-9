<?php
session_start();
include('database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM clients WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "deleted";
    } else {
        $_SESSION['status'] = "error";
    }

    mysqli_close($conn);
    header('Location: ../index.php');
    exit();
}
?>