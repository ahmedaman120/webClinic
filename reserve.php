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
                  <li><a href="index.php#department"><i class="fa fa-bars" aria-hidden="true"></i> department</a></li>
                  <li><a href="Pharmacy.php">pharmacy</a></li>
                  <li><a href="#">reserve</a></li>
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
            <div id="reserve">
				<form method="post" action="reservevalidate.php">
					<input type="text" name="nameOFpatient" placeholder="name">
					
					<br>
					<input type="date" name="date" value="when you want come?">
					<br>
					
					<select name="department">
					<option>general</option>
					<option>heart</option>
					<option>Surgery</option>
					<option>Pediatics</option>
					</select>
					<br>
					<input type="submit" name="sub" value="Reserve" >
					
				</form>
				
			</div>
        </div>
		</div>
		
			<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jq.js"></script>
			</body>
</html>
   
	