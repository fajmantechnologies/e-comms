<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotions</title>
    <link rel="stylesheet" href="./promotions.css" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    header .maindiv{
    display: flex;
    margin-left: 60px;
    color: white;
    }
    .account{
        margin-left: 40px;
        border: 2px dashed red;
    }
    .account a{
        text-decoration: none;
        color: white;
        line-height: 60px;
        font-weight: 500;
    }
    menu div img{
        margin-left: 40px;
    }
    menu .product{
    margin-left: 220px;
    }
    .search i{
    position: absolute;
    color: gray;
    left: 5px;
    top: 23px;
    font-size: 25px;
    }
</style>
<body>
    <header>
        <div class="maindiv">
            <div class="chain">
                <p>Nigeria's Biggest Supermarket Chain</p>
            </div>
            <div class="support">
                <span class="icon"><i class='bx bxs-envelope'></i></span>
                <p>support@fajmansupermarket.com</p>
            </div>
            <div class="support">
                <span class="icon"><i class='bx bxs-phone'></i></span>
                <p>+2349114154535 | +2348108142692</p>
            </div>
            <div class="account">
                <a href="./login.php">Create Account / Sign In</a>
            </div>
        </div>
    </header>
    <div class="main-contact">
        <div class="contact">
            <div class="sliding">
                <marquee behavior="scroll" direction="left"><p><span class="prize">Never pay more than the ShopRite prize! Any concerns, please contact</span> support@fajmansupermarket.com</p></marquee>
            </div>
        </div>
        <menu>
            <div><img src="./images/faj_man_logo-removebg-preview (1).png" alt=""></div>
            <div class="product">
                <ul class="mainmenu">
                    <li><a href="#" class="list">Products &#9661;</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="./allproducts.php">All Products</a></li>
                                <li><a href="./appliances.php">Appliances</a></li>
                                <li><a href="./bakery.php">Bakery</a></li>
                                <li><a href="./cleaning.php">Cleaning</a></li>
                                <li><a href="./coffee&tea.php">Coffe & Tea</a></li>
                                <li><a href="./liquor.php">Liquor</a></li>
                                <li><a href="./personalcare.php">Personal Care</a></li>
                                <li><a href="./softdrinks.php">Soft Drinks</a></li>
                                <li><a href="./snacks.php">Snacks</a></li>
                                <li><a href="./wine.php">Wine</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list"><a href="./promotions.php">Promotions</a></li>
                    <li class="list"><a href="#">Explore &#9661;</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Bakery & Deli</a></li>
                                <li><a href="#">Baby</a></li>
                                <li><a href="#">Fruits & Vegetables</a></li>
                                <li><a href="#">Meat & Poultry</a></li>
                                <li><a href="#">Recipes</a></li>
                                <li><a href="#">Wine & Liguor</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list"><a href="#">Store Locator</a></li>
                    <li class="list"><a href="#">Contacts</a></li>
                </ul>
            </div>
            <div class="search">
                <i class='bx bx-search'></i>
                <input type="search" placeholder="Search for products ..." style="font-family: initial; padding-left: 40px; font-size: 15px;">
            </div>
        </menu>
    </div>
    <div class="picture">
        <br>
        <div>
            <img src="./images/catalogue.jpg" alt="">
        </div>
    </div>
    <main>
        <div class="container">
            <div>
                <img src="" alt="">
            </div>
        </div>
    </main>
</body>
</html>