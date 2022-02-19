<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Hazrat & Talha">
    <link rel="icon" href="../favicon.ico">
    <title>Admin CMS Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap_css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            background-image: url(../img/bg_1.jpg);
            background-position:center;
            background-size:cover;
        }
        @font-face {
            font-family: workSans;
            src: url(../font/WorkSans-ExtraLight.ttf);
        }
        .signUpForm {
            margin: 0 auto;

        }
        h1{
            margin-bottom: 30px;
            text-align: center;
        }


        input {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>


<body>

<h1 id="h1">Welcome to Pharma System</h1>
<h1>Register Seller</h1>
<form method="POST" class="col-md-3 col-md-offset-3 signUpForm">
    <div class="form-row ">
        <label for="inputfullname">Enter Your Full Name</label>
        <input type="text" class="form-control" name="inputfullname" id="inputfullname">
    </div>
    <div class="form-row">
        <label for="inputEmail">Enter Your Email Address</label>
        <input type="email" class="form-control" id="inputEmail" name="inputEmail">
    </div>
    <div class="form-row">
        <label for="inputAge">Your Age</label>
        <input type="text" class="form-control" id="inputAge" name="inputAge">
    </div>
    <div class="form-row">
        <label for="inputusername">User Name</label>
        <input type="text" class="form-control" id="inputusername" name="inputusername">
    </div>

    <div class="form-row">
        <label for="inputnewPassword">New Password</label>
        <input type="password" class="form-control" id="inputnewPassword" name="inputnewPassword">
    </div>
    <div class="form-row">
        <label for="inputpasswordAgain">Retype your Password</label>
        <input type="password" class="form-control" id="inputpasswordAgain" name="inputpasswordAgain">
    </div>
    <div class="form-row">
        <label for="address">Enter Address</label>
        <input type="text" class="form-control" id="address" name="address">
    </div>

    <button type="submit" name="bSignUp" class="btn btn-primary">Submit</button>
</form>


<?php
    include ("../Database/database.php");
    $conn = OpenCon();

    if (isset($_POST["bSignUp"])) {
        $fullName = $_POST["inputfullname"];
        $username = $_POST["inputusername"];

        $nPassword = $_POST["inputnewPassword"];
        $naPassword = $_POST["inputpasswordAgain"];

        if ($nPassword == $naPassword) {
            $address = $_POST['address'];
            $age = $_POST["inputAge"];
            $email = $_POST["inputEmail"];
            $phoneNumber = $_POST["inputAge"];


            $sql = "INSERT INTO seller (fullName, username, password, address, age, email, phoneNumber) VALUES ('$fullName', '$username', '$nPassword'
                                    , '$address', $age, '$email', '$phoneNumber')";
            if(mysqli_query($conn, $sql)){
                echo "Records added successfully.";
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
        } else {
            echo "New Passwords don't match... Please try again.";
        }
    }


    CloseCon($conn);
?>
</body>
</html>