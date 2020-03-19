<?php

include "connoffer.php";
	
	$delet= $db->prepare("DELETE FROM offer WHERE
	info=:info
	");
	
	$islem= $delet->execute(array(
	'info' => $_POST["info"]
	));
	
	if($islem) {
		
		Header("Location:index.html");
	}
	else{
			
error_reporting(E_ALL);
ini_set("display_errors", 1);
		}



?>


















