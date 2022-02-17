<?php
require "includes/common.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$sum = 0;
$user_id = $_SESSION['user_id'];
$query = " SELECT products.price AS Price, products.id, products.name AS Name, users_products.quantity as Quantity FROM users_products JOIN products ON users_products.item_id = products.id WHERE users_products.user_id='$user_id' and status='Added To Cart'";
$result = mysqli_query($con, $query);
$prodlist="";
while ($row = mysqli_fetch_array($result)) {
        $sum += $row["Price"]*$row["Quantity"];
        $prodlist.=$row["Name"].".".$row["Quantity"].",";
    }
    $prodlist=rtrim($prodlist, ", ");
    $query="INSERT INTO orders(products_order, order_price, name, email, address, city, county, postal_code, status, phone) VALUES('$prodlist', '$sum', '".$_POST["fname"]."', '".$_POST["email"]."', '".$_POST["address"]."', '".$_POST["city"]."', '".$_POST["state"]."', '".$_POST["zip"]."', 'Processing', '".$_POST["phone"]."')";
    $result = mysqli_query($con, $query);
    header("location:success.php");
?>