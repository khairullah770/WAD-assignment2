<?php

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "furitureRegister";

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