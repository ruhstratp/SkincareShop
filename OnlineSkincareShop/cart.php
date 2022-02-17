<?php
require "includes/common.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/icon.png">
    <title>SkinCare | Online Skincare Shopping</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'includes/header_menu.php';
?>
<div class="d-flex justify-content-center">
                <div class="my-5 table-responsive p-5">
                    <table class="table table-striped table-bordered table-hover ">
                    <?php
$sum = 0;
$user_id = $_SESSION['user_id'];
$query = " SELECT products.price AS Price, products.id, products.name AS Name, users_products.quantity as Quantity, users_products.item_id as id FROM users_products JOIN products ON users_products.item_id = products.id WHERE users_products.user_id='$user_id' and status='Added To Cart'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) >= 1) {
    ?>
                        <thead>
                            <tr>
                                <th>Numele produsului</th>
                                <th>Cantitate</th>
                                <th>Preț per bucata</th>
                                <th>Preț total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                                <?php
while ($row = mysqli_fetch_array($result)) {
        $sum += $row["Price"]*$row["Quantity"];
        $id = $row["id"] . ", ";
        echo "<tr><td>" . "#" . $row["Name"] . "</td>
        <td><form action=\"change_q.php\" method=\"post\"><input name=\"q\" id=\"q\" type=\"number\" min=\"1\"size=\"1\" value=" . $row["Quantity"] . "><input name=\"id\" id=\"id\" type=\"hidden\" value=" . $row["id"] . "><button type=\"submit\"> Refresh</button></form></td>
        <td> " . $row["Price"] . " Lei</td>
        <td> " . $row["Price"]*$row["Quantity"] . " Lei</td>
        <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link ' style='color:#790e0e'> Șterge</a></td></tr>";
    }
    $id = rtrim($id, ", ");
    echo "<tr><td></td><td>Total</td><td> " . $sum . " Lei</td><td><a href='checkout_form.php' class='btn btn-olive text-white'>Confirmă Comanda</a></td></tr>";
    ?>
                            </tbody>
                            <?php
} else {
    echo "<div class='text-center'> <img src='images/emptycart.png' class='image-fluid' height='150' width='150'></div><br/>";
    echo "<h5 class='text-bold text-center'>Coșul este momentan gol!</h5>";

}
?>
                        <?php
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--footer -->
         <?php include 'includes/footer.php'?>
        <!--footer end-->
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
