<?php

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "signup";

$conn =mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
    echo" ";
}
else
{
    echo " conection failed ";
}
?>