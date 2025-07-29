<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/carreras.css">
</head>
<body>
    <article>
<?php
session_start();
require '../enlace.php';

$carrera_id =$_SESSION['id'] ; 

$query = "SELECT `carreras`.`nombre_carrera`
        FROM `estudiantes`
        LEFT JOIN `carreras` ON `estudiantes`.`carrera_id` = `carreras`.`id`
        WHERE `estudiantes`.`usuario` = '" . $_SESSION['usuario'] . "'";
$resultado = $mysqli->query($query);

if ($resultado->num_rows > 0) {
    $carrera = $resultado->fetch_assoc();
    echo '<h3 class="h3php">Estás estudiando: ' . $carrera['nombre_carrera'] . '</h3>';
} else {
    echo "No se encontró la carrera.";
}

?>
    <h1> Plan de Estudio:</h1>
    <h2>Primer Año</h2>
    <ul>
        <li>Algoritmo Logica de Programacion</li>
        <li>Matematicas I</li>
        <li>Ingles Tecnico I</li>
        <li>Competencias Comunicativas</li>
        <li>Teoria de Sistemas y Organizaciones</li>
        <li>Ingenieria de Software</li>
        <li>Arquitectura del Computador y Redes</li>
        <li>Base de Datos I</li>
    </ul>
    <h2>Segundo Año</h2>
    <ul>
        <li>Programacion I</li>
        <li>Base de Datos II</li>
        <li>Analisis y Diseño de Sistemas</li>
        <li>Practicas Profesionalizantes I</li>
        <li>Matematicas II</li>
        <li>Ingles Tecnico II</li>
        <li>Programacion II</li>
        <li>Probalidad y Estadistica </li>
    </ul>
    <h2>Tercer Año</h2>
    <ul>
        <li>Analisis de la Realidad Social de Formosa</li>
        <li>Programacion III</li>
        <li>Practicas Profesionalizantes II</li>
        <li>Desarrollo Emprendedor</li>
        <li>Etica y Desarrollo Informatico</li>
        <li>Espacio de Definicion Institucional</li>
        <li>Proyecto de Software y Calidad</li>
    </ul>
    <a href="../campus.php">Volver</a>
</article>
</body>
</html>
