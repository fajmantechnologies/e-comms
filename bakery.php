<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery</title>
    <link rel="stylesheet" href="./bakery.css" type="text/css">
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

    menu #mainDiv{
    display: none;
    }
    menu .head{
        display: none;
    }
    .last-div .sublast-div input::placeholder{
        font-weight: 600;
        color: white;
        padding-left: 15px;
    }
    .last-div .sublast-div button{
        background-color: red;
        color: white;
        border: 1px solid red;
        border-radius: 5px;
        padding: 15px;
        font-weight: 600;
        margin-left: 420px;
        margin-top: 10px;
    }

    @media screen and (max-width:850px) {
    /* mobile */

    header{
        display: none;
    }

    menu .product{
        display: none;
    }

    .search{
        display: none;
    }

    menu .head{
        display: block;
        line-height: 70px;
        margin-left: 200px;
        color: white;
        font-size: 25px;
        cursor: pointer;
    }

    .div2{
        height: 150px;
    }

    /* .div2 div{
        margin-top: -1px;
    } */


    .div3{
        width: 300px;
        text-align: center;
        background-color: rgba(95, 55, 55, 0.904);
        height: 150px;
        margin: auto;
        margin-top: -10px;
    }
   
    .div3 h2 a{
        font-size: 15px;
        font-weight: 600;
        text-decoration: none;
        color: white;
    }
    
    .div4{
        display: none;
    }


    .firstDiv{
        display: block;
        margin-top: -60px;
    }

    .firstDiv div img{
        width: 400px;
        height: 100px;
        border-radius: 5px;
        transition: .5s ease;
    }
    
    .firstDiv div img:hover{
        transform: scale(1.1);
    }

    .firstDiv .last-me{
        margin-top: 20px;
    }

    .container .products{
        display: block;
        width: 100px;
        margin: auto;
        padding: auto;
        margin-top: -50px;
        justify-content: center;
        height: 50px;
    }

    .container .products div{
        display: none;
    }

    .container .second-div .first-image{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .container .third-div .second-image{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .container .fourth-div .third-image{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .container .top-selling{
        display: block;
        width: 200px;
        margin: auto;
        padding: auto;
        margin-top: -50px;
        justify-content: center;
        height: 50px;
        font-size: 20px;
    }

    .container .top-selling div{
        display: none;
    }

    .container .featured{
        display: block;
        width: 200px;
        margin: auto;
        padding: auto;
        margin-top: -50px;
        justify-content: center;
        height: 50px;
        font-size: 20px;
    }

    .container .featured div{
        display: none;
    }

    .main-last .last .sub-last{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
    }

    .main-last .last{
        margin-left: 70px;
    }

    .main-last .last .sub-last div img{
        margin-top: 50px;
    }

    .last-div{
        height: 450px;
        background: url(./images/mall5.jpg);
        position: relative;
        background-size: cover;
        background-attachment: fixed;
    }

    .last-div .sublast-div p{
        font-size: 15px;
        font-weight: 600;
        width: 250px;
        margin: auto;
    }

    .last-div .sublast-div input{
        display: block;
        height: 50px;
        width: 300px;
        background-color: black;
        border: 1px solid black;
        margin-left: 100px;
    }

    .last-div .sublast-div input::placeholder{
        font-weight: 600;
        color: white;
        padding-left: 15px;
        font-size: 18px;
    }

    .last-div .sublast-div .my-put{
        margin-top: 20px;
    }
    
    .last-div .sublast-div button{
        margin-left: 20px;
        background-color: red;
        color: white;
        border: 1px solid red;
        border-radius: 5px;
        /* padding: 15px; */
        font-weight: 600;
    }

    .down{
        background-color: rgb(88, 87, 87);
        display: block;
        height: 350px;
    }

    .down .down-store{
        width: 300px;
        margin: auto;
        color: white;
    }

    .down .down-store h1 span{
        display: block;
        text-align: center;
    }

    .down .locate{
        width: 180px;
        margin: auto;
        margin-top: -25px;
    }

    .down .locate a{
        color: rgb(43, 42, 42);
        font-weight: 600;
        background-color: white;
        text-decoration: none;
        border-radius: 5px;
        padding: 20px;
    }

    footer{
        background-color: rgba(155, 152, 152, 0.226);
        height: 500px;
    }
    footer .foot-div{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-left: 50px;
    }

    .reserved{
        height: 50px;
        background-color: rgb(88, 87, 87);
    }
    .reserved p{
        line-height: 50px;
        text-align: center;
        color: white;
        font-weight: 600;
    }

    menu #mainDiv{
        display: none;
        margin-left: -400px;
        margin-top: 65px;
        background-color: red;
        height: 500px;
        width: 400px;
        border-top: 4px solid black;
    }

    .my-menu li{
        list-style: none;
        outline: 1px solid rgb(243, 24, 24);
        line-height: 45px;
    }

    .my-menu li a{
        margin-left: 10px;
        text-decoration: none;
        color: rgba(247, 239, 239, 0.925);
        display: block;
        font-weight: 600;
        font-family: Arial;
    }

    .my-menu li:hover{
        background: rgba(247, 3, 3, 0.658);
        color: black;
        display: block;
    }

    .my-menu li a:hover{
        color: rgba(214, 192, 192, 0.87);
        font-weight: 600;
        display: block;
    } 

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
            <div class="head" id="menuicon">&#9776;</div>
            <div id="mainDiv">
                <div>
                    <div>
                        <ul class="my-menu">
                            <li><a href="./index.php">Home</a></li>
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
                </div>
            </div>
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
        <div>
            <img src="./images/mall.jpg" alt="">
        </div>
        <div class="appliances">
            <br><br><br>
            <div>
                <hr class="line" color="red">
                <br>
                <p>Bakery</p>
            </div>
        </div>
    </div>
    <main>
        <div class="container">
            <div class="firstDiv">
                <div>
                    <span>Showing 1-4 of 776 results</span>
                </div>
                <div>
                    <select name="" id="">
                        <option value="">Default sorting</option>
                        <option value="">Sort by popularity</option>
                        <option value="">Sort by latest</option>
                        <option value="">Sort by price: low to high</option>
                        <option value="">Sort by price: high to low</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="second-div">
                <div class="first-image">
                    <div>
                        <a href="#">
                            <img src="./images/Buns-Chelsea.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="./images/dano.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="./images/golden-morn.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="./images/Yoghurt-Plain-Hollandia-1L-Pack-979.99-300x300.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="./images/Bread.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                </div>
                <br><br><br>
                <div class="first-image">
                    <div>
                        <a href="#">
                            <img src="./images/cocoa.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="./images/glenfiddich.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="./images/snickers.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="./images/lager.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="./images/5alive.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                </div>
                <br><br><br>
                <div class="first-image">
                    <div>
                        <a href="#">
                            <img src="./images/cocoa.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="./images/glenfiddich.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="./images/snickers.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="./images/lager.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="./images/5alive.jpg" alt="">
                            <p style="color: rgb(75, 72, 72); font-weight: 600;">Buns Chelsea 6S Pack</p>
                            <p style="color: red; font-weight: 600; font-size: small;">&#8358; 829.99</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <br><br><br><br><br><br><br><br>
    <footer>
        <br><br>
        <div class="foot-div">
            <div>
                <p><b>QUICK LINKS</b></p>
                <br>
                <ul style="line-height: 30px;">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
            <div>
                <p><b>EXPLORE FAJMAN</b></p>
                <br>
                <ul style="line-height: 30px;">
                    <li><a href="#">Bakery & Deli</a></li>
                    <li><a href="#">Baby</a></li>
                    <li><a href="#">Recipes</a></li>
                    <li><a href="#">Butchery</a></li>
                    <li><a href="#">Liquor</a></li>
                </ul>
            </div>
            <div>
                <p><b>TERMS & CONDITION</b></p>
                <br>
                <ul style="line-height: 30px;">
                    <li><a href="#">Cookie & policy</a></li>
                    <li><a href="#">Data Privacy Statement</a></li>
                    <li><a href="#">Website Usage Policy</a></li>
                </ul>
            </div>
            <div>
                <p><b>CONTACT US</b></p>
                <br>
                <p style="font-size: 15px;"><b>Head Office:</b></p>
                <span>The Palms Shopping Mall,</span>
                <br>
                <span>1, Bisway Street, Oniru, Victoria</span>
                <br>
                <span>Island, Lagos, Nigeria</span>
                <br><br>
                <p style="font-size: 15px;"><b>Telephone:</b></p>
                <span>+234 810 814 2692</span>
                <br>
                <span>+234 810 814 2692</span>
            </div>
        </div>
    </footer>
    <div class="reserved">
        <p>Retail Supermarkets Nigeria Limited 2023. All Rights Reserved.</p>
    </div>

    <script>
        function mobileMenu() {
            if (document.getElementById('mainDiv').style.display == 'block') {
                document.getElementById('mainDiv').style.display = 'none';
            }else {
                document.getElementById('mainDiv').style.display = 'block';
            }
        }
        document.getElementById('menuicon').addEventListener('click', mobileMenu);
    </script>  
</body>
</html>