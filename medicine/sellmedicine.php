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


    <form class="col-md-4 col-md-offset-4 signUpForm" id="admin_profile_form">
        <label for="NameofMedicine">Enter The Name Of The Medicine You Want To Sell: </label>
        <input type="text" name="NameofMedicine" id="NameofMedicine">

        <label for="Customer">Enter The Name Of The Customer to whom You Want To Sell: </label>
        <input type="text" name="Customer" id="Customer">



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
    //$quantity = $_POST["quantity"];
    $quantity=1000
    //$seller_id=$_SESSION['seller_id'];
    $seller_id=1000;
    $customer= $_POST["Customer"];
    $max_id=1000;



     $sql="INSERT INTO sales(id, medicineName, DateSold, qtySold, seller_id, customer) VALUES ('$max_id','$NameofMedicine','02/22',$quantity,$seller_id,20,'$customer');";
        $result=$conn->query($sql);
        runQuery($sql,$conn,$result);
        if ($conn->query($sql) == TRUE) {
            echo "New record created successfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}