<?php 

session_start() ;

$user_id = $_SESSION["user_id"] ;
$note_id = $_GET["note_id"] ;
$data = $_POST["newnote"] ;

$con = mysqli_connect("localhost" , "root" , "" , "june2018") ;

$qry = "update notes set note = '$data' where user_id = $user_id and note_id = $note_id " ;

// echo $qry ;

mysqli_query($con , $qry) ;

header("location: home.php") ;

 ?>