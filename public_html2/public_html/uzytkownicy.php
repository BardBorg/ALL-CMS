<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: logowanie.php');
	exit;
}
error_reporting(0);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
  <meta charset="utf-8">
<title>CMS Admin</title>
<style media="all" type="text/css">
  
  @import "css/allr.css";
  
  
  </style>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body >
<div id="main">
  <div id="header"> <a href="http://all-free-download.com/free-website-templates/" class="logo"><img src="img/logo.png" style="float:right; width:10%; height:75%; margin:10px;" alt="" /></a>
    <ul id="top-navigation">
      <li ><span><span><a href="index.php">Posty</a></span></span></li>
      <li class="active" ><span><span><a href="uzytkownicy.html">Uzytkownicy</a></span></span></li>
      <li><span><span><a href="biblioteka.php">Biblioteka</a></span></span></li>
      <li><span><span><a href="wyglad.php">Wygląd</a></span></span></li>
     
    </ul>
  </div>
  <div id="middle">
    <div id="right-column"> <strong class="h">INFO</strong>
      <div class="box">Pamiętaj odpowiedniej polityce bezpieczeństwa-Stosuj mocne hasła i bądź ostrożny. </div>
      
      
      
      </div>
    <div id="left-column">
      <h3>Uzytkownicy</h3>
      <ul class="nav">
      <?php
      
       $dbhost = 'localhost';
       $dbname='id20097600_prod';
      
      //For displaying articles in left menu.
      $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

      $query = "SELECT id, username FROM Users";
      $results = $db->query($query);
      foreach ($results as $row) {
  $users = $row['username'];
  
  
  $ID = $row['id'];
  
  // $body = $row['body'];
  
  echo "<li id='$ID' ><a>" . $users . "</a></li>";

      }
  ?>
        
      </ul>
    
 <a href="landing.php" class="link">Przejdź do Template</a>
 <form name="logout" id="logout" action="logout.php" method="post" >
 
  
  <input type="submit" id="buto" value="Wyloguj" >
 
 </div>
    
  </form>
<div id="art">
<form name="form" id="user" method="post" >
<label for="nazwa">Wpisz nazwe</label> 
    <input type="text" id="nazwa" name="nazwa" ><br><br>
    <label for="nazwa">Wpisz hasło</label> 
    <input type="password" id="pass" name="nazwa" ><br>
    <p style="text-align:center;">Aby usunąć użytkownika można wpisać również hasło administracyjne</p>

    <!--<input type="submit" class="buto" id="buto" name="buto" value="Dodaj">-->
    <input type="submit" class="buto" id="busun" name="busun" value="Usun">
    </form>
    
    <button style="margin-left:10vw;" class="buto" id="add">Dodaj</button>
</div>
        <p>&nbsp;</p>
    
    <?php


echo $user;
echo $pass;
echo $inpass;


$conn = new mysqli("localhost", "id20097600_root", "uV1PVi/)dRNnx&4*","id20097600_prod");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  };
  


    ?>
<script>

document.getElementById("busun").addEventListener("click", getuser);

//Funkcja pobiera dane logowania dla usuwania.
function getuser(){
  var user2= document.getElementById("nazwa").value;
  
  var pass2= document.getElementById("pass").value;
  
  $.ajax({
url: 'delete_user.php',
type: 'POST',
data: {
  user2: user2,
  
  pass2: pass2
},
success: function(response){
  alert("Usuniete")
  window.location.reload();
}


  })
  
  
  
}


  document.getElementById("add").addEventListener("click", send);
function send(){
  var one=true;

    
   
  var user= document.getElementById("nazwa").value;
  var pass= document.getElementById("pass").value;

$.ajax({
url: 'insert_user.php',
type: 'POST',
data: {
  user: user,
  
  pass: pass
},
success: function(response){
  
  window.location.reload();
}

  })


  



}


</script>
    
   
  
  

    </body>
</html>


    