<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: logowanie.php');
	exit;
}else{echo"hello";}
?>