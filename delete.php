<?php 
session_start() ;

$note_id = $_GET["note_id"] ; 
$user_id = $_SESSION["user_id"] ;
$con = mysqli_connect("localhost" , "root" , "" , "june2018") ;

$qry = "delete from notes where user_id = '$user_id' and note_id = '$note_id'" ;

mysqli_query($con , $qry) ;

header("location: home.php?delete=1") ;

 ?>