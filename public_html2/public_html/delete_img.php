<?php

$conn = new mysqli("localhost", "id20097600_root", "uV1PVi/)dRNnx&4*","id20097600_prod");
// echo "my first script";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  };
  echo "Connected successfully";
$idi=$_POST['idimg'];

$dele=mysqli_query($conn, "delete from images where ID='$idi'");
echo $idi;