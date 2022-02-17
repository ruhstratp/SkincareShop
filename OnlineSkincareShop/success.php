<?php
require "includes/common.php";
session_start();

$user_id = $_SESSION['user_id'];
$query = "DELETE FROM users_products WHERE user_id='$user_id' ";
mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/icon.png">
    <title>SkinCare| Online Skincare Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?vazi">
    <meta http-equiv="refresh" content="4;url=index.php" />
</head>
<body>
    <?php
include 'includes/header_menu.php';
?>
    <div class="container-fluid mt-5 pt-5" id="content" style="margin-bottom:200px">
            <div class="col-md-8 mx-auto">
                <div class="jumbotron text-center">
                      <h3>Comanda ta a fost confirmată. Vă mai așteptăm cu drag!</h3><hr>
                    <p>Apasă <a href="products.php">aici</a> pentru a cumpăra și alte produse.</p>
                </div>
            </div>
        </div>
         <!-- footer-->
         <?php include 'includes/footer.php'?>
        <!--footer ends-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</body>
</html>