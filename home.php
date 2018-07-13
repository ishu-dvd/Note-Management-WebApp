<!DOCTYPE html>
<html>
<head>

<?php 
session_start() ;

if(!isset($_SESSION["user_id"])) {
		header("location: index.php");
		exit;
	}

$con = mysqli_connect("localhost" , "root" , "" , "june2018") ;

 ?>

	<title>Home</title>
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
	      <a class="navbar-brand" href="#">Notes</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="home.php">Home</a></li>
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
		<form action="savenote.php" method="post">
			<div class="row">
				<div class="col-md-9">
					
					<div class="form-group">
						<textarea class="form-control" placeholder="Note" name="note"></textarea>
					</div>
				</div>
				<div class="col-md-3">
					<input type="submit" name="" class="btn btn-primary btn-lg">
				</div>
			</div>

		</form>

		<h1>Your Previous Notes</h1>
		<div class="card" style="width: 40rem;">
		  <ul class="list-group list-group-flush">
		    <?php
		    	$qry= "select * from notes where user_id = ".$_SESSION["user_id"];
		    	$result = mysqli_query($con , $qry);
		    	while($row = mysqli_fetch_assoc($result)) {
		    		//print_r($row); exit;
		    		echo "<li class='list-group-item'>".$row['note']." <a href='editnote.php?note_id=".$row['note_id']."' class='btn btn-warning btn-sm'>Edit</a><a href='delete.php?note_id=".$row['note_id']."' class='btn btn-danger btn-sm'>Delete</a> </li>";
		    	}
		    ?>
		    
		  </ul>
		</div>

	</div>

</body>
</html>