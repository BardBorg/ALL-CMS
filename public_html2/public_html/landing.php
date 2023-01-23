<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gray Blog Template, free CSS template</title>
<meta name="keywords" content="free website template, CSS templates, Gray Blog Template, HTML CSS" />
<meta name="description" content="Gray Blog Website - Free CSS Template, Free HTML CSS Layout" />
<style> @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap'); </style>
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- Free CSS Template | Designed by TemplateMo.com -->


</head>
<?php error_reporting(0); ?>
<body >

	<div id="templatemo_background_section_top">
    
    	<div class="templatemo_container">
		
        	<div id="templatemo_header">
            <?php

$dbhost = 'localhost';
$dbname='id20097600_prod';
$dbuser = 'id20097600_root';
$dbpass = 'uV1PVi/)dRNnx&4*';
            $db = new PDO('mysql:host=localhost;dbname=id20097600_prod', $dbuser, $dbpass);
          $query = "SELECT * FROM page ";
$results = $db->query($query);

// Loop through the results and generate the HTML for each article
foreach ($results as $row) {
  $nazwa = $row['nazwa'];
  
  

  
  echo "<h1 class='tytul' >" . $nazwa . "</h1>";
  
 
  
  
  
  echo "</div>";
  
}
?>
				           
         	</div>
                
    		<div id="templatemo_menu_panel">
            
    			<div id="templatemo_menu_section">
                
            		<ul>
		                <li><a href="index.html"  class="current">Home</a></li>
        		        <li style="width:100%;"><a href="https://alcms.000webhostapp.com/index.php">Panel Admin</a></li>
		                
		                                  
		            </ul> 
                    
				</div>
                
		    </div> <!-- end of menu -->
            
		</div><!-- end of container-->
        
	</div><!-- end of templatemo_background_section_top-->
    
    <div id="templatemo_background_section_middle">
    
    	<div class="templatemo_container">
        
        	<div id="templatemo_left_section">
            	
                <div class="templatemo_post" id="tid">

                <?php
$dbhost = 'localhost';
$dbname='id20097600_prod';

$db = new PDO('mysql:host=localhost;dbname=id20097600_prod', $dbuser, $dbpass);


$query = "SELECT * FROM posty ";
$results = $db->query($query);

// Loop through the results and generate the HTML for each article
foreach ($results as $row) {
  $title = $row['Tytul'];
  $tresc = $row['Tresc'];
  // $body = $row['body'];

  echo "<div class='article' style='background-color:white;'>";
  echo "<h1 class='templatemo_post_top' '>" . $title . "</h1>";
  echo "<p class='templatemo_post_mid'>" . $tresc . "</p>";
  
  echo "</div>";
}
?>
                
                </a></span> -->
                        <span class="post">Date:  20 September 2048</span>                    </div>
                    
			  </div><!-- end of templatemo_post-->
                
                <!-- end of templatemo_post -->
                
            </div><!-- end of left section-->
            
            <div id="templatemo_right_section">
            	
                <div class="templatemo_section_box">
                	<div class="templatemo_section_box_top_yellow">
                    	Advertisements <a id="edi1"href="biblioteka.php">EDIT</a>
                    </div>
					<div class="templatemo_section_box_mid">
                   		
						
            <?php
// if ((isset($id1)) and (isset($id2))){
 $id1=$_COOKIE['id1'];
           $id2=$_COOKIE['ids'];




          
           
        

          $conn = new mysqli("localhost", "id20097600_root");
// Get images from the database

$query =  mysqli_query($conn,"SELECT * FROM images where id='$id1'");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
        // echo $imageURL;
    }
  }
if (isset($imageURL)){
  echo '<img style="width:230px;height:230px;" src="' . $imageURL . '">';
    
}
    
    


    $query =  mysqli_query($conn,"SELECT * FROM images where id='$id2'");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL2 = 'uploads/'.$row["file_name"];
        // echo $imageURL;
    }
}

    
if (isset($imageURL)){
  echo '<img style="width:230px;height:230px;" src="' . $imageURL2 . '">';
    // <img style="width:230px;height:230px;" src=" $imageURL; 
}

    
    ?>


                                       	 -->
                        
                        <div class="clear">&nbsp;</div>
					</div>
                    <div class="templatemo_section_box_bottom"></div>
                </div><!-- end of section box -->
                            
               
                
                <div class="templatemo_section_box">
                	<div class="templatemo_section_box_top_yellow">
                    	About This Blog
                    </div>
					<!--  -->
                </div><!-- end of section box -->
            </div>
        </div><!-- end of container-->
	</div>
    <!-- end of background middle-->
	<div id="templatemo_bottom_section">
    	<div class="templatemo_container">
        	<div id="templatemo_footer">
            	Copyright © 2048 Your Company Name | <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
            </div>
        </div>
    </div><!-- end of background bottom-->

<!-- <div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body> -->
  
  <?php
$conn = new mysqli("localhost", "id20097600_root", "uV1PVi/)dRNnx&4*","id20097600_prod");
// echo "my first script";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  };
//   echo "Connected successfully";

// $result=mysqli_query($conn, "insert into posty (Tytul, Tresc) values('$tytul', '$tresc')");
$query = "SELECT kolor FROM page WHERE ID='1'";
$res = mysqli_query($conn, $query);

$color = mysqli_fetch_assoc($res)['kolor'];
  // if(isset($_REQUEST["fav"]) and !empty($_REQUEST["fav"])){
//   echo $color;
    $kolor="#a9a9bc";

    $query2 = "SELECT tekstu FROM page WHERE ID='1'";
$coltekst = mysqli_query($conn, $query2);

$kolortekstu = mysqli_fetch_assoc($coltekst)['tekstu'];


  
echo "<style>
  #templatemo_background_section_middle{
    background: $color;
  }
</style>";
echo "<style>
  .article{
    color: $kolortekstu;
  }
</style>";

  ?>

  
  


  
  
  
  

  
  <script>



function main(){
    
    document.getElementById("tytul").innerHTML=tytul;
    console.log(tytul)
}
var acounts =[];
function compute(){
//   alert("alert");
  var example="example";
  
  for (var i=0; i<3; i++){
    acounts[i]=i+1;
  }
  
}
window.onload=compute;

function create(){
  var data = "<?php echo $Content; ?>";
  var Tytul="Lorem pierwszy"
  var ar2="Lorem drugi"
  var ar3="Lorem trzeci"
  var num=3;
  var mNewObj = new Array();
  var mNewObj2 = new Array();
  for (var i=0; i<num; i++){
    mNewObj[i] = document.createElement('div');
mNewObj[i].style.visibility="show";
mNewObj[i].innerHTML = data;
mNewObj[i].classList.add("templatemo_post_top");


mNewObj2[i] = document.createElement('div');


mNewObj2[i].style.visibility="show";
mNewObj2[i].innerHTML = acounts[0];
mNewObj2[i].classList.add("templatemo_post_mid");
document.getElementById("templatemo_left_section").appendChild(mNewObj[i]);
document.getElementById("templatemo_left_section").appendChild(mNewObj2[i]);

  }
 
}






  </script>




</html>