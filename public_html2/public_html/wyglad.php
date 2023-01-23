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

  <meta charset="utf-8">
<title>CMS Admin</title>
<!-- <link rel="stylesheet" href="new.css"> -->
<meta charset="utf-8">
<style media="all" type="text/css">
  
@import "css/allr.css";


</style>

<style media="allr" type="text/css">
  
@import "forlook.css";


</style>
<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
</head>
<body >
<div id="main">
  
  <div id="header"> <a href="http://all-free-download.com/free-website-templates/" class="logo"><img src="img/logo.png" style="float:right; width:10%; height:75%; margin:10px;" alt="" /></a>
  
    <ul id="top-navigation">
    <li><span><span><a href="index.php">Posty</a></span></span></li>
      <li><span><span><a href="uzytkownicy.php">Uzytkownicy</a></span></span></li>
      <li><span><span><a href="biblioteka.php">Biblioteka</a></span></span></li>
      <li class="active"><span><span>Wygląd</a></span></span></li>
     
    </ul>
  </div>
  <div id="middle">
  <div id="right-column"> <strong class="h">INFO</strong>
<div class="box">Pamiętaj o odpowiedniej polityce bezpieczeństwa-Stosuj mocne hasła i bądź ostrożny. </div>
<form name="form" id="logout" action="logout.php" method="post" >
 
  
  <input type="submit" id="buto" value="Wyloguj" >
</form>



</div>
    <div id="left-column">
    
            
      </ul>
      <!-- <button id="new">Add new post</button> -->
<a href="landing.php" class="link">Przejdź do Template</a> 

</div>
<div id="art" style="float:right;">
    <form name="form" id="myForm" class="form-anticlear" method="post" >
     <label for="subject">Wybierz kolor tła strony</label>
     <input type="color" id="subject"  value="#d3d3d3"><br><br> <br><br>
     <input type="submit" id="buto" name="button1"  onclick="sendbck()" ><br><br><br>
     <br>
</form>
<form method="post" class="form-anticlear">
     <label for="tekst">Wybierz kolor tekstu</label>
     <input type="color" id="tekst"  value="#d3d3d3"><br><br> <br><br>
     <input type="submit" id="buto" name="button1"  onclick="sendtkst()" ><br><br><br><br>
</form>
     <!-- <button type="button" style="background-color:white; font-weight:bolder;">B</button><br><br> -->
     <!-- <input type="button" name="bold" value="B" style="background-color:white; font-weight:bolder;"><br><br>  -->
     <form method="post" class="form-anticlear">
     <label for="tytul">Wpisz nazwe strony</label> 
       <input type="text" id="nazwa" name="nazwa"  value="GRAY BLOG"><br><br>
       <input type="submit" id="buto" name="button1"  onclick="sendname()" >
</form>
       
      
   
   
   
       
       
       
     

<p>&nbsp;</p>
</div>
</div>



<?php

$conn = new mysqli("localhost", "id20097600_root", );
// echo "my first script";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  };
  echo "Connected successfully";
$kolor=$_COOKIE['kolor'];
$nazwa=$_COOKIE['nazwa'];
$tekstu=$_COOKIE['tkst'];

echo $kolor;
echo $tekstu;


function trigger(){
  global $conn, $kolor, $nazwa, $tekstu;
  $val=$_COOKIE['val'];
  if($val){
    $result=mysqli_query($conn, "UPDATE page
    SET kolor = '$kolor', nazwa= '$nazwa',tekstu= '$tekstu'
    WHERE ID = '1'");
  }
}
  


   trigger();

?>
<script>
window.onload=function reset(){
  var one=0;
  document.cookie="val=" +one;

  // window.location.reload();

}

function sendbck(){
  var one=1;
  var kolor= document.getElementById("subject").value;

  
  document.cookie="val=" +one;
  document.cookie="kolor =" +kolor;
  window.location.reload();

}

function sendname(){
  var one=1;
  var nazwa= document.getElementById("nazwa").value;
document.cookie="val=" +one;
document.cookie="nazwa =" +nazwa;
window.location.reload();

}
function sendtkst(){
  var one=1;
    
  
  var tekstu= document.getElementById("tekst").value;
  
  // alert(nazwa)
  
  
  document.cookie="val=" +one;
  document.cookie="tkst=" +tekstu;

  // window.location.reload();
}

</script>

<script src="https://cdn.jsdelivr.net/gh/akjpro/form-anticlear/base.js"></script>
</body>
</html>