<?php

$conn = new mysqli("localhost", "id20097600_root", "","");
// echo "my first script";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  };
  echo "Connected successfully";
$tytul=$_POST['tytul'];
$tresc=$_POST['tresc'];


$tytul_escape = mysqli_real_escape_string(
    $conn, $tytul);
    $tresc_escape = mysqli_real_escape_string(
      $conn, $tresc);
$result=mysqli_query($conn, "insert into posty (ID,Tytul, Tresc) values(default,'$tytul_escape', '$tresc_escape')");
// echo $idi;
?>