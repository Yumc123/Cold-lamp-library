<?php
session_start();

$em = $_POST["email"];
$pw = $_POST["password"];
 
$conn = new PDO ("mysql:host=localhost;dbname=yzhang;", 
                 "yzhang", "nothinah");
$sql = "select * from users where email='$em' AND password='$pw'";		
//echo $sql; 		 
$statement = $conn->prepare($sql);
$statement->bindParam(1,$em);
$statement->bindParam(2,$pw);
$statement->execute();
if($row=$statement->fetch())
{
    $_SESSION["gatekeeper"] = $em;
	header ("Location: ../search.html");
}
else
{
    echo "Invalid Login!";
}
?>