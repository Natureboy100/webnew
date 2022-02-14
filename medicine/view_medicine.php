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

<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Medicine <b>Details</b></h2></div>

                </div>
            </div>
<!--            <table class="table table-bordered">-->
<!--                <thead>-->
<!--                <tr>-->
<!--                    <th>Name</th>-->
<!--                    <th>Type</th>-->
<!--                    <th>Description</th>-->
<!--                    <th>Price</th>-->
<!--                    <th>Quantity</th>-->
<!--                    <th>Usage</th>-->
<!--                    <th>Company Name</th>-->
<!--                    <th>Dose</th>-->
<!---->
<!--                </tr>-->
<!--                </thead>-->
<!--                <tbody>-->
<!--                <tr>-->
<!--                    <td>Panadol</td>-->
<!--                    <td>Tablet</td>-->
<!--                    <td>Panadol relives sar ka dard</td>-->
<!--                    <td>Rs.180</td>-->
<!--                    <td>20</td>-->
<!--                    <td>Twice a day</td>-->
<!--                    <td>Panofax</td>-->
<!--                    <td>2 tablets per dose</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>Disprin</td>-->
<!--                    <td>Syrup</td>-->
<!--                    <td>Disprin solves cancer problem</td>-->
<!--                    <td>Rs.5000</td>-->
<!--                    <td>26</td>-->
<!--                    <td>Thrice a day</td>-->
<!--                    <td>Almofax</td>-->
<!--                    <td>2 spoons per dose</td>-->
<!--                </tr>-->
<!--                </tbody>-->
<!--            </table>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<?php
    include ("../Database/database.php");

    $conn = OpenCon();


    $sql = "SELECT * FROM medicine";
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
                echo "<td>" . $row['mQty'] . "</td>";
                echo "<td>" . $row['mDose'] . "</td>";
                echo "<td>" . $row['mCompany'] . "</td>";
                echo "<td>" . $row['mPrice'] . "</td>";
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