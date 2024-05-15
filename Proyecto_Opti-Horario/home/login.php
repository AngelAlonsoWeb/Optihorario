<?php
include 'conexion.php';

$usuario = $_POST['username'];
$contrasena = $_POST['password'];

$sql = "SELECT * FROM Usuarios WHERE usuario='$usuario'";
echo "Consulta SQL: $sql<br>";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Número de filas devueltas por la consulta: " . mysqli_num_rows($result) . "<br>";

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $password = $row['contrasena'];

        if ($contrasena === $password) {
            session_start();
            $_SESSION['usuario_id'] = $row['usuario_id'];
            $_SESSION['username'] = $row['usuario'];

            header("Location: index.php");
        } else {
            echo "Contraseña incorrecta<br>";
        }
    } else {
        echo "Usuario no encontrado<br>";
    }
} else {
    echo "Error en la consulta SQL: " . mysqli_error($conn) . "<br>";
}
