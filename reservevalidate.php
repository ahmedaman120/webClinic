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
            <?php
				require 'connection.php';
				$dep=array(1,2,3,4);
				//num of floors
			$time=date('H:i');

					if(isset($_POST["nameOFpatient"])){
						if($_POST["department"]=="general")$i=0;
						else if($_POST["department"]=="heart")$i=1;
						else if($_POST["department"]=="Surgery")$i=2;
						else if($_POST["department"]=="Pediatics")$i=3;
					$nameOfPatient=$_POST["nameOFpatient"];
					$date=$_POST["date"];
					$depart=$_POST["department"];
			
					$nameEs=mysqli_real_escape_string($conn,$nameOfPatient);
			$dateEs=mysqli_real_escape_string($conn, $date);
			$departEs=mysqli_real_escape_string($conn, $depart);
					$sql="INSERT INTO reservetion VALUES('$nameEs','$dateEs','$departEs')";
					$result=$conn->query($sql);
					if($conn->affected_rows > 0){
						$dateR=date("Y/m/d");
						echo "<div id='card' style='width: 50%;
    font-size: 22px;
    margin: 147px auto;
    padding: 19px;
    border: 1px solid;
    box-sizing: border-box;
    border-radius: 15px 60px;
    font-style: italic;'>
							<p>Mr or Miss :$nameOfPatient</p>
							<p>Date of reserve:$dateR</p>
							<p>
							<p>you can come in :$date at $time </p>
							<p>addres:fammily clinc floor $dep[$i]
							</div>
						";
											
				}
				}
			
			?>
        </div>
		</div>
		
			<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jq.js"></script>
			</body>
</html>
   
	