<?php

try{
	
	$db=new PDO("mysql:host=localhost;dbname=users;charset=utf8", 'root', '');
}
catch(PDOException $e){
	
	echo $e->getMessage();
	}




	
	
	
	
	$save= $db->prepare("INSERT INTO users SET
	id=:id,	
	username=:username,
	first_name=:first_name,
	last_name=:last_name,
	email=:email,
	password=:password,
	phone_number=:phone_number,
	adress=:adress,
	birth=:birth");
	
	$insert= $save->execute(array(
	'id' =>  $_POST["id"],
	'username' =>  $_POST["username"],
	'first_name' => $_POST["fname"],
	'last_name' => $_POST["lname"],
	'email' => $_POST["email"],
	'password' => $_POST["password"],
	'phone_number' => $_POST["phone_number"],
	'adress' =>  $_POST["adress"],
	'birth' =>  $_POST["birth"]
	 ));
	
	if($insert) {
		
		Header("Location:login.html");
	}
	else{
		Header("Location:signup.html");
		}



?>