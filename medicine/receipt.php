<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location:../logout.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .fSearch {
            margin: 0 auto;
            margin-top: 50px;
        }
        table,
        th,
        td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
            margin: 0 auto;
        }

    </style>
</head>
<body>
<h3 style="text-align: right"><a href="../logout.php">Logout</a></h3>



<?php
    include ("../Database/database.php");
    $conn = OpenCon();



    $sql = "SELECT * FROM receipt WHERE = ''";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {

            echo "<h1>Receipt</h1>"
            echo "<table>";
            echo "<tr>";
            echo "<th>id</th>";
            echo "<th>medicineName</th>";
            echo "<th>DateSold</th>";
            echo "<th>qtySold</th>";
            echo "<th>seller_id</th>";
            echo "<th>Price</th>";
            echo "<th>customer</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['medicineName'] . "</td>";
                echo "<td>" . $row['DateSold'] . "</td>";
                echo "<td>" . $row['qtySold'] . "</td>";
                echo "<td>" . $row['seller_id'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['customer'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Close result set
            mysqli_free_result($result);
        } else {
            echo "No records matching your query were found.";
        }
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }



CloseCon($conn);


?>
</body>
</html>


