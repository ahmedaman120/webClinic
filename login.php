<?php
	require 'connection.php';
	$name = $_POST["username"];
	$pass = md5($_POST["password"]);
	$escaped_name = mysqli_real_escape_string($conn, $name);
	$sql = "Select * from registertion where username = '$escaped_name' AND password = '$pass';";
  $result = $conn->query($sql);
	if($result->num_rows ==1){
      
  	  open_new_session($name);
		
      header("Location:account.php");
  }
  else{
	  header("Location:index.php");
  	
  }
function open_new_session($name){
  session_start();
  $_SESSION["name"] = $name;
  $_SESSION["time"] = time();
}  
?>