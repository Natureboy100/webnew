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

    <title>admin Profile</title>

    <link href="../bootstrap_css/bootstrap.min.css" rel="stylesheet">

    <style>
        input {
            display: block;
            margin-bottom: 10px;
        }
        form {
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<h3 style="text-align: right"><a href="../logout.php">Logout</a></h3>

<h1>Sell Medicine</h1>


<form class="col-md-4 col-md-offset-4 signUpForm" id="admin_profile_form" method="post">
    <label for="NameofMedicine">Enter The Name Of The Medicine You Want To Sell: </label>
    <input type="text" name="NameofMedicine" id="NameofMedicine">

    <label for="Customer">Enter The Name Of The Customer to whom You Want To Sell: </label>
    <input type="text" name="Customer" id="Customer">

    <label for="Price">Enter Price: </label>
    <input type="text" name="price" id="price">

    <label for="quantity">Quantity To Sell: </label>
    <input type="number" name="quantity" id="quantity">
    <input type="submit" name="bAddToCart" value="Add To Cart">

    <input type="submit" name="checkOut" value="Check Out">
</form>


<?php
    include ("../Database/database.php");

    $conn = OpenCon();

    if (isset($_POST["bAddToCart"])) {
        //Varibles
        $NameofMedicine = $_POST["NameofMedicine"];
        $quantity = $_POST["quantity"];
        $seller_id=1000;
        $customer= $_POST["Customer"];

//        Trying to verify if medicine exists and then minus the qty from it
//        Then, echo medicine added to cart with same receipt id.
//        If checkout clicked, it will made a whole receipt.
//        receipt - most value + 1
        //Max_id
        $sql="Select Max(id)+1 as max_id from sales;";
        $result=$conn->query($sql);
        runQuery($sql,$conn,$result);
        $row=mysqli_fetch_array($result);
        $max_id=$row['max_id'];
        $price=$_POST['price'];
        echo "<h1>$seller_id<h1>";
        echo "<h1>$max_id<h1>";


        //Insert into Sales
        $sql="INSERT INTO sales(id, medicineName, DateSold, qtySold, seller_id, price,customer) VALUES ('$max_id','$NameofMedicine','02/22',$quantity,$seller_id,$price,'$customer');";
        $result=$conn->query($sql);
        if ($conn->query($sql) == TRUE) {
            echo "New record created successfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }



        //Update Medicine
        $sql = "UPDATE medicine SET mQty=mQty-$quantity WHERE inputfullname='$NameofMedicine';";

        if ($conn->query($sql) == TRUE) {
            echo "New record created successfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


    }

    elseif (isset($_POST['checkOut'])) {
        header("Location:receipt.php");
    }

    function runQuery($sql,$conn)
    {
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    CloseCon($conn);

?>



</body>
</html>
