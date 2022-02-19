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

    <title>Admin Profile</title>

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
<h1>Hello Admin</h1>
<form class="col-md-4 col-md-offset-4 signUpForm" id="admin_profile_form" method="post">

    <label for="name">Enter Full Name: </label>
    <input type="text" name="Name" id="name">


    <h3>Update Password</h3>

    <label for="Password">Enter Current Password: </label>
    <input type="password" name="Password" id="Password">

    <label for="newPassword">Enter New Password: </label>
    <input type="password" name="newPassword" id="newPassword">

    <label for="againPassword">Enter New Password Again: </label>
    <input type="password" name="againPassword" id="againPassword">

    <input type="submit" name="updatePasword" value="Submit Password">


    <label for="age">Update Age: </label>
    <input type="text" name="age" id="age">
    <input type="submit" name="updateAge" value="Update Age">
    </div>

    <label for="address">Update Address: </label>
    <input type="text" name="address" id="address">
    <input type="submit" name="updateAddress" value="Update Address">

    <label for="phNo">Update Phone Number: </label>
    <input type="text" name="phNo" id="phNo">
    <input type="submit" name="updatePhNo" value="Update Phone Number">
</form>

<?php
    include ("../Database/database.php");
    $conn = OpenCon();
    if (isset($_POST['updateAddress'])) {
        $name=$_POST['Name'];
        $address=$_POST['address'];
        $sql="UPDATE admin SET address='$address' WHERE fullName='$name'";
        $result=$conn->query($sql);
        runQuery($sql, $conn,$result);
    }
    if (isset($_POST['updatePhNo'])) {
        $name=$_POST['Name'];
        $phNo=$_POST['phNo'];
        $sql="UPDATE admin SET phoneNumber='$phNo' WHERE fullName='$name'";
        $result=$conn->query($sql);
        runQuery($sql, $conn,$result);
    }
    if (isset($_POST['newPassword']) && isset($_POST['againPassword']) && isset($_POST['Password'])) {
        $name=$_POST['Name'];
        $Password=$_POST['Password'];
        $againPassword=$_POST['againPassword'];
        $newPassword=$_POST['newPassword'];

        if ($newPassword == $againPassword) {
            $sql="UPDATE admin SET password= '$newPassword' WHERE fullName='$name'";
            $result=$conn->query($sql);
            runQuery($sql, $conn,$result);
        }
        

        
    }
    if (isset($_POST['updateName'])) {
        $name=$_POST['Name'];
        $name2=$_POST['name2'];
        $sql="UPDATE admin SET fullName='$name2' WHERE fullName='$name'";
        $result=$conn->query($sql);
        runQuery($sql, $conn,$result);
    }
    if (isset($_POST['updateAge'])) {
        $name=$_POST['Name'];
        $age=$_POST['age'];
        $sql="UPDATE admin SET age=$age WHERE fullName='$name'";
        $result=$conn->query($sql);
        runQuery($sql, $conn,$result);
    }
    if (isset($_POST['updateAddress'])) {
        $name=$_POST['Name'];
        $address=$_POST['address'];
        $sql="UPDATE admin SET address='$address' WHERE fullName='$name'";
        $result=$conn->query($sql);
        runQuery($sql, $conn,$result);
    }
    if (isset($_POST['updatePhNo'])) {
        $name=$_POST['Name'];
        $phNo=$_POST['phNo'];
        $sql="UPDATE admin SET phoneNumber='$phNo' WHERE fullName='$name'";
        $result=$conn->query($sql);
        runQuery($sql, $conn,$result);
    }
    function runQuery($sql,$conn,$result)
    {
        $result = $conn->query($sql);
        if ($conn->query($sql) == TRUE) {
            echo "<br> Posted";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    echo "Query Successful";
    $conn->close();
?>

</body>
</html>



