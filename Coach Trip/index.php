<?php
include "connect.php";


session_start();

$servername = "localhost";
$username = "root";
$password = "";
$users = "users";


$conn = new mysqli($servername, $username, $password, $users);
$new = mysqli_set_charset($conn, "utf8");


if($conn->connect_error){
	die("Connection failed: " .$conn->connect_error);
	}
	
	if($_POST){
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		
		$giris = "select * from users where username='$username' and password= '$password'";
		$getir = $conn->query($giris);
		if($getir->num_rows>0){
			while($row = $getir->fetch_assoc()) {
				$_SESSION["ID"] = $row["id"];
				header("location:index.html");
				}
		 
		}else header("location:login.html");
	}
?>

