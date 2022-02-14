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

<h1>Update Medicine Information</h1>

<form class="col-md-4 col-md-offset-4 signUpForm" id="admin_profile_form" method="post">
    <label for="NameofMedicine">Enter The Orignal Name Of The Medicine You Want To Edit: </label>
    <input type="text" name="oldNameofMedicine" id="oldNameofMedicine">

    <label for="NameofMedicine">Enter New The Name Of The Medicine You Want To Edit: </label>
    <input type="text" name="newNameofMedicine" id="newNameofMedicine">
    <input type="submit" name="bNameofMedicine" value="Update Medicine Name">

    <label for="typeOfMedicine">Update Type Of Medicine: </label>
    <input type="text" name="typeOfMedicine" id="typeOfMedicine">
    <input type="submit" name="btypeOfMedicine" value="Update Type">


    <label for="Description">Update Description: </label>
    <input type="text" name="Description" id="Description">
    <input type="submit" name="bDescription" value="Update Description">


    <label for="MedicinePrice">Update Pricing: </label>
    <input type="MedicinePrice" name="MedicinePrice" id="MedicinePrice">
    <input type="submit" name="bMedicinePrice" value="Update Pricing">


    <label for="Usage">Update Usage Label: </label>
    <input type="text" name="Usage" id="Usage">
    <input type="submit" name="bUsage" value="Update Usage">


    <label for="CompanyName">Update Company Name: </label>
    <input type="text" name="CompanyName" id="CompanyName">
    <input type="submit" name="bCompanyName" value="Update Name">

    <label for="DoseDescription">Update Dose: </label>
    <input type="text" name="DoseDescription" id="DoseDescription">
    <input type="submit" name="bDoseDescription" value="Update Dose">

    <label for="quantity">Update Quantity: </label>
    <input type="number" name="quantity" id="quantity">
    <input type="submit" name="updateQuantity" value="update Quantity">

</form>



</body>
</html>
<?php
include ("../Database/database.php");
$conn = OpenCon();

# Publish-button was clicked
if (isset($_POST['bNameofMedicine'])) {
    $inputfullname = $_POST['oldNameofMedicine'];
    $name = $_POST['newNameofMedicine'];
    # Publish-button was clicked
    $sql = "UPDATE medicine SET inputfullname='$name' WHERE inputfullname='$inputfullname'";
    $result=$conn->query($sql);
    if ($conn->query($sql) == TRUE) {
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif (isset($_POST['btypeOfMedicine'])) {
    # Save-button was clicked
    $inputfullname = $_POST['oldNameofMedicine'];
    $type = $_POST['typeOfMedicine'];
    $sql = "UPDATE medicine SET mType='$type' WHERE inputfullname='$inputfullname'";$result=$conn->query($sql);
    runQuery($sql, $conn,$result);
} elseif (isset($_POST['bDescription'])) {
    $inputfullname = $_POST['oldNameofMedicine'];
    $description = $_POST['Description'];
    # Save-button was clicked
    $sql = "UPDATE medicine SET mDescription='$description' WHERE inputfullname='$inputfullname'";$result=$conn->query($sql);
    runQuery($sql, $conn,$result);
} elseif (isset($_POST['bMedicinePrice'])) {
    $inputfullname = $_POST['oldNameofMedicine'];
    $price =$_POST['MedicinePrice'];
    # Save-button was clicked
    $sql = "UPDATE medicine SET mPrice='$price' WHERE inputfullname='$inputfullname'";$result=$conn->query($sql);
    runQuery($sql, $conn,$result);
} elseif (isset($_POST['updateQuantity'])){
    $inputfullname = $_POST['oldNameofMedicine'];
    $quantity = $_POST['quantity'];
    # Save-button was clicked
    $sql = "UPDATE medicine SET mQuantity=$quantity WHERE inputfullname='$inputfullname'";
    $result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}
elseif (isset($_POST['bCompanyName'])) {
$inputfullname = $_POST['oldNameofMedicine'];
    $company = $_POST['CompanyName'];
    # Save-button was clicked
    $sql = "UPDATE medicine SET mCompany='$company' WHERE inputfullname='$inputfullname'";$result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}
elseif (isset($_POST['bUsage'])) {
    $inputfullname = $_POST['oldNameofMedicine'];
    $usage = $_POST['mUsage'];
    # Save-button was clicked
    $sql = "UPDATE medicine SET mUsage='$usage' WHERE inputfullname='$inputfullname'";
    $result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}
elseif (isset($_POST['bDoseDescription'])) {
     $inputfullname = $_POST['oldNameofMedicine'];
    $dose = $_POST['DoseDescription'];
    # Save-button was clicked
    $sql = "UPDATE medicine SET mDose='$dose' WHERE inputfullname='$inputfullname'";$result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}

function runQuery($sql,$conn,$result) {
    $result=$conn->query($sql);
    if ($conn->query($sql) == TRUE) {
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

$conn->close();?>