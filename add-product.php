<?php
include_once "session.php";

require_once ("inc/auth.php");
require_once "database.php";

$response ="";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['addProduct'])) {
        $productName = $_POST['productName'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $vendor = $_POST['vendor'];
        $type = $_POST['type'];

        //product image
        $file_name = $_FILES['picture']['name'];
        $file_size = $_FILES['picture']['size']/1024;
        $file_type = $_FILES['picture']['type'];
        $imageExt = pathinfo($_FILES['picture']['name'],PATHINFO_EXTENSION);
        $file_error = $_FILES['picture']['error'];
        $file_temp = $_FILES['picture']['tmp_name'];
        $allowedExt = array("jpg","png","pdf","jpeg");

        if (empty($productName) || empty($price) || empty($category) || empty($description) || empty($vendor) || empty($type)) {
            $response = "<p style='color:red; font-weight:600;'>Please fill out all the input fields</p>";
        }else{
            //create a new name for the image before uploading
            $newImageName = time().".".$imageExt;
            $destination = "upload/product/".$newImageName;
            $query = mysqli_query($db, "INSERT INTO products (product_name, price, image, category, description, vendor_name, type) VALUES ('$productName', '$price', '$newImageName', '$category', '$description', '$vendor', '$type');");
            move_uploaded_file($file_temp, $destination);
            if ($query) {
                $response ="<p style='color:green; font-weight:600;'>product Inserted Successfully</p>".
               "<script>setTimeout(()=>{
                window.location.assign('./products.php');
               },2000)</script>";
            }else{
                $response = "<p style='color:green; font-weight:600;'>Oops Something went wrong, Please try again</p>";
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
        margin-left: 100px;
        margin-top: 10px;
    }
    
    .profile-settings{
        height: 640px;
        width: 700px;
        background-color: #123;
        border-radius: 5px;
    }
    .change{
        font-size: small;
        color: rgb(199, 194, 194);
    }
    .save{
        margin-left: 300px;
        background-color: cyan;
        border: none;
        padding: 5px;
        border-radius: 5px;
        color: black;
        cursor: pointer;
    }
    form{
        padding: 5px;
        line-height: 20px;
        margin-left: 100px;
        display: flex;
        justify-content: center;
    }
    .profile-settings form .div-main{
        margin-top: 50px;
    }
    .profile-settings form div textarea{
        width: 400px;
        height: 65px;
        background-color: #001;
        border: none;
        border-radius: 5px;
    }
    .profile-settings form div input{
        width: 400px;
        height: 40px;
        background-color: #001;
        border: none;
        border-radius: 5px;
    }
    .profile-settings form div label{
        color: rgb(199, 194, 194);
    }
    #type{
        background-color: #001;
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
            <div class="profile-settings">
                <h2>Add New Product</h2>
                <form action="" method="post" enctype="multipart/form-data"  autocomplete="off">
                    <p><strong><?php echo $response; ?></strong></p>
                    <div class="div-main">
                        <div>
                            <label for="productName">Product-Name:</label>
                            <br>
                            <input type="text" name="productName" id="productName">
                        </div>
                        <div>
                            <label for="price">Price:</label>
                            <br>
                            <input type="number" name="price" id="price">
                        </div>
                        <div>
                            <label for="picture">Select-Image:</label>
                            <br>
                            <input type="file" name="picture" id="picture">   
                        </div>
                        <div>
                            <label for="category">Category:</label>
                            <br>
                            <input type="text" name="category" id="category">
                        </div>
                        <div>
                            <label for="vendor">Vendor-Name:</label>
                            <br>
                            <input type="text" name="vendor" id="vendor">
                        </div>
                        <div>
                            <label for="type">Type:</label>
                            <br>
                            <select name="type" id="type" class="form-control">
                                <option value="" selected>Choose...</option>
                                <option value="Top Selling">Top Selling</option>
                                <option value="Featured">Featured</option>
                            </select>
                            
                        </div>
                        <div>
                            <label for="description">Description:</label>
                            <br>
                            <textarea name="description" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" name="addProduct" class="save">Add-Product</button>
                    </div>
                 </form>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>      
</body>