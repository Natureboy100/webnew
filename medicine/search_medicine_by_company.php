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
    <title>Search Medicine</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <form class="d-flex col-4 fSearch" method="post">
        <input class="form-control me-2" name="search" type="search" placeholder="Search Medicine By Company Name" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" name="bSearch">Search</button>
    </form>


    <?php
    include ("../Database/database.php");
    $conn = OpenCon();


    if (isset($_POST["bSearch"])) {
        $search = $_POST["search"];


        $sql = "SELECT * FROM medicine WHERE mCompany='$search' ";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
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
                while ($row = mysqli_fetch_array($result)) {
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
            } else {
                echo "No records matching your query were found.";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }


    CloseCon($conn);

?>
</body>
</html>