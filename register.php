<?php

$errors = array();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
   if (isset($_POST['submit'])) {
       $email =  trim($_POST['email']);
       $password =  trim($_POST['password']);
       $confirm_password =  trim($_POST['confirm_password']);
       if (empty($email) || empty($password) || empty($confirm_password)) {
           $errors[] = "Please all input fileds are required!";
       }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Please enter a valid e-mail address!";
       }elseif (strlen($password) <= 7) {
           $errors[] = "Your password must be at least eight characters long!";
       }elseif ($password !== $confirm_password) {
           $errors[] = "The two passwords do not match!";
       }else{
        require_once "database.php";
        $query = "SELECT * FROM `users` WHERE email='$email' LIMIT 1";
        $run_query =mysqli_query($db,$query);
        if (mysqli_num_rows($run_query) > 0) {
           $errors[] = "This $email is already taken!";
        }else{
            $date = date("Y-m-d");
            $sql ="INSERT INTO users (email,pwd,created_at) VALUES ('$email','$password','$date');";
            $run_sql = mysqli_query($db,$sql);
            if ($run_sql) {
               $errors[] ="Congratulations, Your account has been created!".
               "<script>setTimeout(()=>{
                window.location.assign('./login.php');
               },2000)</script>";
            }
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
    <title>Register</title>
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
    height: 590px;
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
    .account{
        width: 100%;
        height: 40px;
        background: #f19272;
        border-radius: 5px;
        border: none;
        margin-top: 10px;
        cursor: pointer;
        letter-spacing: 1px;
    }
    .account a{
        text-decoration: none;
        line-height: 40px;
        display: flex;
        justify-content: center;
        color: red;
        font-weight: 600;
        font-size: 16px;
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
                    <input type="email" name="email" value="<?php if (isset($_POST['email']) && ! empty($_POST['email'])) {
                        echo $_POST['email'];
                    }else{
                        echo '';
                    } ?>">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt' style="color: #222;"></i>
                    <label for="">Password</label>
                    <input type="password" name="password" >
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt' style="color: #222;"></i>
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm_password" >
                </div>
                <button type="submit" name="submit" class="btn">Register</button>
                <div class="account">
                    <a href="./login.php">Already Have An Account</a>
                </div>
                <div class="homepage">
                    <a href="./index.php">Home Page</a>
                </div>
                <div>
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