<?php
$usuario = $_POST["usuario"];
$contrasenia = $_POST["contrasenia"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$carrera_id=$_POST["carrera_id"];
$anio_ingreso=$_POST["anio_ingreso"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];

$insert = "insert into estudiantes (nombre, apellido, dni, usuario, contrasenia,carrera_id,anio_ingreso,email,telefono) VALUES ('$nombre','$apellido','$dni','$usuario','$contrasenia','$carrera_id','$anio_ingreso','$email','$telefono')";

require '../enlace.php';
$result = $mysqli->query($insert);                      

echo '<script>
alert("Se agrego el usuario")
self.location="login.php"
</script>';
?>             