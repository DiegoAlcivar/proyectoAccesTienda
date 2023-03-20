</head>
<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Welcome :Guest"; 
         } 
          else
          { 
              echo "Bienvenido : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="../cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> Productos
          </a>
        </div>
        
        
        <ul class="login">

          <li class="login__item">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '<a href="../customer_register.php" class="login__link">Register</a>';
          } 
            else
            { 
                echo '<a href="my_account.php?my_orders" class="login__link">Mi Cuenta</a>';
            }   
?>  
          </li>


          <li class="login__item">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '<a href="../checkout.php" class="login__link">Sign In</a>';
          } 
            else
            { 
                echo '<a href="../logout.php" class="login__link">Cerrar Sesion</a>';
            }   
?>  
            
          </li>
        </ul>
      
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="../index.php">
            <img class="logo__img" src="images/inicio.png" alt="inkportech logotype" width="28" height="28">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

           <!--  <li class="categories__item">
              <a class="categories__link" href="#">
                Hombres
                
              </a>
              </li>

            <li class="categories__item">
              <a class="categories__link" href="#">
                Mujeres
            
              </a>
            </li>-->

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
                TIENDA
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="../about.php">
              SOBRE NOSOTROS
              </a>
            </li>

          <li class="categories__item">
              <a class="categories__link" href="#">
                MI CUENTA
              </a>
            <!--  <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Configuraciones de la cuenta</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Mi lista de deseos</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Mis ordenes</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Ver carro de compras</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Edite su cuenta</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Cambiar la contraseña</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Borrar Cuenta</a>
                      </li>
                    </ul>
                  </div>
                </div>
             

              </div>-->

            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>