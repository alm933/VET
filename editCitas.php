<?php 
include("db.php");
if(isset($_GET['idSolicitarCita'])){
    $idSolicitarCita = $_GET['idSolicitarCita'];
    $query = "SELECT * FROM solicitarcita WHERE idSolicitarCita = $idSolicitarCita";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        //echo 'tu puedes editarlo';
        $row = mysqli_fetch_array($result);
        $Fecha = $row['Fecha'];
        //echo $Fecha;
        $hora = $row['hora'];

//        echo $Fecha;
  //      echo $hora;
    //    echo $idSolicitarCita;
    }
}
    if(isset($_POST['update'])){
        //echo 'updating' ;
        $idSolicitarCita = $_GET['idSolicitarCita'];
        $Fecha = $_POST['Fecha'];
        $hora = $_POST['hora'];

      //  echo $Fecha;
        //echo $hora;
        //echo $idSolicitarCita;

       $query = "UPDATE solicitarcita set Fecha = '$Fecha' , hora='$hora' WHERE idSolicitarCita=$idSolicitarCita";
         mysqli_query($conn,$query);
         header("Location: historial_cita.php");          

    }
?>

<?php include("include>/header.php") ?>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="editCitas.php?idSolicitarCita=<?php echo $_GET['idSolicitarCita'];?>" method="POST">
                            <div class="form-group">
                                <h1>Editar Fecha y hora </h1>
                                <input type="text" name="Fecha" value ="<?php echo $Fecha; ?>" class="form-control" placeholder='Update Fecha'>
                            </div>
                            <div class="form-group">
                                <textarea name="hora" rows="2" class= "form-control" placeholder="hora"><?php echo $hora; ?> </textarea>
                            </div>
                            <button class="btn btn-success p-3" name ="update">
                                CAMBIAR
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include("include>/footer.php") ?>