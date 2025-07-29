<?php
session_start();
require '../enlace.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/materias.css">
</head>
<body>    
    <article>
         <img src="../Elementos/img/Gemini_Generated_Image_5tqqs25tqqs25tqq (1).png" alt="" width="150px" height="150px">
        <h1>Bienvenido a Materias</h1>
        <form action="inscri_materia.php" method="post">
            
                <div class="form1">
                <label for="materia_id">Materias:</label>
                <select name="materia_id" id="materia_id" required>
                <option value="">-- Selecciona una materia --</option>
                <?php foreach ($materias as $materia): ?>
                <option value="<?php echo $materia['id']; ?>">
                <?php echo $materia['nombre']; ?>
                </option>
                <?php endforeach; ?>
                </select><br>
                <label for="anio">Año:</label><br>
                <input type="number" id="anio" name="anio" placeholder="Ingrese el Año de la materia:"><br>
                <div class="buttons">
                <button type="submit" name="accion" value="inscribir">Inscribirse</button>
                <button type="submit" name="accion" value="baja">Darse de Baja</button>
                </div>
                <a href="../campus.php">Volver</a>
                </div>
                <div class="form2">
                <?php
                    $sql = "SELECT materias.nombre, materias_inscriptas.nota_final 
                        FROM estudiantes
                        LEFT JOIN materias_inscriptas ON materias_inscriptas.estudiante_id = estudiantes.id
                        LEFT JOIN materias ON materias_inscriptas.materia_id = materias.id
                        WHERE estudiantes.id = ".$_SESSION['id'];
                        $resultado = $mysqli->query($sql);
                       
                        echo '<h3 class="materias">Tus materias inscriptas:</h3>';

                        if ($resultado->num_rows > 0) {
                        while($materia = $resultado->fetch_assoc()) {
                        echo '<p class="result">'.$materia['nombre'].'<br>Calificacion: '.$materia['nota_final']."</p>";
                        } 
                        }else {
                        echo "<p>No estás inscripto en ninguna materia.</p>";
                        }
                        
                        ?>
                </div>
            </form>
    </article>
</body>
</html>
