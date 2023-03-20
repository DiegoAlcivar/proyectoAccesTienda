</head>

<body>

    <!-- topline -->
    <div class="page-header__topline container-fluid">
      <div class=" clearfix col-8 col-md-12">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Bienvenido"; 
          }
          else
          { 
              echo "Bienvenido : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> Productos
          </a>
        </div>
        
        
        <ul class="login">

<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="customer_register.php" class="login__link">Registro</a>';
} 
  else
  { 
      echo '<a href="customer/my_account.php?my_orders" class="login__link">Mi cuenta</a>';
  }   
?>  
</li>


<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="checkout.php" class="login__link">Iniciar Sesion</a>';
} 
  else
  { 
      echo '<a href="./logout.php" class="login__link">Cerrar Sesion</a>';
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
          <a class="logo__link" href="index.php">
            <img class="logo__img" src="images/inicio.png" alt="Avenue fashion logotype" width="27" height="27">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <!-- <li class="categories__item">
              <a class="categories__link" href="#">
                HOMBRES
               
              </a>
              </li>

            <li class="categories__item">
              <a class="categories__link" href="#">
                MUJERES
               
              </a>
            </li>-->

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
                TIENDA
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="localstore.php">
                SOBRE NOSOTROS
              </a>
            </li>

          <li class="categories__item">
              <a class="categories__link" href="customer/my_account.php?my_orders">
                MI CUENTA
              </a>
            <!--  <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Account Settings</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">My Wishlist</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">My Orders</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">View Shopping Cart</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Edit Your Account</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Change Password</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Delete Account</a>
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