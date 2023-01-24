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

  <meta charset="utf-8">
<title>CMS Admin</title>
<style media="all" type="text/css">
  
  @import "objek.css";
  
  
  </style>

<style media="all" type="text/css">
  
  @import "css/allr.css";
  
  
  </style>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
</head>
<body>
<div id="main">
  <div id="header"> <a href="http://all-free-download.com/free-website-templates/" class="logo"><img src="img/logo.png" style="float:right; width:10%; height:75%; margin:10px;" alt="" /></a>
    <ul id="top-navigation">
      <li ><span><span><a href="index.php">Posty</a></span></span></li>
      <li  ><span><span><a href="uzytkownicy.php">Uzytkownicy</a></span></span></li>
      <li class="active" ><span><span><a href="biblioteka.html">Biblioteka</a></span></span></li>
      <li><span><span><a href="wyglad.php">Wygląd</a></span></span></li>
      
    </ul>
  </div>
  
  <div id="middle">
  <div id="art" >
  <p id="rem">Pamiętaj aby wybrać obrazek o kwadratowych proporcjach i małym rozmiarze.</p>

   
  
    <form action="upload.php" method="post" enctype="multipart/form-data">
       
        <input id="butone" type="file" name="file" id="fileToUpload"></br>
        <input id="bu" type="submit" value="Upload Image" name="submit">
      </form>
      <p> Możesz pobrać obrazy tylko do wielkość 4MB i formatach .jpg i .png.</p>

    
 





</div>
    <div id="left-column">
      <h3>Biblioteka plików</h3>
      <ul class="nav">
        <?php
        $dbhost = 'localhost';
        $dbname='id20097600_prod';
        $dbuser = 'id20097600_root';
        
        //For displaying articles in left menu.
        $db3 = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
  
        $query3 = "SELECT file_name, id FROM images ";
        $results3 = $db3->query($query3);
        foreach ($results3 as $row3) {
    $title3 = $row3['file_name'];
    
    
    $ID3 = $row3['id'];
    
    // $body = $row['body'];
    
    echo "<li id='$ID3' onClick='reply_click(this.id)'><a>" . $title3 . "</a></li>";
  
        }
    ?>
        
      </ul>

     
<?php
// Include the database configuration file
$id=$_COOKIE['clicked_id'];
// echo $id;
$conn = new mysqli("localhost", "id20097600_root", );
// Get images from the database
$query =  mysqli_query($conn,"SELECT * FROM images where id='$id'");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
        
    }
  }
    if (isset($imageURL)){
      echo '<img style="width:200px;height:200px;" src="' . $imageURL . '">';
        
    }
    ?>
    
    <button id="de">Delete image</button>
  
 <script>
document.getElementById("de").addEventListener("click", delet);
  function delet(){
    var imagetid="<?php echo $id;?>";
    console.log(imagetid)
   

    $.ajax({
url: 'delete_img.php',
type: 'POST',
data: {
  idimg: imagetid

},
success: function(response){
  
}

  })
  
 
}


  

function reply_click(clicked_id){
  document.cookie="clicked_id =" +clicked_id;
  
 
  window.location.reload();
}
      </script>

      
 <a href="landing.html" class="link">Przejdź do Template</a> 
 
 <form name="form" id="logout" action="logout.php" method="post" >
  
  <input type="submit" id="buto" value="Wyloguj" >

</div>
</form>
<?php
        $dbhost = 'localhost';
        $dbname='id20097600_prod';
        $dbuser = 'id20097600_root';
        
        //For displaying articles in left menu.
        $db2 = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
  
        $query2 = "SELECT file_name, id FROM images ";
        $results2 = $db2->query($query2);
       
    
    
    
        
    // $body = $row['body'];
    echo "<div id='container' >";
    echo "<div  id='one'>";
    echo "<h1 id='e1'> Wybierz obraz dla pola 1 </h1 id='e1'>";
    echo "<select name='obraz' id='obraz'>";
    foreach ($results2 as $row) {

      $title2 = $row['file_name'];

      $ID2 = $row['id'];
    // echo "<li value='$ID2' onClick='reply_click(this.id)'><a>" . $title2 . "</a></li>";
    echo '<option value="' . $ID2 . '" ><a>' . $title2 . '</a></option>';
    // echo "<option value=' .$ID2' onClick='reply2_click(this.id)'><a>" . $title2 . "</a></option>";
    }
    echo "</select>";
    echo "</div>";

    $db22 = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    $query22 = "SELECT file_name, id FROM images ";
    $results22 = $db22->query($query22);
   



    
// $body = $row['body'];
echo "<div  id='ones'>";
echo "<h1 id='e1'> Wybierz obraz dla pola 2 </h1 id='e1'>";
echo "<select  id='obrazek'>";
foreach ($results22 as $row2) {

  $title22 = $row2['file_name'];

  $ID22 = $row2['id'];
// echo "<li value='$ID2' onClick='reply_click(this.id)'><a>" . $title2 . "</a></li>";
echo '<option value="' . $ID22 . '" ><a>' . $title22 . '</a></option>';
// echo "<option value=' .$ID2' onClick='reply2_click(this.id)'><a>" . $title2 . "</a></option>";
}
echo "</select>";
echo "</div>";
echo "</div>";

    
        
    ?>


        <p>&nbsp;</p>
      </div>
    

    
   
    
  
  
</div>
<script>
   // get the select element
   var select = document.getElementById("obraz");

// add an event listener for the change event
select.addEventListener("change", optionSelected);




   function optionSelected() {
    // get the selected option
    var selectedOption = document.getElementById("obraz").value;

    // check the value of the selected option
    
      // code to be executed when option 2 is selected
      console.log(selectedOption);
      //Here u need ajax to send id1.
      document.cookie="id1=" +selectedOption;
      var id="rest";
      
      
   }




var select2 = document.getElementById("obrazek");

// add an event listener for the change event
select2.addEventListener("change", sec);

   function sec() {
    // get the selected option
    var selectedOption2 = document.getElementById("obrazek").value;

    // check the value of the selected option
    alert("box")
      // code to be executed when option 2 is selected
      console.log(selectedOption2);
      //Here u need ajax to send id1.

      // var id="rest";
      document.cookie="ids=" +selectedOption2;
   }

  



</script>
</html>
