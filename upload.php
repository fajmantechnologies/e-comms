<?php 
require_once "database.php";
$msg ="";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$userId = trim($_POST['userId']);
	if (isset($_FILES['profile-image']) && ! empty($_FILES['profile-image']['name'])) {
		//get the name of the file
		$filename = $_FILES['profile-image']['name'];
		$size = $_FILES['profile-image']['size']/1024;
		$type = $_FILES['profile-image']['type'];
		$ext = pathinfo($_FILES['profile-image']['name'],PATHINFO_EXTENSION);
		$error = $_FILES['profile-image']['error'];
		$temp_name = $_FILES['profile-image']['tmp_name'];
		$allowedExt = array("jpg","png","pdf","jpeg");
		if (!in_array($ext, $allowedExt)) {
			$msg = "Only PNG,JPG,PDF & JPEG Extension is allowed!";
		}elseif ($size > 200) {
			$msg = "Your file size is too large";
		}elseif ($error !== 0) {

			$msg = "There was an error Uploading your file";
		}else{

			if (empty($userId)) {
				$msg = "You are not authorized to change this profile image";
			}else{
				//update the user profile image in the db
			$new_name = "kme_".time().".".$ext;
					   //kme_1698223263.jpg
			$destination = "upload/".$new_name;

			$sql_query = "UPDATE users SET photo='$new_name' WHERE id='$userId' LIMIT 1;";
			$run_query =mysqli_query($db,$sql_query);
			if ($run_query) {
				// move the uploaded image to its destination
				if (move_uploaded_file($temp_name, $destination)) {
				$msg = "Image uploaded successfully";
			}else{
				$msg = "Unable to uploaded";

			}
			}else{
				$msg = "Unable to move your Image to location";
			}

			}
			
		}

	}else{
		$msg = "Please select your file";
	}

	header("Location: profile.php?msg=$msg");
	exit();
}