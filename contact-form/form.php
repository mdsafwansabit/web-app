<?php

$host = "https://sabit.fun";
$username = "sabitfun_form";
$password = "3BXPvcFzF9pMn4adBKSN";
$database = "sabitfun_form";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];

$sql = "INSERT INTO form_tbl (name, email, message) VALUES ('$name', '$email', '$msg')";

if ($conn->query($sql)===TRUE){
    echo "Form Submitted Successfully";
}
else {
    echo "Error: ".$sql."<br>" .$conn->error;
}


?>