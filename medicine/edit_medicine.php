<?php
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
<h1>Update Medicine Information</h1>

<form class="col-md-4 col-md-offset-4 signUpForm" id="admin_profile_form">
    <label for="NameofMedicine">Enter The Name Of The Medicine You Want To Edit: </label>
    <input type="text" name="NameofMedicine" id="NameofMedicine">
    <input type="submit" name="bNameofMedicine" value="Verify Medicine Exists">

    <label for="typeOfMedicine">Update Type Of Medicine: </label>
    <input type="text" name="typeOfMedicine" id="typeOfMedicine">
    <input type="submit" name="btypeOfMedicine" value="Update Type">

    <h3>Update Description</h3>

    <label for="Description">Update Description: </label>
    <input type="text" name="Password" id="Description">
    <input type="submit" name="bDescription" value="Update Description">


    <label for="MedicinePrice">Update Pricing: </label>
    <input type="MedicinePrice" name="MedicinePrice" id="MedicinePrice">
    <input type="submit" name="bMedicinePrice" value="Update Pricing">


    <label for="Usage">Update Usage Label: </label>
    <input type="text" name="Usage" id="Usage">
    <input type="submit" name="bUsage" value="Update Usage">


    <h2>Current Company Name: <?php echo "Geno Smith" ?></h2>


    <label for="CompanyName">Update Name: </label>
    <input type="text" name="CompanyName" id="CompanyName">
    <input type="submit" name="bCompanyName" value="Update Name">

    <label for="DoseDescription">Update Name: </label>
    <input type="text" name="DoseDescription" id="DoseDescription">
    <input type="submit" name="bDoseDescription" value="Update Dose">

    <h3>Current Quantity: <?php echo "19" ?></h3>


    <label for="quantity">Update Quantity: </label>
    <input type="number" name="quantity" id="quantity">
    <input type="submit" name="updateQuantity" value="Update Quantity">

</form>



</body>
</html>
