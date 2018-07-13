<?php 

$username = $_POST["username"] ;
$email = $_POST["email"] ;
$password = $_POST["password"] ;
$cpassword = $_POST["cpassword"] ;

$con = mysqli_connect("localhost" , "root" , "" , "june2018") ;

if($password == $cpassword){
	$sql = "insert into user set username = '$username' , email = '$email' , password = '$password' " ;

	if(mysqli_query($con , $sql)){
		header("location: login.php?registrationsuccess=1") ;
	}
	else{
		echo mysqli_error($con) ;
	}

}
else{
	header("location: index.php?error=1") ;
}

 ?>