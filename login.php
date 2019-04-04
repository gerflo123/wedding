<?php
session_start();
//$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
//unset($_SESSION['message']);
?>


<!DOCTYPE html>
<html>
	<head>
	<link rel="shortcut icon" href="gplogo.png" />
	<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body id="example1" >
		<img src="gplogo.png" style="width:100px;height:100px;">
		<ul class="social-icons">
		<li><a href="http://www.facebook.com"><img src='Social Media Icons/PNG/Circle Color/Facebook.png' /></a></li>
		<li><a href="http://www.pinterest.com"><img src='Social Media Icons/PNG/Circle Color/Pinterest.png' /></a></li>
		<li><a href="http://www.youtube.com"><img src='Social Media Icons/PNG/Circle Color/YouTube.png' /></a></li>
		</ul>
		<h1><center>Gerardo and Pauline</center></h1>
		<h2><center>Get married<center></h2>
		
			
			<div class="wedding-nav">
				
				<nav>
				<li class="wedding topics">
				<a href="gpwedding.html">BIO</a>
				</li>
				<li class="wedding topics">
				<a href="gpweddinginfo.html">WEDDING</a>
				</li>
				
				<li class="wedding topics">
				<a href="login.php">LOG IN</a>
				</li>
				</nav>
			</div>
			
			
			<div>
			
			<!-- <button class="createandlogin" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Create Account</button> -->
				<!--<div id="id01" class="modal"> -->			


 <?php if(!empty($message)) { ?>
<div class='message'><?php echo $message; ?></div>
<?php } ?>					
				<form class="modal-content animate" method="post" action="createuser_handler.php">
				
					<div class="container">
									

						<label for= "fullname"> <b>Full Name</b> </label>
						<input value="<?php echo isset($_SESSION['form_input']['fullname']) ? $_SESSION['form_input']['fullname'] : ''; ?>"type= "text" placeholder= "Full Name"  id= "fullname" name= "fullname" required>
							
						
						<label for= "username"> <b>User Name</b> </label>
						<input value="<?php echo isset($_SESSION['form_input']['username']) ? $_SESSION['form_input']['username'] : ''; ?>"  type= "text" placeholder= "User Name" id= "username" name="username" required>

						<label for="email"> <b>Email Address</b> </label>
						<input value="<?php echo isset($_SESSION['form_input']['email']) ? $_SESSION['form_input']['email'] : ''; ?>" type="text" placeholder="Enter Email" id="email"name="email" required>

						<label for="psw1"><b>Password</b></label>
						<input value="<?php echo isset($_SESSION['form_input']['psw1']) ? $_SESSION['form_input']['psw1'] : ''; ?>" type="password" placeholder="Enter Password" id="psw1" name="psw1" required>
						
						<label for="psw2"><b>Re-enter Password</b></label>
						<input value="<?php echo isset($_SESSION['form_input']['psw2']) ? $_SESSION['form_input']['psw2'] : ''; ?>" type="password" placeholder="Enter Password" id="psw2" name="psw2" required>
        
       <?php
      if (isset($_SESSION['messages'])) {
        foreach($_SESSION['messages'] as $message) {
          echo "<div class='message bad'>{$message}</div>";
        }
      }
	  
      unset($_SESSION['message']);
      unset($_SESSION['form_input']);
      ?>
						<button type="submit">Create</button>
					</div>
					<div class="container" style="background-color:#f1f1f1">
					<!--	<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>   -->
					</div>
				</form>
			<!--	</div> -->

		<!--	<button class="createandlogin" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>  -->
		<!--		<div id="id02" class="modal">	-->			
				<form class="modal-content animate" method="post" action="login_handler.php">
					<div class="container">
						<label for="username"><b>User Name</b></label>
						<input value="<?php echo isset($_SESSION['logged_in']['username']) ? $_SESSION['logged_in']['username'] : ''; ?>" type="text" placeholder="User Name" name="username" required>

						<label for="password"><b>Password</b></label>
						<input value="<?php echo isset($_SESSION['logged_in']['password']) ? $_SESSION['logged_in']['password'] : ''; ?>" type="password" placeholder="Enter Password" name="password" required>
						
      
	   <?php
      if (isset($_SESSION['message'])) {
        echo "<div class='message bad'>{$message}</div>";
      }
      unset($_SESSION['message']);
      ?>
						<button type="submit">Login</button>
					</div>
					<div class="container" style="background-color:#f1f1f1">
					<!--	<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button> -->
					</div>
				</form>
				

				</div>
				
		<!--	</div>  -->
			

			
			<div class="footer">
				<p>@2019 Gerardo Flores</p>
				
			</div>
	</body>
</html>
