<?php
require("includes/common.php");
session_start();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query="SELECT quantity FROM users_products WHERE user_id=".$user_id." AND item_id=".$item_id."";
    $result=mysqli_query($con, $query);
    $q=0;
    if(mysqli_num_rows($result)==1)
    {$field=mysqli_fetch_array($result);
        $q=$field["quantity"]+1;
        $query = "UPDATE users_products SET quantity=".$q." WHERE item_id='$item_id' AND user_id='$user_id' ";
    }
    else
    {$query = "INSERT INTO users_products(user_id, item_id, quantity, status) VALUES('$user_id', '$item_id', 1, 'Added to cart')";
    }
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>   