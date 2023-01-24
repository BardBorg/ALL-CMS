<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: logowanie.php');
	exit;
}else{echo" ";}
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
<!-- <link rel="stylesheet" href="new.css"> -->
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<style media="all" type="text/css">
  
@import "css/allr.css";


</style>
<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
</head>
<body  >
<div id="main">
  <div id="header"> <a href="http://all-free-download.com/free-website-templates/" class="logo"><img src="img/logo.png" style="float:right; width:10%; height:75%; margin:10px;" alt="" /></a>
    <ul id="top-navigation">
      <li class="active"><span><span>Posty</span></span></li>
      <li ><span><span><a href="uzytkownicy.php">Uzytkownicy</a></span></span></li>
      <li><span><span><a href="biblioteka.php">Biblioteka</a></span></span></li>
      <li><span><span><a href="wyglad.php">Wygląd</a></span></span></li>
      
    </ul>
  </div>
  <div id="middle">
  <div id="right-column"> <strong class="h">INFO</strong>
<div class="box">Pamiętaj o odpowiedniej polityce bezpieczeństwa-Stosuj mocne hasła i bądź ostrożny. </div>





</div>
    <div id="left-column">
      <h3>Posty</h3>
      <ul class="nav" id="myList">

      <?php
       $dbhost = 'localhost';
       $dbname='id20097600_prod';
       $dbuser = 'id20097600_root';
       $dbpass = 
      //For displaying articles in left menu.
      $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
      

      $query = "SELECT ID, Tytul, Tresc FROM posty ";
      $results = $db->query($query);
      foreach ($results as $row) {
  $title = $row['Tytul'];
  
  
  $ID = $row['ID'];
  $tresc = $row['Tresc'];
  // $body = $row['body'];
  
  echo "<li id='$ID' onClick='reply_click(this.id)'><a>" . $title . "</a></li>";

      }
  ?>
  <script>
    var idy;
      function reply_click(clicked_id)
  {
    document.cookie="clicked_id =" +clicked_id;
      alert(clicked_id);

      window.location.reload();
      window.idy=clicked_id;
      console.log(window.idy)
      // del(idy);

      
  }

   </script>
        
      </ul>
       <!-- <button id="new">Add new post</button> -->
 <a href="landing.html" class="link">Przejdź do Template</a> 
 <button id="delo">Delete post</button>
 <form name="form" id="logout" action="logout.php" method="post" >
  
  
  <input id="delo" type="submit" id="logout" value="Wyloguj" >
</form>
</div>


 <div id="art">
 <form name="form" id="myForm" method="post" >
  
  <label for="tytul">Wpisz tytul</label> <br><br>
    <input type="text" id="tytul" name="tytul" class="put" ><br><br>
    <label for="content" style="float:left;">Wpisz tresc</label><br><br>
    <textarea name="Text1" id="content" cols="80" rows="15" class="put"></textarea><br>
  
  </form>
<button id="buto">Dodaj</button>
</div>
        <p>&nbsp;</p>
      </div>
    </div>

    
   
  
  
</div>




  
  
  <?php

$conn = new mysqli("localhost", "id20097600_root", "","");
// echo "my first script";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  };
  



//To jest tylko do pokazywania artykulu na stronie.
$tytul=$_COOKIE['tytul'];
$tresc=$_COOKIE['tresc'];
echo $tytul;
echo $tresc;
$id=$_COOKIE['clicked_id'];
echo $id;
$conn = new mysqli("localhost", "id20097600_root", "","");
// echo "my first script";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  };
  
$query2 =mysqli_query($conn,"SELECT Tytul, Tresc FROM posty Where ID='$id'");

$t1="zero";
$t2="beta";

while($row = $query2->fetch_assoc()) {
  
  
  $t1= $row['Tytul'];
  
  $t2= $row['Tresc'];
}











?>

<script type="text/javascript">  

document.getElementById("delo").addEventListener("click", del);

function del(){
  var postid="<?php echo $id;?>";

  $.ajax({
url: 'delete.php',
type: 'POST',
data: {
  id: postid

},
success: function(response){
  
  window.location.reload();
}

  })
  window.location.reload();
  console.log(postid)
}  




  

 
  



window.onload=function ustaw(){
    var title="<?php echo $t1;?>";
    var content="<?php echo $t2;?>";
    document.getElementById("tytul").value = title;
    document.getElementById("content").value = content;
    
    
    
    
    var nr="<?php echo $id;?>";
    var high=document.getElementById(nr)
      high.style.fontWeight="bold"
      
  }

  
  document.getElementById("buto").addEventListener("click", send_to_php);
function send_to_php(){
    
  var one=1;
  // console.log(tst);
  var tytul= document.getElementById("tytul").value;
  var tresc= document.getElementById("content").value;

  
  $.ajax({
url: 'insert_into_DB.php',
type: 'POST',
data: {
  tytul: tytul,
  tresc: tresc

},
success: function(response){
 
  window.location.reload();
}

  })
  
}
  
 

  
  

 
</script>



 

  

  
  


 


  
 



</body>
</html>

