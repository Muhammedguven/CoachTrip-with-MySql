<?php

include "connoffer.php";




	
	
	$offer= $db->prepare("INSERT INTO offer SET
	pick_up=:pick_up,	
	drop_off=:drop_off,
	date=:date,
	price=:price,
	time=:time,
	info=:info
	");
	
	$insert= $offer->execute(array(
	'pick_up' =>  $_POST["pick_up"],
	'drop_off' =>  $_POST["drop_off"],
	'date' => $_POST["date"],
	'price' => $_POST["price"],
	'time' => $_POST["time"],
	'info' => $_POST["info"]
	
	
	 ));
	
	if($insert) {
		
		Header("Location:index.html");
	}
	else{
			
error_reporting(E_ALL);
ini_set("display_errors", 1);
		}



?>