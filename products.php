<?php
require_once "database.php";
include_once "session.php";

require_once ("inc/auth.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./products.css" type="text/css">
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
            <p style="color: gold; font-size: 20px; font-weight: 400;">Products</p>
            <a style="text-decoration: underline; color: red;" href="./add-product.php">Add Product</a>

        </div>
        <table>
            <thead>
                <tr>
                    <th class="count">S/N</th>
                    <th class="count">Product Name</th>
                    <th class="count">Price</th>
                    <th class="count">Image</th>
                    <th class="count">Category</th>
                    <th class="count">Description</th>
                    <th class="count">Vendor</th>
                    <th class="count">Type</th>
                    <th class="count">Edit</th>

                </tr>
            </thead>
            <tbody>
                <?php $sql = "SELECT * FROM products ORDER BY id ASC LIMIT 100;";
                $run_query = mysqli_query($db,$sql);
                if (mysqli_num_rows($run_query)> 0) {
                    $sn = 0;
                    while ($row =mysqli_fetch_assoc($run_query)) {
                        $sn++;?>
                        <tr>
                            <td><?php echo $sn; ?></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php if ($row['image'] =="" || $row['image'] == NULL): ?> 
                                <span>No Image</span>
                            <?php else: ?>
                                <img style="padding-top: 5px; width: 50px; border-radius: 10px;" src="upload/product/<?php echo $row['image'];?>">
                            <?php endif ?></td>
                            <td><?php echo $row['category']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['vendor_name']; ?></td>
                            <td><?php echo $row['type']; ?></td>
                            <td><a style="color: white; background: blue; text-decoration: none; padding: 5px; border-radius: 5px;" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                        </tr>

                        <?php
                        // code....
                    }
                }else{
                    echo "<tr colspan='7'><h3 style='color:red;'>No Product Found!
                    </h3.</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>    
</body>
</html>