<?php session_start() ?>
<?php
     $_SESSION["username"]="";
     //$_SESSION["password"]="guest";
     ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include 'header.php'; ?>
    <title>Smokemania Iasi</title>

  </head>

  <body>
    <?php if(isset($_COOKIE['username']))
        header("Location:index1.php");
        ?> 
      
    <!-- like plugin -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <form name="login" method="post" action="login.php"> 
            <table>
                <tr>
                    <td><h5 style="color:white;">Username</h5></td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><h5 style="color:white;">Password</h5></td>
                    <td><input type="password" name="password" width="15" height="5"></td>
                    <td><input type="submit" name="submit" value="Login"></td>
                </tr>
                <tr>
                    <td><a href="inregistrare.php"><h6><font color="yellow">Register</h6></a></td>
                    <td align="right"><h6 style="color:white;">Remember me</h6></td>
                    <td align="center"><input type="checkbox" name="rememberme" value="1"></td>
                </tr>
            </table>
        </form>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php $_SERVER['PHP_SELF']; ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
            <div class="fb-like" data-href="http://localhost/proiect/index.php" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Smokemania - Iasi</h1>
          <div class="list-group">
            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
              <input type="submit" class="btn btn-primary btn-block btn-lg" value="Lichide" name="lichide">
              <input type="submit" class="btn btn-primary btn-block btn-lg" value="Atomizoare" name="atomizoare">
              <input type="submit" class="btn btn-primary btn-block btn-lg" value="Baterii" name="baterii">
              <input type="submit" class="btn btn-primary btn-block btn-lg" value="Kituri" name="kituri">
              </form>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                  <img class="d-block img-fluid" src="images/img1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                  <img class="d-block img-fluid" src="images/img2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        <?php
        include 'connection.php';
        $sql='SELECT * FROM produse';
        $cat="produse";
        if(isset($_POST['lichide'])) { $sql='SELECT * FROM lichide'; $cat="lichide";}
        if(isset($_POST['atomizoare'])) {$sql='SELECT * FROM atomizoare';$cat="atomizoare";}
        if(isset($_POST['baterii'])) {$sql='SELECT * FROM baterii';$cat="baterii";}
        if(isset($_POST['kituri'])) {$sql='SELECT * FROM kituri';$cat="kituri";}
        $_SESSION["categorie"]=$cat;
        $query=mysqli_query($con,$sql)or die(mysqli_error($con));
        ?>
          <div class="row">
           <?php while ($row=mysqli_fetch_array($query)){ ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                  <?php echo "<a href=\"pagina_produs.php?id=".$row['id']."\"><img class='card-img-top' src=".$row['image']." alt=\"\"></a>"  ?>                
                <div class="card-body">
                  <h4 class="card-title">
                    <?php echo "<a href=\"pagina_produs.php?id=".$row['id']."\">".$row["product_name"]."</a>" ?>
                  </h4>
                  <h5><?php echo $row["price"]; ?> lei</h5>
                  <p class="card-text"></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
          <?php } ?>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
y>
</html>
