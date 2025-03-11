<?php
session_start();
include('database.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname']; 
    $course = $_POST['course']; 
    $sex = $_POST['sex']; 
    $size = $_POST['size']; 
    $paymentstatus = $_POST['paymentstatus']; 

    $sql = "INSERT INTO clients (firstname, lastname, course, sex, size, paymentstatus) VALUES ('$firstname', '$lastname', '$course', '$sex', '$size','$paymentstatus')"; 

    if (mysqli_query($conn, $sql)) { 
        $_SESSION['status'] = "created"; 
    } else { 
        $_SESSION['status'] = "error"; 
    }

    mysqli_close($conn); 
    header("Location: ../index.php"); 
    exit(); 
}
?> 