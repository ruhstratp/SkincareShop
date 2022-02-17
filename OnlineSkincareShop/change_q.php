<?php

require "includes/common.php";
session_start();

if (isset($_POST['id']) && is_numeric($_POST['id']) && isset($_POST['q']) && is_numeric($_POST['q']) ) {
    $item_id = $_POST["id"];
    $q=$_POST["q"];
    $user_id = $_SESSION['user_id'];

    
    $query = "UPDATE users_products SET quantity=".$q." WHERE item_id='$item_id' AND user_id='$user_id' ";
    
    $res = mysqli_query($con, $query);
    header("location:cart.php");
}
?>
