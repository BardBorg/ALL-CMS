<?php

$conn = new mysqli("localhost", "id20097600_root", "","");
// echo "my first script";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  };
  echo "Connected successfully";
$idi=$_POST['id'];

$dele=mysqli_query($conn, "delete from posty where ID='$idi'");
echo $idi;
?>