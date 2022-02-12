<?php

function OpenCon()
{
    $host="localhost";
    $username="root";
    $passwrd="";
    $db="project";

    $link = mysqli_connect($host, $username, $passwrd,$db);


    if (@mysqli_connect_error()) {
        die('User cannot connect to the database.... Try Again!');
        echo "Connection not successful";
    } else {
        @mysqli_select_db($link, 'project');
        echo "Connection successful";
    }

    return $link;
}

function CloseCon($conn)
{
    $conn -> close();
}


?>








