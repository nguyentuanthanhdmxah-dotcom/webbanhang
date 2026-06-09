<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "phone_store";

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

if(!$conn){
    die("Kết nối thất bại");
}


?>