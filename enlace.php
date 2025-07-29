<?php 
$servidor="localhost";
$usuarios="root";
$password="";
$base_de_datos="sistema_gestion_e";

$mysqli= new mysqli($servidor,$usuarios,$password,$base_de_datos);

$query_carreras = $mysqli->query("SELECT id, nombre_carrera FROM carreras");
$carreras = $query_carreras->fetch_all(MYSQLI_ASSOC);

$query_materias = $mysqli->query("SELECT id, nombre FROM materias");
$materias = $query_materias->fetch_all(MYSQLI_ASSOC);

$query_inscri_materias = $mysqli->query("SELECT id FROM materias");
$inscri_materias = $query_inscri_materias->fetch_all(MYSQLI_ASSOC);
 
$query_estudiante = $mysqli->query("SELECT nombre, id FROM estudiantes");
$estudiantes = $query_estudiante->fetch_all(MYSQLI_ASSOC);
?>