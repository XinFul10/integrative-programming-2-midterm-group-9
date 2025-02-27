<?php
    $servername = "localhost";
    $db_name = "unifrecords";
    $username = "root";
    $password = "";

    //connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    //check connection
    if ($conn->connect_error) {
        die("connection failed". $conn->connect_error);
    }




?>