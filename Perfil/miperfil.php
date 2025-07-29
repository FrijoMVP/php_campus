
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/miperfil.css">
</head>

<body>
    <header>
            <img src="../Elementos/img/Gemini_Generated_Image_q4e7xqq4e7xqq4e7 sinfondo.png" alt="" width="150px" height="150px">
            <h1>Innova Campus</h1>
             <div class=login></div>
    </header>
    <nav class="perfil">
    <nav class="sidebar"="sidebar">
        <h2>Mi Perfil</h2>
        <img class="pepe" src="../Elementos/img/E0aJbm2XoAUuvxF.jpg" alt="">
        <ul>
            <li><a href="../campus.php">Volver</a></li>
            <li><a href="modify_perfil.php">Modificar Datos</a></li>
            <li><a href="Logout.php">Cerrar Sesion</a></li>
        </ul>
        </nav>
        <nav class="main">
        <img class="pepe" src="../Elementos/img/E0aJbm2XoAUuvxF.jpg" alt="">
        <nav class="php">
            <?php
            session_start();
            require "../enlace.php";
            echo'<div class="contenedor_php">';
            $sql = "SELECT * FROM estudiantes WHERE id = " . $_SESSION['id'];
            $resultado = $mysqli->query($sql);
            if ($resultado->num_rows > 0) {
            $estu = $resultado->fetch_assoc();
            "<label>Nombre Completo:</label>";
            echo "Nombre: " . $estu['nombre'] . "<br>"; 
            "<label>Apellido:</label>";
            echo "Apellido: " . $estu['apellido'] . "<br>";
            "<label>Correo Electronico:</label>";
            echo "Email: " . $estu['email'] . "<br>";
            "<label>Numero de Telefono:</label>";
            echo "Teléfono: " . $estu['telefono'] . "<br>";
            "<label>Numero de Documento:</label>";
            echo "DNI: " . $estu['dni'] . "<br>";
            } else {
            echo "No se encontraron datos para este estudiante.";
            }
            echo'</div>';
            ?>
            </nav>
        </nav>
    </nav>
    </body>
</html>

