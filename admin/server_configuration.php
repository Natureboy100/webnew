<?php

$host="localhost";
$username="root";
$passwrd="";

$link = mysqli_connect($host, $username, $passwrd);

if (@mysqli_connect_error()) {
    die('User cannot connect to the database.... Try Again!');
} else {
    @mysqli_select_db($link, 'database name');
}





?>
