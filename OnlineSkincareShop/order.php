<?php
require "includes/common.php";
session_start();
if (!isset($_SESSION['email']) && $_SESSION['admin']==0) {
   header('location: index.php');
}
$order_id=$_GET["id"];
$query="SELECT * from orders WHERE id='$order_id'";
$result = mysqli_query($con, $query);
$order=mysqli_fetch_array($result);
$products=explode(",", $order["products_order"]);
?>
<html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/icon.png">
    <title>SkinCare | Online Skincare Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <form class="mt-4" action="change_order_status.php" method="post">
            <div class="container">
<?php
$i=0;
while($i<count($products)){
    $product=explode(".", $products[$i]);
    echo "<br><p>Produs: ".$product[0]."</p><p>Cantitate: ".$product[1]."</p><p>Împachetat: <input type='checkbox' required"; 
    if(strcmp($order["status"], "Done")){
    echo "</p>";
}
else{
    echo "checked></td></tr>";
}
    $i++;
}
?>
<input type="hidden" name="id" id="id" value="<?php echo $order_id?>">
<h5 class="my-4"><b>Date Utilizator:</b></h5>
<div class="row g-5">
    <div class="col col-md-6 col-lg-4">
        <?php echo "Nume: ".$order["name"].PHP_EOL;?>
    </div>
    <div class="col col-md-6 col-lg-4">
        <?php echo "Email: ".$order["email"].PHP_EOL;?>
    </div>
    <div class="col col-md-6 col-lg-4">
        <?php echo "Telefon: ".$order["phone"].PHP_EOL;?>
    </div>
    <div class="col col-md-6 col-lg-4 pt-2 pt-md-3">
        <?php echo "Adresa: ".$order["address"].PHP_EOL;?>
    </div>
    <div class="col col-md-6 col-lg-4 pt-2 pt-md-3">
        <?php echo "Oras: ".$order["city"].PHP_EOL;?>
    </div>
    <div class="col col-md-6 col-lg-4 pt-2 pt-md-3">
        <?php echo "Judet: ".$order["county"].PHP_EOL;?>
    </div>
    <div class="col col-md-6 col-lg-4 pt-2 pt-md-3">
        <?php echo "Cod Postal: ".$order["postal_code"].PHP_EOL;?>
    </div>
</div>
<div class="mt-5">
    <?php if($order["status"]=="Processing"){?>
        Status: în procesare
</div>
<input type="hidden" name="status" id="status" value="Done">
<input type="submit" value="Comanda impachetata si trimisa">
<?php } else {?>
Status: Trimisă
<br><br>
    <input type="hidden" name="status" id="status" value="Processing">
<input type="submit" value="Anuleaza statusul comenzii">
<?php } ?>   
</div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
