<?php
// include 'dbConfig.php';

$conn = new mysqli("localhost", "id20097600_root");

    $currentDirectory = getcwd();
    $uploadDirectory = "/uploads/";

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ['jpeg','jpg','png']; // These will be the only file extensions allowed 

    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileTmpName  = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName); 
    echo $uploadPath;
    if (isset($_POST['submit'])) {

      if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
      }

      if ($fileSize > 4000000) {
        $errors[] = "File exceeds maximum size (4MB)";
      }

      if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
          echo "The file " . basename($fileName) . " has been uploaded";
        } else {
          echo "An error occurred. Please contact the administrator.";
        }
      } else {
        foreach ($errors as $error) {
          echo $error . "These are the errors" . "\n";
        }
      }

    }
   
    $insert = mysqli_query($conn,"INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
    

    
$script = "<script>
window.location = 'biblioteka.php';</script>";
echo $script;
?>
    exit();
?>