<?php 

session_start();

$note = $_POST["note"];
$user = $_SESSION["user_id"];

$con = mysqli_connect("localhost" , "root" , "" , "june2018");


$qry = "insert into notes set note = '$note' , user_id = $user ";

mysqli_query($con , $qry);

header("location: home.php?inserted=1");
 ?>