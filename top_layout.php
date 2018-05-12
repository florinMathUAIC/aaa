<?php
function welcome($cookie) 
{
    if(isset($cookie))
    {
        echo '<tr><td><h5><font color="white"> Welcome, '.$_COOKIE["username"].'</font></h5></td></tr>
              <tr><td><input type="submit" name="logout" value="Logout"></td></tr>';
    }else echo '';
} ?>
<?php
echo ' 
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <?php if (isset($_COOKIE["username"])) { ?>
          <form method="post "name="logout" action="logout.php">
          <table>
              <tr><td><h5><font color="white"> Welcome, '.$_COOKIE["username"].'</font></h5></td></tr>
              <tr><td><input type="submit" name="logout" value="Logout"></td></tr>
              
          </table>
          </form>
          <?php } ?>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
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
    </nav>';
