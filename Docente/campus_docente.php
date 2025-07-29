<?php
require '../enlace.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/nota_docente.css">
</head>
<body>
   <article>
    <img src="../Elementos/img/Gemini_Generated_Image_5tqqs25tqqs25tqq (1).png" alt="">
    <h2>Cargar Nota Final</h2>
    <form action="notafinal.php" method="post">
        
            <div class="form1">    
            <label for="materia_id">MATERIAS:</label><br>
            <select name="materia_id" id="materia_id" required>
            <option value="">-- Selecciona una materia --</option>
            <?php foreach ($materias as $materia): ?>
            <option value="<?php echo $materia['id']; ?>">
                <?php echo $materia['nombre']; ?>
            </option>
            <?php endforeach; ?>
            </select><br>
             <label for="estudiante_id">ESTUDIANTE:</label><br>
            <select name="estudiante_id" id="estudiante_id" required>
            <option value="">-- Selecciona un estudiante --</option>
            <?php foreach ($estudiantes as $estudiante): ?>
            <option value="<?php echo $estudiante['id']; ?>">
                <?php echo $estudiante['nombre']; ?>
            </option>
            <?php endforeach; ?>
            </select><br>
             <label for="nota_final">Nota Final:</label><br>
            <input type="number" id="nota_final" name="nota_final" placeholder="Ingrese la Nota Final"><br>
            
            <div class="botones">
            <button>ACTUALIZAR DATOS</button>
            <a href="../Perfil/Logout.php">CERRAR SESION</a>
            </div>
            </div>
        
        </form> 
   </article>
</body>
</html>
