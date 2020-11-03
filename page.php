<?php
    include("db.php");
  
  ?>
  

<?php
$query = "SELECT * FROM cliente WHERE ingreso = '1' ";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_array($result)){

  $nombre = $row['nombre'];
  $apellido = $row['apellido'];

}
?>



  <?php include("include/header.php")?>
    <link rel="stylesheet" href="vet.css">
    
  <h1>bienvenido..... <?php echo$apellido; echo ' , ';  echo $nombre;?> </h1>
  <div class="container p-4 center-h center-v">
    <div class="col-md-4">
    <form action="solicitar_cita.php" class="p-1">
        <input type="submit" class="btn btn-success btn-block" name="solicitar_cita" value="Solicitar Cita" action = "solicitacita.php" method="POST">
      </form>
      <form action="historial_cita.php" class="p-1">
      <input type="submit" class="btn btn-success btn-block" name="historial_cita" value="Historial Cita Solicitadas" action = "Historialcita.php" method="POST">
      </form>
      <form action="lastdescriptionRevision.php" class="p-1">
      <input type="submit" class="btn btn-success btn-block" name="lastdescriptionRevision" value="Datos de ultima Resion" action = "solicitacita.php" method="POST">
      </form>
      <form action="cronograma_cita.php" class="p-1">
      <input type="submit" class="btn btn-success btn-block" name="cronograma_cita" value="Cronograma de Visitas" action = "solicitacita.php" method="POST">
      </form>
      <form action="Comprar.php" class="p-1">
      <input type="submit" class="btn btn-success btn-block" name="comprar_medicamentos" value="Comprar Medicamentos" action = "solicitacita.php" method="POST">
      </form>
      </div>
    </div>




  <?php include("include/footer.php")?>