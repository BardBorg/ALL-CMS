<?php

$conn = new mysqli("localhost", "id20097600_root");
// echo "my first script";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  };
  echo "Connected successfully";
$user=$_POST['user'];
$pass=$_POST['pass'];
$hashed=password_hash($pass, PASSWORD_DEFAULT);

$result=mysqli_query($conn, "insert into Users (id, username, password) values(default, '$user', '$hashed')");

?>