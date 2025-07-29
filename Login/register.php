<?php
require '../enlace.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <article>
        <img src="../Elementos/img/Gemini_Generated_Image_5tqqs25tqqs25tqq (1).png" alt="">
        <form action="registro_usuario.php" method="post">
            <div class="form1">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" placeholder="Ingrese su Usuario"><br>
            <label for="contrasenia">Contraseña:</label>
            <input type="password" id="contrasenia" name="contrasenia" placeholder="Ingrese su Contraseña"><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese su Nombre"><br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Ingrese su Apellido"><br>
            <a href="../index.php" class="button">Inicio</a>
            </div>
            <div class="form2">
            <label for="dni">D.N.I:</label>
            <input type="number" id="dni" name="dni" placeholder="Ingrese su D.N.I"><br>
            <label for="email">Correo Electronico:</label>
            <input type="text" id="email" name="email" placeholder="Ingrese su Correo Electronico"><br>
            <label for="telefono">Numero de Telefono:</label>
            <input type="number" id="telefono" name="telefono" placeholder="Ingrese su Numero de Telefono"><br>
            <label for="carrera_id">Carrera:</label>
            <select name="carrera_id" id="carrera_id" required>
            <option value="">-- Selecciona una carrera --</option>
            <?php foreach ($carreras as $carrera): ?>
            <option value="<?php echo $carrera['id']; ?>">
                <?php echo $carrera['nombre_carrera']; ?>
            </option>
            <?php endforeach; ?>
            </select>
            <label for="anio_ingreso">Año de Ingreso:</label>
            <input type="number" id="anio_ingreso" name="anio_ingreso" placeholder="Año de Ingreso"><br>
            <button>CREAR USUARIO</button>
            
        </div>
        </form>

    </article>
</body>
</html>
