<?php
session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    echo "Tu ID de usuario es: " . htmlspecialchars($usuario);
} else {
    header('Location: login.php');
    exit();
}
?>