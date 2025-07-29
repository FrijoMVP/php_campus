<?php
$materia=$_GET["id"];
require '../enlace.php';
$delete="DELETE FROM materias_inscriptas WHERE materia_id='$materia'";
$result=$mysqli->query($delete)


?>