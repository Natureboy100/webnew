<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Talha, Hazrat, Haseeb">
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
        ul li a {
            font-size: 17px;
            font-family: workSans, sans-serif;
            color: rgb(19, 18, 18);
            font-weight: bold;
        }

        ul li a:hover {
            color: #181716;
        }

        .form-row button {
            font-size: 17px;
            font-family: workSans, sans-serif;
            font-weight: bold;
        }

        h1, p, input {
            font-family: workSans, sans-serif;
        }
        input {
            font-weight: bold;
        }
    </style>
</head>

<body>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <form action="" method="post">
            <div class="text-center" style="color: #fff;">
                <h1>Pharma Management System</h1>
            </div>
            <div class="text-center" style="margin-bottom: 5em; color: #fff;">
                <p>Hola!</p>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-7">
                    <button type="button" name="b_admin" onclick="window.location.href='admin/adminLogin.php'" class="btn btn-info btn-block" style="background-color: #36281d; color: #fff;">Admin Portal</button>
                </div>
                <div class="col-7 my-1">
                    <button type="button" name="b_seller" onclick="window.location.href='seller/sellerLogin.php'" class="btn btn-info btn-block"  style="background-color: #36281d; color: #ffffff;">Seller Portal</button>
                </div>
            </div>

        </form>
    <div></div>
</div>
</div>
<?php
      print_r($_REQUEST);
?>
</body>
</html>


