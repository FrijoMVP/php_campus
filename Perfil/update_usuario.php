<?php
session_start();
if(isset($_POST['Guardar']));
    $contrasenia=$_POST['contrasenia'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $dni=$_POST['dni'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    require '../enlace.php';
     
$update= "UPDATE estudiantes SET contrasenia='$contrasenia',nombre='$nombre',apellido='$apellido',dni='$dni',email='$email',telefono='$telefono' WHERE id = " . $_SESSION['id'];
$result=$mysqli->query($update);
if($result){
    echo'<script>
alert("Se Modificaron los Datos Correctamente, Porfavor Inicie Sesion Nuevamente")
self.location="Logout.php"
</script>';

}
?>

