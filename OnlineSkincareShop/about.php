<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="images/icon.png">
  <title>SkinCare| Online Skincare Shop</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
<?php
  include 'includes/header_menu.php';
  include 'includes/check-if-added.php';
?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h2 class=" pt-3 title text-center" style="color:#5d6442"> Cine sunt eu ?</h2>
          <hr/>
          <img
            src="images/whoami.jpg"
            class="img-fluid d-block rounded mx-auto image-thumbnail">
          <p class="mt-2" align="justify">Bună! :) Numele meu este Patricia și în momentul de față sunt studentă în anul 2 la Universitatea de Vest Timișoara,
          Facultatea de Matematică și Informatică.  De mică am fost pasionată de tehnologie și de cum pot simplifica viața mea și a celor din
          jur. De aceea, din dorința de a ajuta cât mai mulți oameni, m-am gândit să creez acest website. Totodată, îmi place enorm faptul că
          pot îmbina atât de frumos și de fin cele 2 mari pasiuni ale mele, IT-ul și SkinCare-ul. Îmi place că cele două se pot combina perfect 
          și totodată ajung să ajut o mulțime de oameni, ceea ce îmi bucură sufletul tare mult! Așadar, prin intermediul acestui site, doresc
          să împărtășesc din cunoștințele mele legate de îngrijirea pielii, pe care le-am acumulat într-un parcurs de 5 ani. Vreau să educ oamenii
          în privința acestui subiect și totodată să le ofer soluții pentru diversele lor probleme.   
        </p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
            <h1 class="title" style="color:#5d6442">De ce SkinCare ?</h1>
          </span>
          <hr>
          <p align="justify"> Ei bine, cum am spus și anterior, de 5 ani tot învăț și experimentez "pe pielea mea" acest domeniu. La început a fost o nevoie,
            fiindcă mi se declanșase o acnee severă, care mi-a diminuat mult din încrederea de sine și m-a făcut să încep să cercetez tot mai
            mult singură, deoarece până și dermatologii nu mi-au oferit un ajutor prea mare, ba chiar unii au înrăutățit situația. Așadar, zi de 
            zi am stat și am căutat soluții pe diverse forumuri unde se aflau mai multe fete în aceeași situație. După care am început să citesc 
            mai multe cărți dermatologice recomandate de mai multe persoane experte în domeniu. Și tot așa, citind zi de zi, desenându-mi tot felul
            de scheme de rutine pentru tenul meu, am început să-l cunosc mai bine, să-i aflu nevoile care erau influențate fie de alimentație, fie
            de schimbările climatice, fie de mediul inconjurător (poluare, praf etc.). După ce am ajuns să-i aflu "secretele" tenului meu, am început
            să îmi iau si familia la rând. M-am documentat despre tenurile lor, le-am gândit scheme personalizate de rutine, le-am achiziționat produse 
            cu ingrediente aferente nevoilor lor și dupa puțin timp au dat rezultate nemaipomenite și la ei! A fost cea mai mare bucurie să văd ca am 
            putut face mai multe fețe fericite, și la propriu, și la figurat :) . Așadar, sper ca prin prisma acestui site să obțin acelaș rezultat, dar 
            înmulțit !
          </p>
          <img
            src="images/pasiune.jpg"
            class="img-fluid d-block rounded mx-auto image-thumbnail">
        </div>
      </div>
    </div>
  </div>

  <div class="container pb-3">
  </div>
  <section class="mb-5">
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12" action="https://formspree.io/patricia.ruhstrat@gmail.com" method="POST" name="_next">
      <h3 class=" pt-3 title mx-auto" style="color:#5d6442">Formular De Contact</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Adresa de e-mail:</label>
        <input type="email" class="form-control" id="exampleFormControlInput1"
          name="email">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Mesaj:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-secondary">Trimite</button>
    </form>
  </div>
    </section>
  </div>
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->

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
