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
    <label for="selectEmail">Enter The Email Of The Seller You Want To Edit: </label>
    <input type="text" name="selectEmail" id="selectEmail">
    <input type="submit" name="verifyEmail" value="Verify Email Exists">

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

    <h3>Current Full Name: <?php echo "Muhammad Hazrat" ?></h3>


    <label for="name">Update Full Name: </label>
    <input type="text" name="name" id="name">
    <input type="submit" name="updateName" value="Submit Full Name">

    <h3>Current Age: <?php echo "19" ?></h3>


    <label for="age">Update Age: </label>
    <input type="text" name="age" id="age">
    <input type="submit" name="updateAge" value="Submit Age">

    <label for="address">Update Address: </label>
    <input type="text" name="address" id="address">
    <input type="submit" name="updateAddress" value="Update Address">

    <label for="phNo">Update Phone Number: </label>
    <input type="text" name="phNo" id="phNo">
    <input type="submit" name="updatePhNo" value="Update Phone Number">
</form>



</body>
</html>



