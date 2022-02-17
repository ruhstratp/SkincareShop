<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/icon.png">
    <title>SkinCare | Online SkinCare Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-bottom:200px">
    <!--Header-->
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>

 <!-- Home page -->   
<section class="home-1st pt-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 d-lg-flex my-5 text-center text-lg-left">  
                <div class="text-dark align-self-center justify-self-center">
                    <h1>Bine ați venit!</h1>
                    <t>
                    <p>Această pagină este dedicată tuturor persoanelor care doresc să își îmbunătățească aspectul pielii lor!
                       Este site-ul perfect pentru a cunoaște mai bine nevoile tenului tău și totodată, produsele sunt alese 
                       cu mare grijă și iubire! 
                       Așa că, să înceapă schimbarea!
                    </p>
                    <a href="products.php" class="btn btn-olive btn-lg text-white">Cumpără acum</a>
                </div>     
            </div>
            <div class="col-12 col-lg-6">
                <img src="images/home.jpg" alt="" class="d-block mx-auto mt-4 img-width-fix" style="border-radius:3px">
            </div>
        </div>
    </div>
</section> 
<!-- Partea cu tipuri de ten --> 
<section class="home-2nd mt-5 py-5">
    <div class="container">
        <div class="text-center pb-5">
            <h4 class="title-with-bg d-inline-block text-white">Ce tip de ten ai?</h4>
        </div>
        <div class="row text-center">
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#dryskin"> <img src="images/dryskin.jpg" class="img-fluid" alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                       <h5 style="color:#BABBB9">Ten Uscat</h5> 
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3 " >
                <a href="products.php#oilyskin"  >
                    <img src="images/oilyskin.jpg" class="img-fluid zoom" alt="" style="border-radius:0.5rem" >
                        <div class="h5 pt-3 font-weight-bolder">
                            <h5 style="color:#BABBB9">Ten Gras</h5>  
                        </div>
                    </a>
                </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#combskin">
                    <img src="images/combskin.jpg" class="img-fluid" alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                        <h5 style="color:#BABBB9">Ten Mixt</h5>
                    </div>
                </a>
                </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#dehyskin">
                    <img src="images/dehyskin.jpg" class="img-fluid  " alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                        <h5 style="color:#BABBB9">Ten Deshidratat</h5> 
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- carusel -->
<div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/ser_krave.jpg" class="d-block carousel-image-my" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/cleanser_yttp.jpg" class="d-block carousel-image-my" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/spf.jpg" class="d-block carousel-image-my" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev" onclick="schimbapoza(-1)">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next" onclick="schimbapoza(+1)"> 
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>    

    <!--Footer -->
<?php include 'includes/footer.php'?>

<!-- Home page ends -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="main.js"></script>
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
