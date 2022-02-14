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

<h1>Hello Seller</h1>
<form class="col-md-4 col-md-offset-4 signUpForm" id="admin_profile_form">


    <label for="username">Update Username: </label>
    <input type="text" name="username" id="username">
    <input type="submit" name="updateUsername" value="Submit Username">

    <h3>Update Password</h3>

    <label for="Password">Enter Current Password: </label>
    <input type="password" name="Password" id="Password">

    <label for="newPassword">Enter New Password: </label>
    <input type="password" name="newPassword" id="newPassword">

    <label for="againPassword">Enter New Password Again: </label>
    <input type="password" name="againPassword" id="againPassword">

    <input type="submit" name="updatePasword" value="Submit Password">




    <label for="name">Update Full Name: </label>
    <input type="text" name="name" id="name">
    <input type="submit" name="updateName" value="Submit Full Name">



    <label for="age">Update Age: </label>
    <input type="text" name="age" id="age">
    <input type="submit" name="updateAge" value="Submit Age">
    </div>
</form>

<?php
include ("../Database/database.php");
$conn = OpenCon();


if (isset($_POST['verifyName'])) {
    $name=$_POST['Name'];
    $sql = "SELECT * FROM seller where fullname = '$name'";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<h3>Seller's Account Exists</h3>";
        }
    } else {
        echo "<h3>Your account does not Exist</h3>";
    }

}
elseif (isset($_POST['updateUsername'])) {
    $name=$_POST['Name'];
    $username=$_POST['username'];
    $sql = "UPDATE seller SET username= '$username' WHERE fullName='$name'";
    $result = $conn->query($sql);
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
    $name2=$_POST['name2'];
    $sql="UPDATE seller SET fullName='$name2' WHERE fullName='$name'";
    $result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}
elseif (isset($_POST['updateAge'])) {
    $name=$_POST['Name'];
    $age=$_POST['age'];
    $sql="UPDATE seller SET age=$age WHERE fullName='$name'";
    $result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}
elseif (isset($_POST['updateAddress'])) {
    $name=$_POST['Name'];
    $address=$_POST['address'];
    $sql="UPDATE seller SET address='$address' WHERE fullName='$name'";
    $result=$conn->query($sql);
    runQuery($sql, $conn,$result);
}
elseif (isset($_POST['updatePhNo'])) {
    $name=$_POST['Name'];
    $phNo=$_POST['phNo'];
    $sql="UPDATE seller SET phoneNumber='$phNo' WHERE fullName='$name'";
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
$conn->close();
?>

</body>
</html>



