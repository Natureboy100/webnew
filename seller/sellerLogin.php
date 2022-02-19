<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../styling%20files/login_style.css">
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->


              <div class="fadeIn first">
                <img src="../styling%20files/pharma.webp" id="icon" alt="User Icon" />
              </div>

        <!-- Login Form -->
        <form method="post" action=sellerLogin.php>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In" name="bLogin">
            <input type="button" value="Sign Up" onclick="window.location.href='seller_signup.php'" >
        </form>

        <!-- Remind Passowrd -->
        <!--      <div id="formFooter">-->
        <!--        <a class="underlineHover" href="#">Forgot Password?</a>-->
        <!--      </div>-->

    </div>
</div>
<?php
    include ("../Database/database.php");
    $conn = OpenCon();


    if (isset($_POST["bLogin"])) {
        $name = $_POST["login"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM seller WHERE username='$name' and password='$password'  LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $_SESSION['seller_id'] = $row['id'];
                $_SESSION['username'] = $name;

                header("Location:seller_panel.php");
            }
        } else {
            echo "Your account does not Exist";
        }

    }
/* $p=is_null($result['username']);
 $u=is_null($result['password']);
 if ( $p|| $u) {
     print "<input type='checkbox' />"; }
 else { print "<input type='checkbox' checked />"; }
*/
    /*if ($conn->query($sql) === 'not found') {
        echo "Error:Your Account does not Exist " . $sql . "<br>" . $conn->error;
    } else {
        echo "New record created successfully";
        }
     echo "id: " . $row["id"]. " - Name: " . $row["fullName"]. "Username: " . $row["username"]. "<br>";
    */


        CloseCon($conn);
?>
</body>
</html>


