<?php 

$email = $_POST["email"] ;
$password = $_POST["password"] ;

$con = mysqli_connect("localhost" , "root" , "" , "june2018") ;

$qry = "select * from user where email = '$email' and password = '$password'";

$result = mysqli_query($con , $qry) ;

$count = mysqli_num_rows($result) ;

if($count == 1){
	session_start() ;

	$row = mysqli_fetch_assoc($result);
	
	$_SESSION["user_id"] = $row["user_id"];

	header("location: home.php") ;
}
else{
	header("location: login.php?error=1");
}

 ?>