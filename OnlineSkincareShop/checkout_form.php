<?php
require "includes/common.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id=$_SESSION["user_id"];
$query="SELECT * FROM users WHERE id='$user_id'";
$result=mysqli_query($con, $query);
$user=mysqli_fetch_array($result);
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


<div class="row">
  <div class="col-75">
    <div class="container_form mx-auto">
    <h3 class="text-center"style="text-decoration:underline;">Adresa de facturare</h3><br>
    <h4>Folosește datele salvate în cont:</h4>
      <form action="process.php" method="POST">
                <input type="hidden" value="<?php echo $user_id; ?>" name="id" id="id">
                Nume și prenume: <?php echo $user["last_name"]." ".$user["first_name"]?> <input type="hidden" value="<?php echo $user["last_name"].$user["first_name"]?>" name="fname" id="fname" required>
                , Email: <?php echo $user["email_id"]?> <input type="hidden" value="<?php echo $user["email_id"]?>" name="email" id="email" required>
                , Telefon: <?php echo $user["phone"]?> <input type="hidden" value="<?php echo $user["phone"]?>" name="phone" id="phone" required><br>
                Adresă: <?php echo $user["address"]?> <input type="hidden" value="<?php echo $user["address"]?>" name="address" id="address" required>
                , Oraș: <?php echo $user["city"]?> <input type="hidden" value="<?php echo $user["city"]?>" name="city" id="city" required>
                , Județ: <?php echo $user["county"]?> <input type="hidden" value="<?php echo $user["county"]?>" name="state" id="state" required>
                , Cod poștal: <?php echo $user["postal_code"]?> <input type="hidden" value="<?php echo $user["postal_code"]?>" name="zip" id="zip" required><br>
                <input class="mt-2" type="submit" value="Folosește aceste date și trimite comanda">
</form>
      <form method="post" action="process.php">
        <div class="row">
          <div class="col-50">
            <label class="mt-3" for="fname"><i class="fa fa-user"></i> Nume și Prenume</label>
            <input type="text" id="fname" name="fname" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" required>
            <label class="mt-3" for="email"><i class="fa fa-envelope"></i> Telefon</label>
            <input type="text" id="phone" name="phone" required>
            <label for="adr" class="mt-2"><i class="fa fa-address-card-o"></i> Adresă</label>
            <input type="text" id="adr" name="address" required>
            <label for="city"><i class="fa fa-institution"></i> Oraș</label>
            <input type="text" id="city" name="city" required>

            <div class="row">
              <div class="col-50">
                <label for="state">Județ</label>
                <input type="text" id="state" name="state" required>
              </div>
              <div class="col-50">
                <label for="zip">Cod poștal</label>
                <input type="text" id="zip" name="zip" required>
              </div>
            </div>
            <label>
          <input type="checkbox" checked="checked" name="sameadr"> Am aceeași adresă ca cea de facturare.
        </label>
          </div>
          <table class="table table-striped table-bordered table-hover ">
            
                    <?php
$sum = 0;
$user_id = $_SESSION['user_id'];
$query = " SELECT products.price AS Price, products.id, products.name AS Name, users_products.quantity as Quantity FROM users_products JOIN products ON users_products.item_id = products.id WHERE users_products.user_id='$user_id' and status='Added To Cart'";
$result = mysqli_query($con, $query);
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
        <td>" . $row["Quantity"] . "</td>
        <td> " . $row["Price"] . " Lei</td>
        <td> " . $row["Price"]*$row["Quantity"] . " Lei</td>
        </tr>";
    }
    //$id = rtrim($id, ", ");
    echo "<tr><td></td><td></td><td></td><td></td><td>Total: " . $sum . " Lei</td></tr>";
    ?>
                            </tbody>
                        </tbody>
                    </table>
        <button type="submit" class="btn">Trimite comanda</a>
      </form>
      
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</body>
</html>