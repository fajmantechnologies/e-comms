<?php
include_once "session.php";

require_once ("inc/auth.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap'); */
    *{
        font-family: 'Poppins', sans-serif;
        padding: 0;
        margin: 0;
        color: #fff;
    }
    body{
        background-color: #001;
    }
    .menu{
        /* margin-top: -15px; */
        background-color: #123;
        width: 260px;
        height: 100vh;
        /* padding: 20px; */
    }
    .image-box{
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 3px solid #fff;
        margin-left: 10px;
    }
    .image-box img{
        border-radius: 50%;
        width: 50px;
        height: 50px;
    }
    .profile{
        display: flex;
        align-items: center;
        gap: 30px;
        margin-bottom: 20px;
    }
    .profile h2{
        font-size: 20px;
    }
    ul{
        list-style: none;
        position: relative;
        height: 95%;
    }

    ul li a{
        display: block;
        text-decoration: none;
        padding: 10px;
        margin: 10px 0;
        border-radius: 8px;
        display: flex;
        align-items: center;
        gap: 40px;
    }

    ul li a:hover, .active{
        background-color: #ffffff55;
    }

    .log-out{
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    ul li a i{
        font-size: 30px;
    }
    .log-out a{
        background-color: #a00;
    }
    .container{
        display: flex;
    }
    .sub-container{
        margin-left: 70px;
        margin-top: 10px;
    }
    .main-profile{
        display: flex;
    }
    .profile-settings{
        height: 400px;
        width: 450px;
        background-color: #123;
        border-radius: 5px;
    }
    .profile-settings2{
        margin-left: 50px;
        height: 400px;
        width: 450px;
        background-color: #123;
        border-radius: 5px;
    }
    .change{
        font-size: small;
        color: rgb(199, 194, 194);
    }
    .sub-profile{
        padding: 20px;
        display: flex;
        justify-content: center;
        line-height: 30px;
    }
    .sub-profile div input{
        width: 400px;
        height: 30px;
        background-color: #001;
        border: none;
        border-radius: 5px;
    }
    .sub-profile div label{
        color: rgb(199, 194, 194);
    }
    .sub-profile h6{
        color: white;
        font-size: 16px;
    }
    .save{
        margin-left: 300px;
        background-color: cyan;
        border: none;
        padding: 5px;
        border-radius: 5px;
        color: black;
        margin-top: 20px;
        cursor: pointer;
    }
    .sub-profile2{
        padding: 20px;
        display: flex;
        justify-content: center;
        line-height: 30px;
    }
    .sub-profile2 div input{
        width: 400px;
        height: 30px;
        background-color: #001;
        border: none;
        border-radius: 5px;
    }
    .sub-profile2 div label{
        color: rgb(199, 194, 194);
    }
    .sub-profile2 h6{
        color: white;
        font-size: 16px;
    }
    .profile-settings3{
        height: 200px;
        width: 450px;
        background-color: #123;
        border-radius: 5px;
    }
    .profile-settings4{
        height: 200px;
        width: 450px;
        background-color: #123;
        border-radius: 5px;
        margin-left: 50px;
    }
    .sub-profile3{
        padding: 20px;
        display: flex;
        justify-content: center;
        line-height: 30px;
    }
    .sub-profile3 div input{
        height: 30px;
        background-color: #001;
        border: none;
        border-radius: 5px;
    }
    .sub-profile3 div label{
        color: rgb(199, 194, 194);
    }
    .sub-profile3 h6{
        color: white;
        font-size: 16px;
    }
    .sub-profile4{
        padding: 20px;
        display: flex;
        justify-content: center;
        line-height: 30px;
    }
    .sub-profile4 div input{
        width: 400px;
        height: 30px;
        background-color: #001;
        border: none;
        border-radius: 5px;
    }
    .sub-profile4 div label{
        color: rgb(199, 194, 194);
    }
    .sub-profile4 h6{
        color: white;
        font-size: 16px;
    }
    .save2{
        margin-left: 235px;
        background-color: red;
        border: none;
        padding: 5px;
        border-radius: 5px;
        color: white;
        margin-top: 20px;
        cursor: pointer;
    }
</style>
<body>
    <div class="container">
        <div class="menu">
            <ul>
                <br>
                <li class="profile">
                    <div class="image-box">
                        <img src="<?php if ($rows['photo'] == null || $rows['photo'] == "") {
                           echo 'images/avatar2.png';
                        }else{
                            echo "upload/".$rows['photo'];
                        } ?>" alt="" style="width: 50px; height: 50px;">
                    </div>
                    <h2>FajMan</h2>
                </li>
                <li>
                    <a href="dashboard.php" class="active">
                        <i><ion-icon name="home"></ion-icon></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                        <i><ion-icon name="people"></ion-icon></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li>
                    <a href="products.php">
                        <i><ion-icon name="options"></ion-icon></i>
                        <p>Products</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i><ion-icon name="pie-chart"></ion-icon></i>
                        <p>Analytics</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i><ion-icon name="star"></ion-icon></i>
                        <p>Favorite</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i><ion-icon name="settings"></ion-icon></i>
                        <p>Settings</p>
                    </a>
                </li>
                <br>
                <li class="log-out">
                    <a href="logout.php">
                        <i><ion-icon name="log-out"></ion-icon></i>
                        <p>Log out</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sub-container">
            <div class="main-profile">
                <div class="profile-settings">
                    <div class="sub-profile">
                        <form id="UserProfileUpdateForm">
                            <h6>Profile Settings</h6>
                            <p class="server" id="server-response"></p>
                            <div>
                                <label for="email">Email</label>
                                <br>
                                <input type="email" id="email" aria-describedby="emailHelp" 
                                name="email" value="<?php echo $rows['email'];?>">
                            </div>
                            <input type="hidden" name="id"  value="<?php echo $rows['id'];?>">
                            <br>
                            <div>
                                <label for="password" class="form-label">Change Password</label>
                                <br>
                                <input type="password" class="form-control" id="password" name="password">
                                <div id="emailHelp" class="change">
                                    Leave the password blank if you do not want to change it.
                                </div>
                            </div>
                            <button type="submit" class="save">Save Changes</button>
                        </form>
                    </div>
                </div>
                <div class="profile-settings2">
                    <div class="sub-profile2">
                        <form action="./change-password.php" method="post" autocomplete="off">
                            <h6>Password Reset Form</h6>
                            <p id="server-response"><?php if (isset($_GET['msg'])): ?>
                                <?php echo $_GET['msg'];?>       
                            <?php endif ?> </p>
                            <div>
                                <label for="oldpassword" class="form-label">Old Password</label>
                                <input type="oldpassword" class="form-control" id="oldpassword"
                                aria-describedby="oldpasswordHelp" name="oldpassword">
                            </div>
                            <input type="hidden" name="uid"  value="<?php echo $rows['id'];?>">
                            <br>
                            <div>
                                <label for="new-password" class="form-label">New Password</label>
                                <input type="password" class="form-control" name="new_password" id="new-password"
                                aria-describedby="new-password">
                            </div>
                            <br>
                            <div>
                                <label for="confirm_password" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password"> 
                            </div>
                            <button type="submit" name="submit-password-btn" class="save">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="main-profile">
                <div class="profile-settings3">
                    <div class="sub-profile3">
                        <form action="./upload.php" method="post" enctype="multipart/form-data">
                            <h6>UPLOAD PROFILE IMAGE</h6>
                            <p>
                                <?php if (isset($_GET['msg'])): ?>
                                <?php echo $_GET['msg'];?>
                            <?php endif ?> </p>
                            <input type="hidden" name="userId"  value="<?php echo $rows['id'];?>">
                            <div>
                                <label for="profile-image">Select Image</label>
                                <br>
                                <input type="file" name="profile-image" id="profile-image">   
                            </div>
                            <button type="submit" name="upload" class="save">UPLOAD NOW</button>
                        </form>
                    </div>
                </div>
                <div class="profile-settings4">
                    <div class="sub-profile4">
                        <form action="./delete.php" method="post" autocomplete="off">
                            <h6>DELETE ACCOUNT</h6>
                            <p id="server-response"><?php if (isset($_GET['del-msg'])): ?>
                                <?php echo $_GET['del-msg'];?>    
                            <?php endif ?> </p>
                            <input type="hidden" name="auid"  value="<?php echo $rows['id'];?>">
                            <div>
                                <label for="del-pass">New Password</label>
                                <input type="password" name="del-pass" id="del-pass"
                                aria-describedby="del-pass">
                            </div>
                            <button type="submit" onclick="return confirm('Are you Sure?');" 
                            name="delete_account_btn" class="save2">DELETE ACCOUNT NOW</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#UserProfileUpdateForm").on("submit",function(event){
                event.preventDefault();
                $(".loading_btn").html("loading....").attr("disabled",true);
                const formData = $(this).serialize();
              $.post("./update.php",formData,function(response){
                setTimeout(()=>{
                   $(".loading_btn").html("Save Changes").attr("disabled",false);
                   console.log(response)
                   $("#server-response").html(response);
                },1000);
              });
            });
        });
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>      
</body>