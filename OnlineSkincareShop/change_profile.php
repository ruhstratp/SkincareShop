<?php
require ("includes/common.php");
$user_id=$_POST['id'];
$email=$_POST['email'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$phone=$_POST['phone'];
$adress=$_POST['address'];
$city=$_POST['city'];
$county=$_POST['county'];
$postal_code=$_POST['postal_code'];
if(strcmp($_POST["pass"], ""))
$query= "UPDATE users SET email_id='$email', first_name='$first_name', last_name='$last_name', phone='$phone', address='$adress', city='$city', county='$county', postal_code='$postal_code', password='".md5($_POST["pass"])."'  WHERE id='$user_id' ";
else
$query= "UPDATE users SET email_id='$email', first_name='$first_name', last_name='$last_name', phone='$phone', address='$adress', city='$city', county='$county', postal_code='$postal_code'  WHERE id='$user_id' ";

mysqli_query($con, $query);
header('location: profile.php?user_id='.$_POST["id"].'');
?>