<?php
session_start();
if (!isset($_SESSION['id'])) {
    die("Acceso denegado. Debes <a href='login.php'>iniciar sesión</a>.");
}
$materia_id = $_POST['materia_id']; 
$estudiante_id = $_SESSION['id'];
$anio = $_POST['anio']; 

$sql = "INSERT INTO materias_inscriptas (materia_id, estudiante_id, anio) VALUES ('$materia_id','$estudiante_id','$anio')";
require "../enlace.php";
$resultado = $mysqli->query($sql);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $materia_id = $_POST['materia_id'];
    $accion = $_POST['accion'];
    
    if ($accion === 'inscribir') {
        if ($resultado) {
            echo '<script>
        alert("Se Inscribio en la Materia")
        self.location="materias.php"
        </script>';
        } else {
            echo "Error al inscribir la materia";
        }
    } elseif ($accion === 'baja') {
        $delete = "DELETE FROM materias_inscriptas WHERE materia_id='$materia_id'";
        $result = $mysqli->query($delete);
        
        if ($result) {
             echo '<script>
        alert("Se Dio de Baja en la Materia")
        self.location="materias.php"
        </script>';
        } else {
            echo "Error al dar de baja la materia";
        }
    }
}
?>