<?php 
$ret = "";
if ($_SERVER['REQUEST_METHOD'] =="POST") {
	if (empty($_POST['email']) || empty($_POST['id'])) {
		$ret = "Please enter your email to Continue";
	}else{
	$email =$_POST['email'];
	$id =$_POST['id'];
	//connect to database
require_once "database.php";
	if (!empty($_POST['password'])) {
		$newPass = $_POST['password'];

		$query = "UPDATE users SET email='$email', pwd='$newPass' WHERE id='$id' LIMIT 1";
		$runQuery = mysqli_query($db,$query);
		if ($runQuery) {
			$ret ="Updated successfully, logging out...".'<script>setTimeout(()=>{
				window.location.assign("./logout.php");
			},3000)</script>';
		}else{
$ret = "Something went wrong, please try again";
		}
		
	}else{

	$query = "UPDATE users SET email='$email' WHERE id='$id' LIMIT 1";
		$runQuery = mysqli_query($db,$query);
		if ($runQuery) {
			$ret ="Data updated successfully".'<script>setTimeout(()=>{
				window.location.assign("./");
			},3000)</script>';
		}else{
$ret = "Something went wrong, please try again";
		}
	}

	}

	echo $ret;
}