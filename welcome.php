<?php
session_start();
require_once "Dao.php";

	if(!isset($_SESSION['username'])) {
		header("Location:login.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
	<head>
	<link rel="shortcut icon" href="gplogo.png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <script src="js/main.js"></script>
	
	<link rel="stylesheet" type="text/css" href="gpweddinginfo.css">
	</head>
	<body id="example1">
		<img src="gplogo.png" style="width:100px;height:100px;">
		<ul class="social-icons">
		<li><a target="_blank" href="https://www.facebook.com/profile.php?id=100005857483610"><img src='Social Media Icons/PNG/Circle Color/Facebook.png' /></a></li>
		<li><a target="_blank" href="https://www.pinterest.com/Paulinavianey/"><img src='Social Media Icons/PNG/Circle Color/Pinterest.png' /></a></li>
		<li><a target="_blank" href="https://www.youtube.com/user/PaulineyLove22"><img src='Social Media Icons/PNG/Circle Color/YouTube.png' /></a></li>
		</ul>
		<h1><center><img src="images/gerardoandpaulinegetmarried.png" style="width:500px;height:150px;"></center></h1>
		<h2><center><center></h2>
			
			<div class="wedding-nav">
				
				<nav>
				<li class="wedding topics">
				<a href="welcome.php">WELCOME</a>
				</li>
				
				<li class="wedding topics">
				<a href="logout.php">LOG OUT</a>
				</li>
				</nav>
			</div>
			<div>
			
				<p class = "welcomeuser" style="color:black;">Welcome <?php echo $_SESSION['username']?> !</p>
				<div class="container">
					<div class="slider-outer">
						<img src="images/arrow-left.png" class="prev" alt="Prev">
					<div class="slider-inner">
						<img src="images/image1.jpg" class="active">
						<img src="images/image2.jpg">
						<img src="images/image3.jpg">
						<img src="images/image4.jpg">
					</div>
						<img src="images/arrow-right.png" class="next" alt="Next">
					</div>
				</div>
			</div>
			<div class="footer">
				<p>@2019 Gerardo Flores</p>
				
			</div>
	</body>
</html>
