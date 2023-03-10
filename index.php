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
  <footer class="page-footer">

    <div class="footer-nav">
      <div class="container clearfix">

        <div class="footer-nav__col footer-nav__col--info">
          <div class="footer-nav__heading">INFORMACION</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">La Marca</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Tiendas Locales</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Servicio al Cliente</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Privacidad &amp; cookies</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Mapa del Sitio</a>
            </li>
          </ul>
        </div>

        <div class="footer-nav__col footer-nav__col--whybuy">
          <div class="footer-nav__heading">PORQUE COMPRAR CON NOSOTROS?</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Envío &amp; devoluciones</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Envío seguro</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Testimonios</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Ganador de premio </a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Comercio ético</a>
            </li>
          </ul>
        </div>

        <div class="footer-nav__col footer-nav__col--account">
          <div class="footer-nav__heading">TU CUENTA</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Iniciar sesión</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Registrar</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Ver carrito</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Ver su catálogo</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Seguimiento de un pedido</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Actualizar información</a>
            </li>
          </ul>
        </div>


        <div class="footer-nav__col footer-nav__col--contacts">
          <div class="footer-nav__heading">DETALLES DE CONTACTO
          </div>
          <address class="address">
            AV. AMAZONAS Y AV. MARIANA DE JESUS<br>
            EDIF. BAEZ PISO 4 OFICINA NRO 404
          </address>
          <div class="phone">
            Telefono:
            <a class="phone__number" href="tel:0123456789">0989138892</a>
          </div>
          <div class="email">
            Email:
            <a href="mailto:support@yourwebsite.com" class="email__addr">atencionalcliente@accesworldtravel.com</a>
          </div>
        </div>

      </div>
    </div>

    <!-- <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Award winner</span><br> Fashion awards 2016
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>

        </div>
      </div> -->

    <div class="page-footer__subline">
      <div class="container clearfix">

        <div class="copyright">
          &copy; <?php echo date("Y"); ?> INKPORTECH&trade;
        </div>

        <div class="developer">
          Developed by INKPORTECH
        </div>

        <div class="designby">
          Design by INKPORTECH
        </div>

      </div>
    </div>
  </footer>
  </body>

  </html>