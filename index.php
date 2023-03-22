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
          <div class="footer-nav__heading"></div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <!--<a href="#" class="footer-nav__link">La Marca</a>
            </li>
            <li class="footer-nav__item">
              <a href="localstore.php" class="footer-nav__link">Tiendas Locales</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Servicio al Cliente</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Privacidad &amp; cookies</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Mapa del Sitio</a>
            </li>-->
          </ul>
        </div>

        <div class="footer-nav__col footer-nav__col--whybuy">
          <!--<div class="footer-nav__heading">PORQUE COMPRAR CON NOSOTROS?</div>
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
            </li>-->
          </ul>
        </div>

        <div class="footer-nav__col footer-nav__col--account">
          <div class="footer-nav__heading">TU CUENTA</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="checkout.php" class="footer-nav__link">Iniciar sesión</a>
            </li>
            <li class="footer-nav__item">
              <a href="customer_register.php" class="footer-nav__link">Registrar</a>
            </li>
            <li class="footer-nav__item">
              <a href="cart.php" class="footer-nav__link">Ver carrito</a>
            </li>
            <li class="footer-nav__item">
              <a href="index.php" class="footer-nav__link">Ver su catálogo</a>
            </li>
            <!-- <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Seguimiento de un pedido</a>
            </li>-->
            <li class="footer-nav__item">
              <a href="customer/my_account.php?edit_account" class="footer-nav__link">Actualizar información</a>
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
            <a href="mailto:atencionalcliente@accesworldtravel.com" class="email__addr">atencionalcliente@accesworldtravel.com</a>
          </div>
        </div>

      </div>
    </div>

    <div class="banners">
      <div class="container clearfix">

        <div class="banner-award">
          <span>INK</span><br> PORTECH 2023
        </div>

        <div class="banner-social">
          <a href="https://www.facebook.com/accesworldtravel" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
          <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
          <a href="https://www.instagram.com/accesworldtravel.s.a/" class="banner-social__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
  <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
</svg>
          </a>
          <a href="#" class="banner-social__link">
          <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg>
          </a>
        </div>

      </div>
    </div>

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