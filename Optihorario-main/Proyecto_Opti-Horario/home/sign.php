<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conexion.php';

    $nombre = $_POST['name'];
    $apellido_paterno = $_POST['lastNameP'];
    $apellido_materno = $_POST['lastNameM'];
    $usuario = $_POST['createUser'];
    $contrasena = $_POST['createPassword'];

    if(empty($nombre) || empty($apellido_paterno) || empty($apellido_materno) || empty($usuario) || empty($contrasena)) {
        header("Location: index.php");
    } else {
        $sql_check_user = "SELECT * FROM Usuarios WHERE usuario='$usuario'";
        $result = $conn->query($sql_check_user);

        if ($result->num_rows > 0) {            
            header("Location: index.php");

        } else {
            $sql = "INSERT INTO Usuarios (nombre, apellido_paterno, apellido_materno, usuario, contrasena)
                    VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$usuario', '$contrasena')";

            if ($conn->query($sql) === TRUE) {
                header("Location: index.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}
?>
