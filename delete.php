<?php 
$errors = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_POST['delete_account_btn'])) {
		$password = trim($_POST['del-pass']);
		$id = trim($_POST['auid']);

		if (empty($id) || empty($password)) {
			 $errors = "To confirm the deletion of your account please enter your account password!";
			 header("Location: profile.php?del-msg=$errors");
			 exit();
		}else{
			 require_once "database.php";
	//check if the password entered matched the current user account in the db
	 $query = "SELECT * FROM `users` WHERE id='$id' LIMIT 1";
        $run_query =mysqli_query($db,$query);
        if (mysqli_num_rows($run_query) > 0) {
        	$row = mysqli_fetch_array($run_query);
        	$db_password = $row['pwd'];
        	//compare the db password to the one the user entered
        	if ($password===$db_password) {
        	 $del = "DELETE FROM `users` WHERE id='$id' LIMIT 1";
        $run_query =mysqli_query($db,$del);
        if ($run_query) {
			 header("Location: login.php");
			 exit();
        }else{
        	$errors = "Something went wrong, please try again!";
			 header("Location: profile.php?del-msg=$errors");
			 exit();
        }
        	}else{
        		$errors = "The password you entered do not match any account!";
			 header("Location: profile.php?del-msg=$errors");
			 exit();
        	}
        }else{
         $errors = "You do not have permission to delete this account!";
			 header("Location: profile.php?del-msg=$errors");
			 exit();	
        }
		}
	}
}