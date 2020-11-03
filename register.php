<?php
    include("db.php");
    
?>


<?php include("include/header.php");  ?>
<div>

<h1>Registro de Cliente</h1>  
<form action="register-db.php" method="POST">
<div class="form-group">
<h4>DNI: <input type="text" placeholder="Ingresar Dni del cliente solo numueros" name='dni'></h4>
</div>

<div class="form-group"> <h4>Nombre : <input type="text" placeholder="Ingresar Nombre " name="nombreCliente"></h4> 
</div>

<div class="form-group"><h4>Apellidos <input type="text" placeholder="Ingresar  Apellido" name="apellidoCliente"></h4>
</div>
<div class="form-group"><h4>Numero de telefono:<input type="text" placeholder="Ingresar numero de telefono" name="TelefonoCliente"> </h4>
</div>
<div class="form-group">
    <h4>Contraseña :<input type="text" placeholder="Ingresar Contraseña" name="passwordCliente"></h4>
</div>
<div class="form-group">
    <h4>Email:<input type="text" placeholder="Ingresar email" name="emailCliente"></h4>
</div>
<div class="form-group"><h4>Epecie de la Mascota <input type="text" placeholder="Ingresar Especie de la Mascota" name="EspecieMascotaCliente"></h4>
</div>
<div class="form-group"><h4>Nombre de la Mascota <input type="text" placeholder="Ingresar Nombre de la Mascota" name="NombreMascota"></h4>
</div>
<input type="submit" value="Registrase" name="register-db">
</div>

   <!--?php header("Location: index.php"); ?>-->
</form>  

<?php include("include/footer.php"); ?>