<?php 
require_once "database.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_POST['product-update-btn'])) {
		$product_name = $_POST['productName'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $vendor_name = $_POST['vendor'];
        $type = $_POST['type'];
        $id = $_POST['id'];
        if (empty($product_name) || empty($price) || empty($category) || empty($description) || empty($vendor_name) || empty($type) || empty($id) ) {
        	header("Location: edit.php?id=$id&message=2");
        	exit();
        }else{
        	$update_sql = "UPDATE products SET product_name='$product_name', price='$price', category='$category', description='$description', vendor_name='$vendor_name', type='$type' WHERE id='$id' LIMIT 1";
        	$res = mysqli_query($db,$update_sql);
        	header("Location: products.php");
        	exit();
        }
	}
}
?>