<?php
require "includes/common.php";
session_start();
if (!isset($_SESSION['email']) && $_SESSION['admin']==0) {
   header('location: index.php');
}

$query = "UPDATE orders SET status=\"".$_POST["status"]."\" WHERE id=".$_POST["id"]."";

mysqli_query($con, $query);
header('location: order.php?id='.$_POST["id"].'');
?>