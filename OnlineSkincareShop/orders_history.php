<?php
require "includes/common.php";
session_start();
if (!isset($_SESSION['email']) && $_SESSION['admin']==0) {
   header('location: index.php');
}
$query="SELECT * from orders";
$result = mysqli_query($con, $query);
?>
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
<div class="d-flex justify-content-center">
<div class=" col-md-6  my-5 table-responsive p-5">
<table class="table table-striped table-bordered table-hover ">
<thead>
                            <tr>
                                <th>Nr. comandă</th>
                                <th>Status</th>
                                <th></th>
                                </tr>
                        </thead>
                        <tbody>
<?php
 if(mysqli_num_rows($result)>=1)
 {
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["status"]."</td><td class='pe-5'><a href='order.php?id={$row['id']}' class='remove_item_link' style='color:#790e0e;'> Deschide comanda</a></td>";
    }

 }
 else{
     ?>
     <h1>Nu ai comenzi care trebuie procesate!</h1>
     <?php
 }
?>
</tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>