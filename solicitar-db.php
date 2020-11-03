<?php 

include('db.php');


if(isset($_POST['solicitar-db'])){
    
    $nombreC=$_POST['nombreC'];
    $nombreV=$_POST['nombreV'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
}
                        
                        $query2="SELECT * FROM veterinaria WHERE nombre = '$nombreV'";
                        $result2 = mysqli_query($conn,$query2);
                        while($row = mysqli_fetch_array($result2)){

                        $codV = $row['codVeterinaria'];

                     
                        $query3="SELECT * FROM cliente WHERE nombre = '$nombreC'";
                        $result3 = mysqli_query($conn,$query3);
                        while($row = mysqli_fetch_array($result3)){
                        $dniC = $row['DNI'];
                        }
                        
//echo $nombreC;
//echo $fecha;
//echo $hora;
$query8 = "INSERT INTO solicitarcita (DniCliente, CodVeterinario, Fecha, hora) values ('$dniC','$codV','$fecha','$hora')";
$result8 = mysqli_query($conn, $query8);
if(!$result8){
    die("Query failed");}

    $_SESSION['message']='Task Saved succesfully';
    $_SESSION['message_type'] = 'success';
//echo 'SAVING';
header("Location: page.php");
}
?>