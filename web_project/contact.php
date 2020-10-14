<?php
	
	try{
	$pdo=new pdo('mysql:host=localhost;dbname=u559980428_raslav','u559980428_admin','Raslav.11');
	session_start();
	$full_name=$_POST['full_name'];
	$user_mobile=$_POST['user_mobile'];
	$user_email=$_POST['user_email'];
	$user_address=$_POST['user_address'];
	
	$insert=$pdo->prepare("insert into contact_info(full_name,user_mobile,user_email,user_address)values(:full_name,:user_mobile,:user_email,:user_address)");

	$insert->bindparam(':full_name',$full_name);
	$insert->bindparam(':user_mobile',$user_mobile);
	$insert->bindparam(':user_email',$user_email);
	$insert->bindparam(':user_address',$user_address);
	
	$insert->execute();
	
	}
	catch(PDOException $f){
		echo$f->getmessage();
	}
	
	header('location:contact.html');
?>
