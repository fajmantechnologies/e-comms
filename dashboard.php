<?php
include_once "session.php";

require_once ("inc/auth.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./dashboard.css" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <aside class="menu">
        <ul>
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
            <li class="log-out">
                <a href="logout.php">
                    <i><ion-icon name="log-out"></ion-icon></i>
                    <p>Log out</p>
                </a>
            </li>
        </ul>
    </aside>
    <div class="content">
        <div class="title">
            <p>Dashboard</p>
            <i><ion-icon name="bar-chart"></ion-icon></i>
        </div>

        <div class="data">
            <div class="box">
                <i><ion-icon name="person"></ion-icon></i>
                <div class="info">
                    <p>User</p>
                    <span><?php echo $row['cnt'];?></span>
                </div>
            </div>
            <div class="box">
                <i><ion-icon name="options"></ion-icon></i>
                <div class="info">
                    <p>Products</p>
                    <span><?php echo $goods['cnt'];?></span>
                </div>
            </div>
            <div class="box">
                <i><ion-icon name="chatbox"></ion-icon></i>
                <div class="info">
                    <p>Message</p>
                    <span>7630</span>
                </div>
            </div>
            <div class="box">
                <i class='bx bx-dollar'></i>
                <div class="info">
                    <p>Earning</p>
                    <span>106m</span>
                </div>
            </div>
        </div>

        <div class="title">
            <p>Services</p>
            <i><ion-icon name="options"></ion-icon></i>

        </div>
        <table>
            <thead>
                <tr>
                    <th>Services</th>
                    <th>Price</th>
                    <th>Count</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Maintaining</td>
                    <td><span class="price">1500$</span></td>
                    <td><span class="count">920</span></td>
                </tr>
                <tr>
                    <td>Legal Advice</td>
                    <td><span class="price">1600$</span></td>
                    <td><span class="count">920</span></td>
                </tr>
                <tr>
                    <td>Marketing</td>
                    <td><span class="price">5000$</span></td>
                    <td><span class="count">160</span></td>
                </tr>
                <tr>
                    <td>Maintaining</td>
                    <td><span class="price">1500$</span></td>
                    <td><span class="count">920</span></td>
                </tr>
                <tr>
                    <td>Legal Advice</td>
                    <td><span class="price">1600$</span></td>
                    <td><span class="count">920</span></td>
                </tr>
                <tr>
                    <td>Marketing</td>
                    <td><span class="price">5000$</span></td>
                    <td><span class="count">160</span></td>
                </tr>
            </tbody>
        </table>
    </div>



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>    
</body>
</html>