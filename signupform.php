<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Hazrat & Talha">
    <link rel="icon" href="favicon.ico">
    <title>Admin CMS Login</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap_css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            background-image: url(img/bg_1.jpg);
            background-position:center;
            background-size:cover;
        }
        @font-face {
            font-family: workSans;
            src: url(font/WorkSans-ExtraLight.ttf);
        }
        .signUpForm {
            margin: 0 auto;

        }
        #h1{
            margin-bottom: 30px;
            text-align: center;
        }


        /*ul li a {*/
        /*    font-size: 15px;*/
        /*    font-family: workSans, sans-serif;*/
        /*    color: rgb(19, 18, 18);*/
        /*    font-weight: bold;*/
        /*}*/

        /*ul li a:hover {*/
        /*    color: #181716;*/
        /*}*/

        /*.form-row button {*/
        /*    font-size: 15px;*/
        /*    font-family: workSans, sans-serif;*/
        /*    font-weight: bold;*/
        /*}*/

        /*h1, p, input {*/
        /*    font-family: workSans, sans-serif;*/
        /*}*/
        input {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>


<body>

<h1 id="h1">Welcome to Pharma System</h1>
<form class="col-md-3 col-md-offset-3 signUpForm">
    <div class="form-row ">
        <label for="inputfullname">Enter Your Full Name</label>
        <input type="text" class="form-control" id="inputfullname">
    </div>
    <div class="form-row">
        <label for="inputEmail">Enter Your Email Address</label>
        <input type="email" class="form-control" id="inputEmail">
    </div>
    <div class="form-row">
        <label for="inputAge">Your Age</label>
        <input type="text" class="form-control" id="inputAge">
    </div>
    <div class="form-row">
        <label for="inputusername">User Name</label>
        <input type="text" class="form-control" id="inputusername">
    </div>
    <div class="form-row">
        <label for="inputpassword">Current Password</label>
        <input type="password" class="form-control" id="inputpassword">
    </div>
    <div class="form-row">
        <label for="inputnewPassword">New Password</label>
        <input type="password" class="form-control" id="inputnewPassword">
    </div>
    <div class="form-row">
        <label for="inputpasswordAgain">Retype your Password</label>
        <input type="password" class="form-control" id="inputpasswordAgain">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>