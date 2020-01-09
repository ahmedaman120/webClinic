<!doctype html>
<html>
	<head>
    <meta charset="utf-8">
    <title>FamilyClinc</title>
    <link rel="stylesheet" href="css/regs.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Asap+Condensed" rel="stylesheet">
	<link rel="shortcut icon" href="image/png/002-ambulance.png">
  </head>
	<body>
		<div id="loginform">
		   <i class="fa fa-times" aria-hidden="true"></i>  
       <form action="login.php" method="post">
            <input name="username" type="text" placeholder="username"><br>
            <input name="password" type="password" placeholder="password"><br>
            <input name="submit" type="submit" id="ss" >
        </form>
		   
      </div>
		<div id="header">
        <div id="overlay">
            <div id="nav">
              <div class="container" >
                <ul>
                  <li><a href="index.html#department"><i class="fa fa-bars" aria-hidden="true"></i> department</a></li>
                  <li><a href="Pharmacy.php">pharmacy</a></li>
                  <li><a href="reserve.php">reserve</a></li>
                  <li><a href="reges.php">register</a></li>
                  <li id="loginf"><a href="#">login</a></li>
                </ul>
              </div>
              <div id="search">
                <form action="" >
                  <input type="search" name="" value="" placeholder="Search">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </form>
              </div>
              <a href="index.php"><img src="image/logo.png" alt=""></a>
            </div>
            <div id="regest">
			<form name="regest" method="post">
			<h3>	<label for="user">user name:</label></h3>
				<input class="box" id="user" name="username1" type="text" placeholder="user name"><br>
				<h3><label for="ema">e-mail:</label></h3>
				<input class="box" id="ema" name="email" type="email" placeholder="email"><br>
				<h3><label for="pass">Password:</label></h3>
				<input class="box" id="pass" name="password1" type="password" placeholder="password"><br>
				<br>
				<h3><label for="confpass">Confirm Password:</label></h3>
				<input class="box" id="confpass" name="confpassword" type="password" placeholder="repeat password"><br>
				<select name="count">
					<option value="egypt">egypt</option>
					<option value="moraco">moraco</option>
					<option value="saudiarbia">saudi arbia</option>
					<option value="USA">U.S.A</option>
					<option value="canda">canda</option>
					<option value="espian">espian</option>
				</select><br>
				<input  name="sex" type="radio" id="mail" value="mail"><label class="radio" for="male">male</label>
				<input  name="sex" type="radio" id="female"><label class="radio" for="female" value="femail">female</label>
				<input type="submit" name="sub" value="SIGN UP" >

				</form>
				<?php
					require 'connection.php';
				if(isset($_POST["username1"])){
					$name=$_POST["username1"];
					$email=$_POST["email"];
					$pass=md5($_POST["password1"]);
					$passconf=md5($_POST["confpassword"]);
					$count=$_POST["count"];
					$sex=$_POST["sex"];
		if($pass==$passconf){
					$query="INSERT INTO registertion VALUES('$name','$email','$pass','$passconf','$count','$sex');";
				 	$result=$conn->query($query);
					
					}
					
						
				}
				?>
			</div>
        </div>
		</div>
			<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jq.js"></script>
			</body>
</html>
   
	