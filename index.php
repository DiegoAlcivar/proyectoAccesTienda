<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


<!-- Cover -->
<main>
  <div class="hero">
    <a href="shop.php" class="btn1">Ver todos los productos
    </a>
  </div>
  <!-- Main -->
  <div class="wrapper">
    <h1>COLECCION DESTACADA<h1>

  </div>

  <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

      <?php

      getPro();

      ?>

    </div><!-- row Ends -->

  </div><!-- container Ends -->
  <!-- FOOTER -->
  <?php include("includes/footer.php") ?>
  </body>

  </html>