<?php 
include("db.php");
if(isset($_GET['idSolicitarCita'])){
    $idSolicitarCita = $_GET['idSolicitarCita'];
    $query = "DELETE FROM solicitarcita where idSolicitarCita = $idSolicitarCita";
    $result=mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message']='Task Removed Sucessfuly';
    $_SESSION['message_type']='danger';
    header("Location: historial_cita.php");

}

?>