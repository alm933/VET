



<?php
    include('db.php');
    
?>
<?php 
           $query3 = "SELECT * FROM cliente WHERE ingreso = '1' ";
           $result = mysqli_query($conn,$query3);
           
           while ($row = mysqli_fetch_array($result)){
           
             $nombre2 = $row['nombre'];
             $dni = $row ['DNI'];
             

             
?>

<?php 
           }
?>
<?php 
                        $query="SELECT * FROM veterinaria ";
                        $result_taks = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result_taks)){
                            $nombre= $row['nombre'];
                            
                            ?>
                            


                            <?php } ?>
<?php
include('include/header.php');
?>
<h1>tabla para solicitar cita con el Veterinario    </h1>

<div class="container p-4 mx-8"> 
        <div class="row">
        <div class="col-md-4">

        <!--aca pruebo que existe -->
            
            <div class="card card-body">
                <form action="solicitar-db.php" method="POST">
                
                <div class="form-group">
                    <h4 >Nombre: <input type="text" value=<?php echo $nombre2?> name="nombreC"></h4>
                    <h4>Nombre de Veterinario: <input type="text" value=<?php echo $nombre?> name="nombreV">  </h4>
                    <h4>Ingresar Fecha:</h4>
                    <input type="text" name="fecha" class="form-control" 
                   placeholder="YYYY-MM-DD" autofocus>
                </div>
                <div class="form-group">
                    <h4>Hora:</h4>
                    <input type="text" name="hora"  class="form-control"
                    placeholder="Hora">
                </div> 
                <input type="submit" class="btn btn-success btn-block"
                 name="solicitar-db" value="Solicitar"> 

                </form>
            </div>
          </div>

                    <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Codigo de Veterinario</th>
                        <th>Especialidad</th<>
                        <th>Acciones</th<>
                    </tr>
                </thead>
                <tbody>
                      <tr>

                      <?php 
                        $query="SELECT * FROM veterinaria";
                        $result_taks = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result_taks)){?>


                                <td> <?php echo $row['nombre'] ?></td>
                                <td> <?php echo $row['email'] ?></td>
                                <td> <?php echo $row['codVeterinaria'] ?></td>
                                <td> <?php echo $row['especialidad'] ?></td>
                                <td> 
                                <a href="edit.php?id=<?php echo  $row['id']?>" class="btn btn-secondary">
                                <i class="far fa-save"></i>
                                </a>
                                <a href="delete_task.php?id=<?php echo  $row['id']?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                                </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>

            </div>
        </div>
    </div>
</div>

    <?php include("include/footer.php");  ?>
