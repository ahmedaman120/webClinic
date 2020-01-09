<?php
	session_start();
$username="";
	if(isset($_SESSION["name"])){
		$username=$_SESSION["name"];
	}else 
		header("Location:index.php");
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.css">
		<meta charset="utf-8"/>
	</head>
	<body>
		<div id="loginform">
		   <i class="fa fa-times" aria-hidden="true"></i>  
      <form>
            <input name="username" type="text" placeholder="username"><br>
            <input name="password" type="password" placeholder="password"><br>
            <input name="submit" type="submit" id="ss" >
        </form><!--
		   <div id="hello">
		   	<h2>hi our patient</h2>
			   <p>we hope you are better than with us </p>
		   </div>
-->
		   
      </div>
		
		<!--header-->
		<div id="header">
        <div id="overlay">
            <div id="nav">
              <div class="container" >
                <ul>
                  <li><a href="index.php#department"><i class="fa fa-bars" aria-hidden="true"></i> department</a></li>
                  <li><a href="Pharmacy.php">pharmacy</a></li>
                  <li><a href="reserve.php">reserve</a></li>
                  <li><a href="reges.php">register</a></li>
                  <li id="loginf"><a href="#">login</a></li>
                </ul>
              </div>
              <div id="search">
                <form action="">
                  <input type="search" name="" value="" placeholder="Search">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </form>
              </div>
				<a href="index.php"><img src="image/logo.png" alt=""></a>
			</div>
			</div>
		</div>
		<div id="contentAcc">
			<div id="identity">
				<div id="card">
					<img src="image/doctorStaff/babyDoctor.jpg">
					<p><span>Name: </span><?php echo $username ?></p>
					<p><span>ID: </span>1563kS10</p>
					<p><span>Doctor: </span>babies doctor</p>
					<p> <a href="account.php?logout">logout</a></p>
					
				</div>
				<div id="emailSend">
					<form method = "POST" enctype = "multipart/form-data" action="account.php">
					<label for="to">To:</label>	<input id="to" type="text" name="to"><br>
					<label for="from">From:</label>	<input id="from" type="text" name="from"><br>
						
					<label for="pdf">chose pdf file:</label>	<input type="file" name="Prescription">
						<br>
						<label for="mess">Subject:</label><br>
					<textarea name="message" ></textarea>
						<input type="submit" value="SEND">
					</form>
							
					<?php
					require 'connection.php';
					if(isset($_POST['to'])){
						$to=$_POST['to'];
						$from=$_POST['from'];
						$message=$_POST['message'];
						
						$file_name = $_FILES["Prescription"]["name"];
						$file_size = $_FILES["Prescription"]["size"];
						$file_type = $_FILES["Prescription"]["type"];
						$tmp_name = $_FILES["Prescription"]["tmp_name"];

						

						if(!empty($file_name) && $file_size < 2000000 && $file_type=="application/pdf"){
							move_uploaded_file($tmp_name, "Uploads/$file_name");
							$sql="INSERT INTO messages VALUES('$to','$from','$message','$file_name')";
				
						$conn->query($sql);
							
						}
						else 
							echo "put pdf";
						
					}
					?>
				</div>
			</div>
			<div id="messages">
				<table>
					<thead>
						<tr>
						<th>name</th><th>message</th><th>file</th>
						</tr>
					</thead>
					<tbody>
							
						<?php
							require 'connection.php';
							$sql="SELECT * FROM `messages` WHERE `to` LIKE '%$username%' ORDER BY `to` DESC";
							$result = $conn->query($sql);
							if($result->num_rows>0){
								  while($row = $result->fetch_assoc()) {
									  echo "
									  <tr>
									  	<td>".$row["from"]."</td> 
										<td>".$row["message"]."</td>
										<td>
										<a href=Uploads/".$row["file"]." download>".$row["file"]."</a>
										</td>
										
									  </tr>"
									  ;
								  }
       
							}
							
						?>
					</tbody>
				</table>
			</div>
		</div>
<?php
						if (isset($_GET["logout"])) {
							
							session_destroy();
							header("Loocation:index.php");
									die();
						}
					?>
		<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jq.js"></script>
	</body>
</html>

