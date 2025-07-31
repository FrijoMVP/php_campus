<?php
    session_start();
    $usuario = $_POST["usuario"];
    $contrasenia = $_POST["contrasenia"];
    
    $login = "SELECT * FROM estudiantes WHERE usuario = '$usuario' AND contrasenia = '$contrasenia'";
    require '../enlace.php';
    $resultado = $mysqli->query($login);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $_SESSION['id'] = $fila['id']; 
    $_SESSION['usuario'] = $fila['usuario'];
    echo '<script>
        alert("Bienvenido ADMIN")
        self.location="campus_docente.php"
        </script>';
} else {
    echo '<script>
alert("Usuario o Clave Incorrecta")
self.location="login2.php"
</script>';
}

$mysqli->close();
   
?>
