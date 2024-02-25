<?php 

$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if (isset($_POST['submit-password-btn'])) {
		$uid = trim($_POST['uid']);
		$oldpass = trim($_POST['oldpassword']);
		$newpass = trim($_POST['new_password']);
		$cnewpass = trim($_POST['confirm_password']);

		if (empty($oldpass) || empty($newpass) || empty($cnewpass) || empty($uid)) {
			$msg = "Please enter Old Password and New Password to Continue";
			header("Location: ./profile.php?msg=$msg");
			exit();
		}elseif (strlen($newpass) <= 7) {
			$msg = "Your new password should have min of 8 characters!";
			header("Location: ./profile.php?msg=$msg");
			exit();
		}elseif ($newpass !== $cnewpass) {
				$msg = "New Password and Confirm Password not match!";
			header("Location: ./profile.php?msg=$msg");
			exit();
		}else{
			require_once "database.php";
			$check = "SELECT * FROM users WHERE id='$uid' AND pwd= '$oldpass' LIMIT 1";
			$run = mysqli_query($db,$check);
			if (mysqli_num_rows($run) > 0) {
				 $rows = mysqli_fetch_array($run);
          		$old_password =$rows['pwd'];

          		//check if the old one is same
          		if ($oldpass !== $old_password) {
          			$msg = "Old Password not match!";
			header("Location: ./profile.php?msg=$msg");
			exit();
          		}
			}

			$query = "UPDATE users SET pwd ='$newpass' WHERE id=$uid LIMIT 1";
			if (mysqli_query($db,$query)) {
				$msg = "Your password has been changed successfully!";
			header("Location: ./logout.php");
			exit();
			}
		}

	}
}