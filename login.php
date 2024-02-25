<?php
include_once "session.php";
$errors = array();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
   if (isset($_POST['login'])) {
       $email =  trim($_POST['email']);
       $password =  trim($_POST['password']);

       if (empty($email) || empty($password)) {
           $errors[] = "Login credential is required!";
       }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Please enter a valid e-mail address!";
       }else{
        require_once "database.php";
        $query = "SELECT * FROM `users` WHERE email='$email' AND pwd = '$password' LIMIT 1";
        $run_query =mysqli_query($db,$query);
        if (mysqli_num_rows($run_query) > 0) {
          $rows = mysqli_fetch_array($run_query);
              $_SESSION['loggedIn'] = true;
          $_SESSION['loggedInId'] = $rows['id'];
           $errors[] ="Login successful...".'<script>setTimeout(()=>{
            window.location.assign("dashboard.php?login=success");
          },2000)</script>';
        
          
        }else{
         $errors[] ="Invalid login information!";
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
    <title>Login</title>
    <link rel="stylesheet" href="./register.css" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins";
    }

    .container{
    height: 600px;
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
    .homepage{
        display: flex;
        justify-content: center;
        margin-top: 15px;
    }
    .forgot{
    width: 100%;
    height: 40px;
    background: #f19272;
    border-radius: 5px;
    border: none;
    font-weight: 600;
    font-size: 16px;
    margin-top: 10px;
    cursor: pointer;
    }
    .forgot a{
        text-decoration: none;
        color: black;
        justify-content: center;
        display: flex;
        line-height: 40px;
        letter-spacing: 1px;
    }

    input:focus ~ label,
    input:valid ~ label{
        top: -5px;
    }
    .text-danger{
        color:red;
    }
    .text-center{
        display: flex;
        justify-content: center;
    }

    .forgot{
    width: 100%;
    height: 40px;
    background: #f19272;
    border-radius: 5px;
    border: none;
    font-weight: 600;
    font-size: 16px;
    margin-top: 10px;
    cursor: pointer;
    letter-spacing: 1px;
    }

    .forgot a{
        text-decoration: none;
    }
    .message{
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .signup{
        width: 100%;
        display: flex;
        justify-content: center;
    }


</style>
<body>
    <div class="container">
        <div class="form-box Register">
            <form autocomplete="off" action="" method="post">
                <div class="logo">
                    <img src="./images/avatar2.png" alt="">
                </div>
               
                <div class="input-box">
                    <i class='bx bxs-envelope' style="color: #222;"></i>
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt' style="color: #222;"></i>
                    <label for="">Password</label>
                    <input type="password" name="password" >
                </div>
                <button type="submit" name="login" class="btn">Login</button>
                <div class="forgot">
                    <a href="./forgot-password.php">Forgot Password</a>
                </div>
                <br>
                <div class="signup">
                    <p>Don't Have An Account? <a href="./register.php">Sign Up</a></p>
                </div>
                <div class="homepage">
                    <a href="./index.php">Home Page</a>
                </div>
                <br><br>
                <div class="message">
                <?php if (count($errors) > 0) {
                           foreach ($errors as $error) {
                               echo '<div text-center class="text-danger">'.$error.'</div><br>';
                           }
                }  ?>
                </div>
            </form>
        </div>
    </div>
</body>
</html>