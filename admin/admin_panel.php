<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location:../logout.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../styling files/admin_panel.css">
</head>

<body>
<h3 style="text-align: right"><a href="../logout.php">Logout</a></h3>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active Menu" id="NavHome" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active Menu" id="NavHome" aria-current="page" href="admin_profile.php">Profile</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle Menu" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Seller
                    </a>
                    <ul class="dropdown-menu Menu " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item Menu" href="add_seller.php">Add seller</a></li>
                        <li><a class="dropdown-item Menu" href="edit_seller.php">Edit Existing Sellers</a></li>
                        <li><a class="dropdown-item Menu" href="view_seller.php">View Existing Sellers</a></li>

                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle Menu" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Medicine
                    </a>
                    <ul class="dropdown-menu Menu " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item Menu" href="../medicine/add_medicine.php">Add Medicine</a></li>
                        <li><a class="dropdown-item Menu" href="../medicine/delete_medicine.php">Delete Medicine</a></li>
                        <li><a class="dropdown-item Menu" href="../medicine/edit_medicine.php">Update Medicine List</a></li>
                        <li><a class="dropdown-item Menu" href="../medicine/view_medicine.php">View Medicines</a></li>
                        <li><a class="dropdown-item Menu" href="../medicine/receipt.php">Receipts</a></li>

                    </ul>
                </li>


            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

</body>

</html>