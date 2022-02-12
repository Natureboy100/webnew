

<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="project";
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Create database
    $sql = "CREATE DATABASE if not exists project";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    // Check connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die("Connection failed to database: " . $conn->connect_error."<br>");
    }
    echo "Succesfully connected to databse.<br>";


    $sql = file_get_contents(__DIR__ . '\Medicine.sql');
    $result = $conn->query($sql);

    $sql = "SELECT * FROM Medicine.sql";
    $result = $conn->query($sql);
    //
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>medicine_name</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["med_id"]. "</td><td>" . $row["inputfullname"]. "</td><td> " . $row["mType"]. "</td><td> " . $row["mDescription"]. "</td><td> " . $row["mPrice"]. "</td><td> " . $row["mQuantity"]. "</td><td> " . $row["mUsage"]. "</td><td> " . $row["mCompany"]. "</td><td> " . $row["mDose"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);


?>


