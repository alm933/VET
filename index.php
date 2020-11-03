<?php
    include("db.php");
    
?>


<?php include("include/header.php");  ?>
<link rel="stylesheet" href="estyle.css"></link:rel>
<form action="login.php" method="POST">
    <section class="form-register">
        <h4>Login</h4>
        <input class="controls"type="text" name="correo" id="correo" placeholder="Ingrese su correo  o nro. de telefono" autofocus>
        <input class="controls" type="text" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña">
        <button  class="botons" name ="login">Iniciar Sesion</button>
</form>
        <form action="register.php" method="POST">
       <a href="register.php" class="btn btn-danger">Registrarse</a>
        </form>
    </section>
<?php include("include/footer.php"); ?>
