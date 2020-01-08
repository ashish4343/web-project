<?php

	$con = mysqli_connect('localhost','root','');
	
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
	$Address = $_POST['address'];
	$Coffee = $_POST['cfe_ty'];
	$Quantity = $_POST['qnty'];

	$sql = "INSERT INTO oorder(Name,Gmail,PhnNO,Address,Qnty,TyCfe) VALUES ('$Name','$Email','$Number','$Address','$Quantity','$Coffee')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'not inserted';
	}
	
	else
	{
		echo'ORDER PLACED !!! WILL BE DELIVERED SOON!!!';
	}
	
	header("refresh:4; url=cards.html");
?>