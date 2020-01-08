<?php

	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'not connected';
	}
	if(!mysqli_select_db($con,'coffee'))
	{
		echo 'databse is not';
	}
	$Name = $_POST['name'];
	$Email = $_POST['gmail'];
	$Number = $_POST['phnnum'];
	$Quantity = $_POST['qnty'];
	$Coffee = $_POST['cfe_ty'];

	$sql = "INSERT INTO pickup(Name,Gmail,PhnNO,Qnty,TyCfe) VALUES ('$Name','$Email','$Number','$Quantity','$Coffee')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'not inserted';
	}
	else
	{
		echo'ORDER IS PLACED !!! AND IS GETTING READY !!!';
	}
	
	header("refresh:4; url=cards.html");
?>