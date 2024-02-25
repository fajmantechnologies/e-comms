<?php

include_once "session.php";
$errors = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
   if (isset($_POST['reset_link_btn'])) {
       $email =  trim($_POST['email']);

       if (empty($email)) {
           $errors = "Please enter your email address!";
       }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errors = "Please enter a valid e-mail address!";
       }else{
        require_once "database.php";
        $query = "SELECT * FROM `users` WHERE email='$email' LIMIT 1";
        $run_query = mysqli_query($db,$query);
        if (mysqli_num_rows($run_query) > 0) {
            //user with this email exists
          $token = uniqid("OG",true).mt_rand(10000000,99999999);
          $insert = "UPDATE `users` SET token='$token' WHERE email='$email' LIMIT 1";
           if (mysqli_query($db,$insert)) {
              $link = "http://localhost/shoprite/reset-password.php?token=$token&email=$email";
           $errors ="Please wait... loading reset page".'<script>setTimeout(()=>{
            window.location.assign("'.$link.'");
          },4000)</script>';
           }else{
             $errors ="Internal Server Error, Try again!"; 
           }
          }else{
            $errors ="$email is not recognized!"; 
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
            <div class="input-box">
                <i class='bx bxs-envelope' style="color: #222;"></i>
                <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <p>
                <?php if (isset($errors) && !empty($errors)) {
                   
                    echo '<div class="echo">'.$errors.'</div><br>';
                    
                } ?>
            </p>
            <button type="submit" name="reset_link_btn" class="reset">Send Reset Password Link</button>
            <br><br>
            <div class="back">
                <p>Go Back To Login Page &nbsp;<a href="./login.php">Here</a></p>
            </div>
            <div class="homepage">
                <a href="./index.php">Home Page</a>
            </div>
        </form>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>       
</body>
</html>