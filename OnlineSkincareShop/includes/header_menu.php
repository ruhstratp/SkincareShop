<!--Navigation bar-->
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<nav class="navbar w-100 navbar-expand-lg" id="navbar">
  <div class="container">
      <a href="index.php" class="navbar-brand d-inline-block" style="font-family: 'Comforter', cursive; font-size: 35px; margin-right: 15px">SkinCare Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" style="border: 1px solid white">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="nav navbar-nav ms-lg-3">
              <li class="nav-item dropdown">
                  <a href="products.php" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
                      Produse
                  </a>
                      <div class="dropdown-menu text-white" style="background-color: rgba(0,0,0,0.911)">
                          <a href="products.php#dryskin" class="dropdown-item">Ten Uscat</a>
                          <a href="products.php#oilyskin" class="dropdown-item">Ten Gras</a>
                          <a href="products.php#combskin" class="dropdown-item">Ten Mixt</a>
                          <a href="products.php#dehyskin" class="dropdown-item">Ten Deshidratat</a>
                      </div>
                  
              </li>
              <li class="nav-item"><a href="advices.php" class="nav-link">Sfaturi</a></li>
              <li class="nav-item"><a href="about.php" class="nav-link">Despre mine</a></li>
              <?php
              require "includes/common.php";
              if (isset($_SESSION['email'])) {
                $user_id = $_SESSION['user_id'];
                $query = " SELECT products.price AS Price, products.id, products.name AS Name, users_products.quantity as Quantity, users_products.item_id as id FROM users_products JOIN products ON users_products.item_id = products.id WHERE users_products.user_id='$user_id' and status='Added To Cart'";
$result = mysqli_query($con, $query);
              ?>
              <li class="nav-item"><a href="cart.php" class="nav-link">Coșul de cumparaturi <?php if(mysqli_num_rows($result)>=1){ ?> <span class='badge badge-olive text-dark' id='lblCartCount'> <?php echo mysqli_num_rows($result);}  ?> </span></a></li>
              <?php
                } 
          ?>
          </ul>
          
          <?php
      if (isset($_SESSION['email'])) {
          ?>
          <ul class="nav navbar-nav ml-auto">
          <?php  
          if(isset($_SESSION["admin"]))
          if($_SESSION["admin"]==1){ ?>
          <li class="nav-item"><a href="processing_orders.php" class="nav-link"><i class="fas fa-shopping-cart"></i> Comenzi noi</a></li>
          <li class="nav-item"><a href="orders_history.php" class="nav-link"><i class="	fas fa-history" ></i> Istoric comenzi</a></li>
          <?php } ?>    
          <li class="nav-item"><a href="logout_script.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
              <li class="nav-item"><a href="profile.php?user_id=<?php echo $_SESSION['user_id']; ?>" class="nav-link " data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i class="fa fa-user-circle "></i></a></li>
          </ul>
          <?php
      } else {
          ?>
          <ul class="nav navbar-nav ml-auto">
              <li class="nav-item "><a href="#signup" class="nav-link"data-toggle="modal" ><i class="far fa-user-circle"></i> Sign In</a></li>
              <li class="nav-item "><a href="#login" class="nav-link" data-toggle="modal"><i class="fas fa-sign-in-alt"></i> Login</a></li>
          </ul>
          <?php 
      }
          ?>
          </div>
      </div>
  </div>
</nav>

<!--Login trigger model-->
<div class="modal fade" id="login" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"style="background-color:rgba(255,255,255,0.95)">

      <div class="modal-header">
        <h5 class="modal-title"><u><b>Intrare în cont:</b></u></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="login_script.php" method="post">
            <div class="form-group">
                <label for="email">Adresă de e-mail:</label>
                <input type="email" class="form-control"  name="lemail" placeholder="Enter email" required>
          </div>
          <div class="form-group">
              <label for="pwd">Parola:</label>
              <input type="password" class="form-control" id="pwd"  name="lpassword" placeholder="Password" required>
          </div>
          <div class="form-check">
              <input type="checkbox" class="form-check-input">
              <label for="checkbox" class="form-check-label">Vreau să rămân conectat</label>
          </div>
          <button type="submit" class="btn btn-secondary btn-block" name="Submit">Intră în cont</button>
        </form>
        <a href="http://">Ai uitat parola?</a>
      </div>
      <div class="modal-footer">
        <p class="mr-auto">Îți creezi un cont? <a href="#signup" data-toggle="modal" data-dismiss="modal" >Creează-ți un cont</a></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Închide</button>
      </div>
    </div>
  </div>
</div>

<!--Signup model -->
<div class="modal fade" id="signup">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">

      <div class="modal-header">
        <h5 class="modal-title"><u><b>Înscrie-te:</b></u></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="signup_script.php" method="post">
          <div class="form-group">
                <label for="email">Adresă de e-mail:</label>
                <input type="email" class="form-control"  name="eMail" placeholder="Enter email" required>
                <?php if(isset($_GET['error'])){ echo "<span class='text-danger'>".$_GET['error']."</span>" ;}  ?>
          </div>
          <div class="form-group">
              <label for="pwd">Parola:</label>
              <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
          </div>

          <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="validation1">Prenume</label>
                  <input type="text" class="form-control" id="validation1" name="firstName" placeholder="First Name" required>
              </div>
              <div class="form-group col-md -6">
                  <label for="validation2">Nume</label>
                  <input type="text" class="form-control" id="validation2" name="lastName" placeholder="Last Name">
              </div>
          </div>
          
          <div class="form-check">
              <input type="checkbox" class="form-check-input" required>
              <label for="checkbox" class="form-check-label">Accept termenii și condițiile</label>
          </div>
          <button type="submit" class="btn btn-secondary btn-block" name="Submit">Creează-ți un cont</button>
        </form>
      </div>
      <div class="modal-footer">
        <p class="mr-auto">Ai deja un cont?<a href="#login"  data-toggle="modal" data-dismiss="modal">Intrare în cont</a></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Închide</button>
      </div>
    </div>
  </div>
</div>
