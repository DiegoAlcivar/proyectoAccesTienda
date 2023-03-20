<?php

session_start();

include("includes/db.php");

?>
<!DOCTYPE HTML>
<html>

<head>

    <title>Inicio de sesión de administrador</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/login.css">

</head>

<body>

    <div class="container"><!-- container Starts -->

        <form class="form-login" action="" method="post"><!-- form-login Starts -->

            <h2 class="form-login-heading">Inicio de sesión de administrador</h2>

            <input type="text" class="form-control" name="admin_email" placeholder="Correo electronico" required>

            <input type="password" class="form-control" name="admin_pass" placeholder="Contraseña" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login">

            Acceso

            </button>


        </form><!-- form-login Ends -->

    </div><!-- container Ends -->



</body>

</html>

<?php

if (isset($_POST['admin_login'])) {

    $admin_email = mysqli_real_escape_string($con, $_POST['admin_email']);

    $admin_pass = mysqli_real_escape_string($con, $_POST['admin_pass']);

    $get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";

    $run_admin = mysqli_query($con, $get_admin);

    $count = mysqli_num_rows($run_admin);

    if ($count == 1) {

        $_SESSION['admin_email'] = $admin_email;

        echo "<script>alert('Ha iniciado sesión en el panel de administración')</script>";

        echo "<script>window.open('index.php?dashboard','_self')</script>";
    } else {

        echo "<script>alert('El correo o la contraseña son incorrectos!')</script>";
    }
}

?>