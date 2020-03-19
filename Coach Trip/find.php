<?php


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
		$pick_up = $_POST["pick_up"];
		$drop_off = $_POST["drop_off"];
		$date = $_POST["date"];
		
		
		
		$giris = "SELECT * FROM offer WHERE pick_up='$pick_up' and drop_off= '$drop_off' and date= '$date' ";
		$getir = $conn->query($giris);
	}
		if (!empty($getir) && $getir->num_rows > 0){
				
				while($cekilen_veri = mysqli_fetch_array($getir)){
extract($cekilen_veri);

echo "------------------------ </br>";
echo "Pick up: ".$pick_up."</br>";
echo "Drop off: ".$drop_off."</br>";
echo "Date: ".$date."</br>";
echo "Price: ".$price."</br>";
echo "Time: ".$time."</br>";
echo "İnformation: ".$info."</br>";

}
		 
		}else{
			
error_reporting(E_ALL);
ini_set("display_errors", 1);
		}
?>