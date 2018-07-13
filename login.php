<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>  

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<nav class="navbar navbar-inverse  navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <a class="navbar-brand" href="home.php">Notes</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Home</a></li>
	        <li><a href="about.php">About</a></li>
	        <li><a href="contacts.php">Contact</a></li> 
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
	      </ul>

	    </div>
	  </div>
	</nav>

	<div class="container">
		<div class="row maincontent">
			<div class="col-md-6">
				<h3><b>This website is for maintaining Notes !!!</h3></b>
				<img src="notes.jpg" style="width: 100%">
			</div>
			<div class="col-md-6">
				<?php
					if(isset($_GET["registrationsuccess"])){
						echo "<b>You have been registered</b>" ;
					}
					if(isset($_GET["error"])){
						echo "<b>Invalid Credentials</b>" ;
					}
				 ?>
				<h3>Login</h3>
				<form action="dologin.php" method="post">
									
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" required value="">
					</div>					
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					
					<input type="submit" name="" class="btn btn-primary" value="Login">
				</form>
			</div>
		</div>
	</div>

</body>
</html>