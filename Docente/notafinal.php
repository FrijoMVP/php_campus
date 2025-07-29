<?php
require "../enlace.php";

$estudiante_id = $_POST['estudiante_id'];
$materia_id = $_POST['materia_id'];
$nota_final = $_POST['nota_final'];

$update= "UPDATE materias_inscriptas 
        SET nota_final = '$nota_final' 
        WHERE estudiante_id = '$estudiante_id' and materia_id='$materia_id'";
if ($mysqli->query($update)) {
     echo '<script>
        alert("Se Califico Correctamente")
        self.location="campus_docente.php"
        </script>';
} else {
    echo "Error: " . $mysqli->error;
}

$mysqli->close();
?>