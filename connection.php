<?php
	$conn=new mysqli("localhost","root","","clinc");
	if($conn->connect_error){
		die($conn->connect_error);
	}
?>