   <php session_start(); >
    <?php
    include("db.php");
    include("include/header.php");
    ?>

    <?php
    if(isset($_SESSION["session_email"])){
        // echo "Session is set"; // for testing purposes
        //header("Location: page.php");
 
}

if(isset($_POST["login"])){

if(!empty($_POST['correo']) && !empty($_POST['contraseña'])) {
$email=$_POST['correo'];
$password=$_POST['contraseña'];
$query ="SELECT * FROM cliente WHERE email='$email' AND contraseña='$password'";
$result = mysqli_query($conn,$query);
$numrows=mysqli_num_rows($result);

echo $numrows;

 if($numrows==1){
    $query2 = "UPDATE cliente set ingreso = '1' where email = '$email'";
    $result = mysqli_query($conn,$query);
    header("Location: page.php");
}
else {header("Location: index.php");}



}
}
?>