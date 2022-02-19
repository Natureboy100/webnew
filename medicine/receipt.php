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
    <label for="ID">Receipt Number</label>
    <form method="post">
    <input type="text" name="seller" id="seller">
    <input type="submit" name="pID" value="View Items added to cart">
    <input type="submit" name="nID" value="Use New ID">
    </form>
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
if (isset($_POST['nID'])) {
    $id=$_POST['seller'];
    $sql = "Select * from sales  where id=$id;";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {

            echo "<h1>Receipt</h1>";
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
                echo "<td>" ."$". $row['price'] . "</td>";
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
    $sql="Select SUM(qtySold) as SumQty,Sum(price) as SumPrice, SUM(qtySold)*Sum(price) as Total  from sales  where id=1;";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Sum of qtySold</th>";
            echo "<th>Sum of Price of each product individually</th>";
            echo "<th>Total Bill</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['SumQty'] . "</td>";
                echo "<td>" ."$". $row['SumPrice'] . "</td>";
                echo "<td>" ."$". $row['Total'] . "</td>";
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

}
elseif (isset($_POST['pID'])) {
    $sql="Select Max(id) as max_id from sales;";
    $result=$conn->query($sql);
    $row=mysqli_fetch_array($result);
    $max_id=$row['max_id'];
    $sql = "Select * from sales  where id=$max_id;";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {

            echo "<h1>Receipt</h1>";
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
                echo "<td>" ."$". $row['price'] . "</td>";
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
    $sql="Select SUM(qtySold) as SumQty,Sum(price) as SumPrice, SUM(qtySold)*Sum(price) as Total  from sales  where id=1;";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Sum of qtySold</th>";
            echo "<th>Sum of Price of each product individually</th>";
            echo "<th>Total Bill</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['SumQty'] . "</td>";
                echo "<td>" ."$". $row['SumPrice'] . "</td>";
                echo "<td>" ."$". $row['Total'] . "</td>";
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

}

//Select SUM(qtySold),Sum(price), SUM(qtySold)*Sum(price) as Total  from sales  where id=1;



CloseCon($conn);


?>
</body>
</html>


