<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>



<?php
include ("../Database/database.php");

$conn = OpenCon();


    $sql = "SELECT * FROM seller";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr>";
            echo "<th>id</th>";
            echo "<th>inputfullname</th>";
            echo "<th>mType</th>";
            echo "<th>mDescription</th>";
            echo "<th>mPrice</th>";
            echo "<th>mQuantity</th>";
            echo "<th>mCompany</th>";
            echo "<th>mDose</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['med_id'] . "</td>";
                echo "<td>" . $row['inputfullname'] . "</td>";
                echo "<td>" . $row['mType'] . "</td>";
                echo "<td>" . $row['mDescription'] . "</td>";
                echo "<td>" . $row['mPrice'] . "</td>";
                echo "<td>" . $row['mQuantity'] . "</td>";
                echo "<td>" . $row['mCompany'] . "</td>";
                echo "<td>" . $row['mDose'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

CloseCon($conn);
?>

</body>
</html>