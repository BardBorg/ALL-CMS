<?php

$conn = new mysqli("localhost", "id20097600_root", "","");
// echo "my first script";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  };
  echo "Connected successfully";
  $user2=$_POST['user2'];
  $pass2=$_POST['pass2'];
  
  $query =  mysqli_query($conn,"SELECT password FROM Users where username='$user2'");
  while($row = $query->fetch_assoc()){
    $userpass = $row;
    
}
$in = implode(" ", $userpass);


echo $inpass;
$query2 =  mysqli_query($conn,"SELECT password FROM Users where username='admin'");


while($row2 = $query2->fetch_assoc()){
    $admin = $row2;
    
}
$adminpass = implode(" ", $admin);

//   echo $adminpass;



$verify=password_verify($pass2, $in);
if ($verify) {
  $usun1 =  mysqli_query($conn,"DELETE FROM Users where username='$user2'");
  echo "valid";

}
//Admin password
elseif(password_verify($pass2, $adminpass)){
$usun2 =  mysqli_query($conn,"DELETE FROM Users where username='$user2'");
}


// //Delete user

else {
// Incorrect password
echo 'Incorrect username and/or password!';

}

?>