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
<h1>Sell Medicine</h1>

<form class="col-md-4 col-md-offset-4 signUpForm" id="admin_profile_form">
    <label for="NameofMedicine">Enter The Name Of The Medicine You Want To Sell: </label>
    <input type="text" name="NameofMedicine" id="NameofMedicine">
    <input type="submit" name="bNameofMedicine" value="Verify Medicine Exists">

    <h3>Current Quantity: <?php echo "19" ?></h3>


    <label for="quantity">Quantity To Sell: </label>
    <input type="number" name="quantity" id="quantity">
    <input type="submit" name="updateQuantity" value="Update Quantity">

</form>



</body>
</html>
