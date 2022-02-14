<?php

    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE DATABASE project";
    if ($conn->query($sql) === TRUE) {
      echo "Database project created successfully";
    } else {
      echo "Error creating database: " . $conn->error;
    }

    $conn->close();


    include ("database.php");
    $conn = OpenCon();

    $sql = file_get_contents("admin.sql");
    $conn->multi_query($sql);
    echo "<br>";

    CloseCon($conn);
    $conn = OpenCon();
    echo "<br>";

    $sql = file_get_contents("seller.sql");
     $conn->multi_query($sql);
     echo "<br>";

    CloseCon($conn);
    $conn = OpenCon();
    echo "<br>";

    $sql = file_get_contents("medicine.sql");
    $conn->multi_query($sql);

    CloseCon($conn);
    $conn = OpenCon();
    echo "<br>";

    $sql = file_get_contents("receipt.sql");
     $conn->multi_query($sql);


    echo "<br> admin, seller, medicine, sales DataBases added successfully<br>";

    CloseCon($conn);

?>