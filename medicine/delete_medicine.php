<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .m1 {
            /*visibility: hidden;*/
        }
    </style>

</head>
<body>
<h1>Delete Medicine</h1>
<form method="post" >
    <input type="text" class="form-control" id="mType" name="mType">
    <input type="submit" name="mDeleteBtn">
</form>
</body>
</html>

<?php
    include ("../Database/database.php");
    $conn = OpenCon();
    $type=$_POST['mType'];
    $sql="DELETE from medicine WHERE inputfullname='$type'";
    $result=$conn->query($sql);
    if ($conn->query($sql) == TRUE) {
        echo "'$type' record deleted successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);
;?>



