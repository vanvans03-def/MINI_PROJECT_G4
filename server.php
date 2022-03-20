<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appleshop";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Error connect".mysqli_connect_error());
}
?>