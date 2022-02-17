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
    <title>SkinCare | Online Skincare Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #f1f1f1">
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<!-- header -->
<div class="container" style="margin-top:65px">
         <!--jumbotron -->
        <div class="jumbotron text-center">
            <h1>Bine ai venit în lumea frumuseții!</h1>
            <t><t><t>
            <p>Aici vei găsi produsele potrivite pentru nevoile tenului tău! Aceste rutine au fost create special pentru fiecare tip de ten și au niște rezultate nemaipomenite!</p>
        </div>
        <!--breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Acasă</a></li>
                <li class="breadcrumb-item active" aria-current="page">Produse</li>
            </ol>
        </nav>
    <hr/>

<!--Menu list-->
<section class="producs-list"></section>
    <!-- Ten uscat-->
    <h3 class="text-center mt-3 mb-4" style="color: #3c4226; text-decoration:underline;">Rutină adecvată tenului uscat</h3>
    <div class="row text-center" id="dryskin">
        <div class="col-12 col-md-6 col-lg-3 py-2">
            <div class="card">
                <img src="images/cleanser1.jpg" alt="" class="img-fluid py-2" >
                <div class="figure-caption">
                    <h6><em>La Roche-Posay</em></h6>
                    <h6>Cleanser Hidratant</h6>
                    <h6>400 ml</h6>
                    <h6><b>Preț:</b> 58.90 lei</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a><p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 py-2">
            <div class="card">
                <img src="images/ser1.jpg" alt="" class="img-fluid py-2">
                <div class="figure-caption">
                    <h6><em>RNW</em></h6>
                    <h6>Ser hidratant</h6>
                    <h6>30 ml</h6>
                    <h6><b>Preț:</b> 125.00 lei</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(2)) {
                        echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                         } else {
                        ?>
                        <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                        <?php
                         }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 py-2">
            <div class="card">
                <img src="images/crema1.jpg" alt="" class="img-fluid py-2">
                <div class="figure-caption">
                    <h6><em>Rilastil</em></h6>
                    <h6>Cremă intens hidratantă</h6>
                    <h6>40 ml</h6>
                    <h6><b>Preț:</b> 52.15 lei</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                        echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 py-2">
            <div class="card">
                <img src="images/spf1.jpg" alt="" class="img-fluid py-2">
                <div class="figure-caption">
                    <h6><em>ISNTREE</em></h6>
                    <h6>SPF cu efect hidratant</h6>
                    <h6>50 ml</h6>
                    <h6><b>Preț:</b> 97.28 lei</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(4)) {
                        echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Ten gras -->
    <h3 class="text-center mt-3 mb-4" style="color: #3c4226; text-decoration:underline;">Rutină adecvată tenului gras</h3>
    <div class="row text-center" id="oilyskin">
            <div class="col-12 col-md-6 col-lg-3 py-3" >
                <div class="card">
                    <img src="images/cleanser2.jpg" alt="" class="img-fluid py-2"  >
                    <div class="figure-caption">
                    <h6><em>Acnemy</em></h6>
                    <h6>Cleanser Purifiant</h6>
                    <h6>150 ml</h6>
                    <h6><b>Preț:</b> 45.00 lei</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="card">
                    <img src="images/ser2.jpg" alt="" class="img-fluid py-2" >
                    <div class="figure-caption">
                    <h6><em>Revox</em></h6>
                    <h6>Ser exfoliant</h6>
                    <h6>30 ml</h6>
                    <h6><b>Preț:</b> 21.50 lei</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(6)) {
                        echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                        <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="card">
                    <img src="images/crema2.jpg" alt="" class="img-fluid py-2">
                    <div class="figure-caption">
                    <h6><em>Purito</em></h6>
                    <h6>Cremă hidratantă</h6>
                    <h6>50 ml</h6>
                    <h6><b>Preț:</b> 100.50 lei</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(7)) {
                    echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                    <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 py-3" >
                <div class="card">
                    <img src="images/spf2.jpg" alt="" class="img-fluid py-2">
                    <div class="figure-caption">
                    <h6><em>SVR</em></h6>
                    <h6>SPF cu efect matifiant</h6>
                    <h6>50 ml</h6>
                    <h6><b>Preț:</b> 53.20 lei</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ten mixt -->
        <h3 class="text-center mt-3 mb-4" style="color: #3c4226; text-decoration:underline;">Rutină adecvată tenului mixt</h3>
        <div class="row text-center" id="combskin" >
                <div class="col-12 col-md-6 col-lg-3 py-3">
                    <div class="card">
                        <img src="images/cleanser3.jpg" alt="" class="img-fluid py-2">
                        <div class="figure-caption">
                        <h6><em>Youth To The People</em></h6>
                        <h6>Cleanser antioxidant</h6>
                        <h6>237 ml</h6>
                        <h6><b>Preț:</b> 135.00 lei</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(9)) {
                    echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-3">
                    <div class="card">
                        <img src="images/ser3.jpg" alt="" class="img-fluid py-2">
                        <div class="figure-caption">
                        <h6><em>The Ordinary</em></h6>
                        <h6>Ser reparator</h6>
                        <h6>30 ml</h6>
                        <h6><b>Preț:</b> 31.25 lei</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(10)) {
                    echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                    } else {
                    ?>
                     <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                     <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-3">
                    <div class="card">
                        <img src="images/crema3.jpg" alt="" class="img-fluid py-2">
                        <div class="figure-caption">
                        <h6><em>Benton</em></h6>
                        <h6>Cremă hidratantă</h6>
                        <h6>50 ml</h6>
                        <h6><b>Preț:</b> 99.80 lei</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(11)) {
                    echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-3" >
                    <div class="card">
                        <img src="images/spf3.jpg" alt="" class="img-fluid py-2">
                        <div class="figure-caption">
                        <h6><em>Purito</em></h6>
                        <h6>Spf cu efect hidratant</h6>
                        <h6>60 ml</h6>
                        <h6><b>Preț:</b> 99.50 lei</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(12)) {
                    echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ten deshidratat -->
            <h3 class="text-center mt-3 mb-4" style="color: #3c4226; text-decoration:underline;">Rutină adecvată tenului deshidratat</h3>
            <div class="row text-center" id="dehyskin">
                    <div class="col-12 col-md-6 col-lg-3 py-3" >
                        <div class="card">
                            <img src="images/cleanser4.jpg" alt="" class="img-fluid py-2">
                            <div class="figure-caption">
                            <h6><em>CosrX</em></h6>
                            <h6>Cleanser reparator</h6>
                            <h6>150 ml</h6>
                            <h6><b>Preț:</b> 44.80 lei</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(13)) {
                    echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 py-3">
                        <div class="card">
                            <img src="images/ser4.jpg" alt="" class="img-fluid py-2">
                            <div class="figure-caption">
                            <h6><em>Krave Beauty</em></h6>
                            <h6>Ser reparator și hidratant</h6>
                            <h6>40 ml</h6>
                            <h6><b>Preț:</b> 215.00 lei</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(14)) {
                    echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=14" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 py-3">
                        <div class="card">
                            <img src="images/crema4.jpg" alt="" class="img-fluid py-2">
                            <div class="figure-caption">
                            <h6><em>La Roche Posay</em></h6>
                            <h6>Cremă hidratantă și reparatoare</h6>
                            <h6>100 ml</h6>
                            <h6><b>Preț:</b> 45.20 lei</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(15)) {
                    echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=15" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                   <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 py-3">
                        <div class="card">
                            <img src="images/spf4.jpg" alt="" class="img-fluid py-2">
                            <div class="figure-caption">
                            <h6><em>Avene</em></h6>
                            <h6>Spf cu efect hidratant</h6>
                            <h6>150 ml</h6>
                            <h6><b>Preț:</b> 63.99 lei</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-olive  text-white ">Adaugă în coș</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(16)) {
                    echo '<p><a href="#" class="btn btn-olive  text-white" disabled>A fost adaugat in cos</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-olive  text-white">Adaugă în coș</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
      <br>
      <!--menu list ends-->

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