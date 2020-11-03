<?php
include("db.php");
if(isset($_POST['register-db']))
{

  //  echo 'saving';

    $DNI = $_POST['dni'];
    $nombre = $_POST['nombreCliente'];
    $apellido = $_POST['apellidoCliente'];
    $telefono = $_POST['TelefonoCliente'];
    $password = $_POST['passwordCliente'];
    $email = $_POST['emailCliente'];
    $especie = $_POST['EspecieMascotaCliente'];
    $nombreMascota = $_POST['NombreMascota'];
/*
    echo $DNI ; 
    echo $nombre; 
    echo $apellido;
    echo $telefono;
    echo $password; 
    echo $email; 
    echo $especie;
    echo $nombreMascota ;
*/
    $query = "INSERT INTO cliente(DNI,nombre,apellido,ntelefono,email,contraseña,especieMascota,nombreMascota) VALUES('$DNI','$nombre','$apellido','$telefono','$password','$email','$especie','$nombreMascota')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Failed");
        }
        $_SESSION['message']='Usuario se Registro';
        $_SESSION['message_type'] = 'success';
        header("Location: index.php"); 
    }
    
    ?> 