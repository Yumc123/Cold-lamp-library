<?php
session_start();

$t = $_POST["title"];
$fn = $_POST["firstname"];
$sn = $_POST["surnname"];
$pw = $_POST["password"];
$em = $_POST["email"];
 
$conn = new PDO ("mysql:host=localhost;dbname=yzhang;", 
                 "yzhang", "nothinah");
$conn->query("INSERT INTO users(title, firstname, surname, password, email) 
VALUES ('$t', '$fn', '$sn', '$pw', '$em')");
						
echo "<p> Thank your for join us, <a href='../search.php'>start research</a></p>";

?>