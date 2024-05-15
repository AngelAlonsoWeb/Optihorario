<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    // Redirigir al usuario al formulario de inicio de sesión si no ha iniciado sesión
    header("Location: login.php");
    exit();
}
include 'conexion.php';
$usuario_id = $_SESSION['usuario_id'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Opti-horario</title>
    <link rel="icon" href="../img/favicon.png" type="image/x-icon">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;800&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='../style/home.css'>
</head>

<body>
    <div class="container">
        <h1>Materias Seleccionadas</h1>
        <div class="materias">
            <?php
            // Realizar una consulta para obtener las materias seleccionadas junto con sus horarios y grupos para el usuario específico
            $query = "SELECT ms.id, ms.title, ms.cod, ms.credits, ms.usuario_id, mh.grupo, h.nombre AS nombre_horario
                      FROM materiasPrueba ms
                      INNER JOIN MateriasSeleccionadas m ON ms.id = m.materia_id
                      INNER JOIN Horarios h ON m.horario_id = h.horario_id
                      INNER JOIN MateriasHorario mh ON m.materia_id = mh.materia_id AND m.horario_id = mh.horario_id
                      WHERE ms.usuario_id = $usuario_id";

            $result = mysqli_query($conn, $query);

            if (!$result) {
                // Manejo de errores si la consulta falla
                echo "Error al consultar la base de datos: " . mysqli_error($conn);
            } else {
                // Iterar sobre los resultados y mostrar las materias seleccionadas junto con sus horarios y grupos
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "ID: " . $row['id'] . "<br>";
                    echo "Nombre: " . $row['title'] . "<br>";
                    echo "Código: " . $row['cod'] . "<br>";
                    echo "Creditos: " . $row['credits'] . "<br>";
                    echo "ID_Usuario: " . $row['usuario_id'] . "<br>";
                    echo "Grupo: " . $row['grupo'] . "<br>";
                    echo "Horario: " . $row['nombre_horario'] . "<br>";
                    // Puedes mostrar más detalles de la materia si es necesario
                    echo "<br>";
                }
            }
            ?>
        </div>
</body>

</html>

<!-- // Realizar una consulta para obtener las materias seleccionadas junto con sus horarios para el usuario específico
            $query = "SELECT * FROM materiasPrueba WHERE usuario_id = $usuario_id";

            $result = mysqli_query($conn, $query);

            if (!$result) {
                // Manejo de errores si la consulta falla
                echo "Error al consultar la base de datos: " . mysqli_error($conn);
            } else {
                // Iterar sobre los resultados y mostrar las materias seleccionadas junto con sus horarios
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "ID: " . $row['id'] . "<br>";
                    echo "Nombre: " . $row['title'] . "<br>";
                    echo "Código: " . $row['cod'] . "<br>";
                    echo "Creditos: " . $row['credits'] . "<br>";
                    echo "ID_Usuario: " . $row['usuario_id'] . "<br>";
                    // Puedes mostrar más detalles de la materia si es necesario
                    echo "<br>";
                }
            } -->