<?php
$servername = "stocks";
$username = "fet14018534";
$password = "griffyd100";
$dbname = "fet14018534";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
//basket array for storing id's
$basketid = array("1", "5", "12");
$basketname = array("Lapierre", "Cube", "Fox Racing");
$basketmodel = array("Zesty AM 327", "Stereo 140 C:62 Race", "Warmup Long Sleeve Tee AW15");
$basketprice = array("1789.99", "2199.99", "16.99");

?>