<?php  

//create a variables to hold your connection details
//host_name
$hostName ="localhost";
$hostUserName ="root";
$hostPass ="";
$databaseName ="first_project";
// the below script helps you to connect your php file or script to your mysql database
try {
	$db = mysqli_connect($hostName,$hostUserName,$hostPass,$databaseName);
} catch (Exception $e) {
	die("Database connection could not be established:".$e->getMessage());
}
