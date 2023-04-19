<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">BOLT Sports Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>
<br><br><br>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Names</th>
      <th scope="col">ID</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Antonios Raafat</td>
      <td>20196536</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ahmed Fathy</td>
      <td>20197177</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mostafa Amin</td>
      <td> 20196732</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Abdelrahman mohamed</td>
      <td>20196815</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Fatma Samy</td>
      <td> 20196336</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Hazem hassan</td>
      <td> 20196466</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Amr ibrahim</td>
      <td>20196825</td>
    </tr>
  </tbody>
</table>

   
        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
