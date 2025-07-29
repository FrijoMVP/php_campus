<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inova Campus</title>
    <link rel="stylesheet" href="../css/login_profe.css">
</head>
<body>
    <article>
        <img src="../Elementos/img/Gemini_Generated_Image_5tqqs25tqqs25tqq (1).png" alt="">
        <form action="sesiondocente.php" method="post">
            <label for="usuario">Usuario Unico:</label>
            <input type="text" id="usuario" name="usuario" placeholder="Ingrese su Usuario"><br>
             <label for="contrasenia">Clave:</label>
            <input type="password" id="contrasenia" name="contrasenia" placeholder="Ingrese su Contraseña"><br>
        <div class="boton">
            <button type="submit">INGRESAR</button> 
            <a href="../index.php" class="button">Inicio</a>
        </div>
        </form>
    </article>

</body>
</html>