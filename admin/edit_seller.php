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
<h1>Edit Seller Information</h1>

<form class="col-md-4 col-md-offset-4 signUpForm" id="admin_profile_form">
    <label for="selectName">Enter The Name Of The Seller You Want To Edit: </label>
    <input type="text" name="Name" id="Name">
    <input type="submit" name="verifyName" value="Verify Name Exists">

    <label for="username">Update Username: </label>
    <input type="text" name="username" id="username">
    <input type="submit" name="updateUsername" value="Submit Username">

    <label for="Password">Enter Current Password: </label>
    <input type="password" name="Password" id="Password">
    <input type="submit" name="updatePasword" value="Submit Password">


    <label for="name">Update Full Name: </label>
    <input type="text" name="name" id="name">
    <input type="submit" name="updateName" value="Submit Full Name">


    <label for="age">Update Age: </label>
    <input type="text" name="age" id="age">
    <input type="submit" name="updateAgge" value="Submit Age">

    <label for="address">Update Address: </label>
    <input type="text" name="address" id="address">
    <input type="submit" name="updateAddress" value="Update Address">

    <label for="phNo">Update Phone Number: </label>
    <input type="text" name="phNo" id="phNo">
    <input type="submit" name="updatePhNo" value="Update Phone Number">
</form>



</body>
</html>
<?php
include ("../Database/database.php");
$conn = OpenCon();


if (isset($_POST['verifyName'])) {
    $name=$_POST['Name'];
    $sql = "SELECT * FROM seller where Name = '$name'";
    $result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}
elseif (isset($_POST['updateUsername'])) {
    $name=$_POST['Name'];
    $username=$_POST['username'];
    $sql="UPDATE seller SET username= '$username' WHERE fullName='$name'";
    $result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}
elseif (isset($_POST['updatePasword'])) {
    $name=$_POST['Name'];
    $Password=$_POST['Password'];
    $sql="UPDATE seller SET password= '$Password' WHERE fullName='$name'";
    $result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}
elseif (isset($_POST['updateName'])) {
    $name=$_POST['Name'];
    $name=$_POST['name'];
    $sql="UPDATE seller SET fullName= '$name' WHERE fullName='$name'";
    $result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}
elseif (isset($_POST['updateAge'])) {
    $name=$_POST['Name'];
    $age=$_POST['age'];
    $sql="UPDATE seller SET age= '$age' WHERE fullName='$name'";
    $result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}
elseif (isset($_POST['updateAddress'])) {
    $name=$_POST['Name'];
    $address=$_POST['address'];
    $sql="UPDATE seller SET address= '$address' WHERE fullName='$name'";
    $result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}
elseif (isset($_POST['updatePhNo'])) {
    $name=$_POST['Name'];
    $phNo=$_POST['phNo'];
    $sql="UPDATE seller SET phoneNumber= '$phNo' WHERE fullName='$name'";
    $result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}
$conn->close();
?>


