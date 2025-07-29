<?php
session_start();
require "../enlace.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/modi.css">
</head>
<body>
    <?php
    $sql = "SELECT * FROM estudiantes WHERE id = " . $_SESSION['id'];
    $resultado = $mysqli->query($sql);
    $datos= mysqli_fetch_assoc($resultado);
    ?>
    <article>
        <img src="../Elementos/img/Gemini_Generated_Image_5tqqs25tqqs25tqq (1).png" alt="">
        <h2>Modificar Datos de Usuario</h2>
        <form action="update_usuario.php" method="post">
        <div class="form1">
        <label for="contrasenia">Contraseña:</label>
            <input type="password" id="contrasenia" name="contrasenia" placeholder="Ingrese su Contraseña" value="<?php echo $datos['contrasenia'];?>"><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese su Nombre"value="<?php echo $datos['nombre'];?>"><br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Ingrese su Apellido"value="<?php echo $datos['apellido'];?>"><br>
            <a href="miperfil.php">Volver</a>
        </div>
        <div class="form2">
            <label for="dni">D.N.I:</label>
            <input type="number" id="dni" name="dni" placeholder="Ingrese su D.N.I"value="<?php echo $datos['dni'];?>"><br>
            <label for="email">Correo Electronico:</label>
            <input type="text" id="email" name="email" placeholder="Ingrese su Correo Electronico"value="<?php echo $datos['email'];?>"><br>
            <label for="telefono">Numero de Telefono:</label>
            <input type="number" id="telefono" name="telefono" placeholder="Ingrese su Numero de Telefono"value="<?php echo $datos['telefono'];?>"><br>
            <button>ACTUALIZAR DATOS</button>
        </div>
        </form> 
    </article> 
    </body>
</html>
