<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Medicine</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .fSearch {
            margin: 0 auto;
            margin-top: 50px;
        }
    </style>

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <form class="d-flex col-4 fSearch" method="post">
        <input class="form-control me-2" name="search" type="search" placeholder="Search Medicine By Company Name" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" name="bSearch">Search</button>
    </form>


    <?php
    include ("../Database/database.php");
    $conn = OpenCon();


    if (isset($_POST["bSearch"])) {
        $search = $_POST["search"];


        $sql = "SELECT * FROM medicine WHERE mCompany='$search' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                header("Location:seller_panel.php");
            }
        } else {
            echo "Your account does not Exist";
        }

    }


    CloseCon($conn);

?>
</body>
</html>