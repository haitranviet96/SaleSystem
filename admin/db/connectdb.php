<?php
	$conn = mysqli_connect('localhost','root','','banhang2');
	if (!$conn){
		phpAlert("Can't connect to database server!");
	} 
	mysqli_query($conn,"SET character_set_results=utf8");
	mysqli_query($conn,"set names 'utf8'");
	mb_language('uni');
	mb_internal_encoding('UTF-8');
?>

