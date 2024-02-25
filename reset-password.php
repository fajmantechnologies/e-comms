<?php
include_once "session.php";
  require_once "database.php";
$errors = array();
if ($_SERVER['REQUEST_METHOD'] == "GET") {
   if (isset($_GET['token']) && isset($_GET['email']) && ! empty($_GET['token']) && ! empty($_GET['email'])) {
      $token =$_GET['token'];
      $email =$_GET['email'];
    
       $query = "SELECT * FROM users WHERE email='$email' AND token='$token' LIMIT 1";
        $run_query = mysqli_query($db,$query);
        $result = mysqli_num_rows($run_query);
        if (!$result) {
        header("Location: login.php");
            exit();
        }
   }else{
    header("Location: login.php");
    exit();
   }
   }

?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['update_my_password'])) {
        $email = trim($_POST['email']);
        $new_password = trim($_POST['new_password']);
         if (empty($new_password)) {
           $errors[] = "Please enter your New Password!";
       }elseif(strlen($new_password) <=7) {
            $errors[] = "Your new password should have min of 8 characters!";
       }else{


        $sql_query = "UPDATE `users` SET pwd= '$new_password' WHERE email='$email' LIMIT 1";
         $run_ = mysqli_query($db,$sql_query);
        if ($run_) {
           //redirect the user to the login page
           $link = "./login.php";
           $errors[] ="Password reset successfully, Please wait...".'<script>setTimeout(()=>{
            window.location.assign("'.$link.'");
          },3000)</script>';
        }else{
             $errors[] ="Internal Server Error, Try again!";
        }
       }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot-Password</title>
    <link rel="stylesheet" href="./forgot-password.css" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    .container{
    height: 400px;
    width: 420px;
    border: 2px solid rgba(255, 255, 255, .4);
    border-radius: 10px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 30px 30px 0 rgba(0, 0, 0, .6);
    overflow: hidden;
    position: relative;
    }
    .back{
    width: 100%;
    display: flex;
    justify-content: center;
    }
    .reset{
    width: 100%;
    height: 40px;
    background: #f19272;
    border-radius: 5px;
    border: none;
    font-weight: 600;
    font-size: 16px;
    cursor: pointer;
    letter-spacing: 1px;
    }
    .echo{
        color: red;
    }
    .name{
        margin-left: -25px;
        position: fixed;
    }
    .name h3{
        color: #f19272;
        font-size: 30px;
    }
    .name i{
        color: #f19272;
        font-size: 30px;
    }
    .name a{
        text-decoration: none;
    }
</style>
<body>
    <div class="container">
        <form autocomplete="off" action="" method="post">
            <div class="name">
                <a href="javascript:void(0);" class="">
                    <h3><i><ion-icon name="person"></ion-icon></i>OG</h3>
                </a>
            </div>
            <div class="logo">
                <img src="./images/avatar2.png" alt="">
            </div>
            <?php if (count($errors) > 0) {
                foreach ($errors as $error) {
                echo '<div class="echo">'.$error.'</div><br>';
                }
            } ?>
            <input type="hidden" name="email" value="<?php echo $email;?>">
            <div class="input-box">
                <i class='bx bxs-envelope' style="color: #222;"></i>
                <label for="floatingInput">New Password</label>
                <input type="text" id="floatingInput" placeholder="New Password" name="new_password">
            </div>
            <button type="submit" name="update_my_password" class="reset">Send Reset Link</button>
            <br><br>
            <div class="back">
                <p>Go Back To Login Page &nbsp;<a href="./login.php">Here</a></p>
            </div>
            <div class="homepage">
                <a href="./index.php">Home Page</a>
            </div>
        </form>
    </div>
</body>
</html>