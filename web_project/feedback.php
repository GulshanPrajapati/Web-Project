<?php
	
	try{
	$pdo=new pdo('mysql:host=localhost;dbname=u559980428_raslav','u559980428_admin','Raslav.11');
	session_start();
	$user_email=$_POST['user_email'];
	$user_feedback=$_POST['user_feedback'];
	
	$insert=$pdo->prepare("insert into feedback_info(user_email,user_feedback)values(:user_email,:user_feedback)");

	$insert->bindparam(':user_email',$user_email);
	$insert->bindparam(':user_feedback',$user_feedback);
	
	$insert->execute();
	
	}
	catch(PDOException $f){
		echo$f->getmessage();
	}
	
	header('location:index.html');
?>
