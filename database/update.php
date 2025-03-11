<?php
session_start();
include('database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $course = $_POST['course'];
    $sex = $_POST['sex'];
    $size = $_POST['size'];
    $paymentstatus = $_POST['paymentstatus'];

    $sql = "UPDATE clients SET firstname='$firstname', lastname='$lastname', course='$course', sex='$sex', size='$size', paymentstatus='$paymentstatus' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "updated";
    } else {
        $_SESSION['status'] = "error";
    }

    mysqli_close($conn);
    header("Location: ../index.php");
    exit();
}
?>
