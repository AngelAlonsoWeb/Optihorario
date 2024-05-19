<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
include 'conexion.php';
$usuario_id = $_SESSION['usuario_id'];

// Consulta para obtener las materias seleccionadas del usuario
$query = "SELECT ms.materia_id, mh.grupo, mh.dia_semana, mh.hora_inicio, mh.hora_final
            FROM MateriasSeleccionadas ms
            JOIN MateriasHorario mh ON ms.materia_id = mh.materia_id
            WHERE ms.usuario_id = $usuario_id";

$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error al consultar la base de datos: " . mysqli_error($conn);
} else {
    // Array asociativo para almacenar los horarios de las materias
    $horarios = array();

    // Recorre los resultados y almacena los horarios de las materias
    while ($row = mysqli_fetch_assoc($result)) {
        $materia_id = $row['materia_id'];
        $grupo = $row['grupo'];
        $dia_semana = $row['dia_semana'];
        $hora_inicio = $row['hora_inicio'];
        $hora_final = $row['hora_final'];

        // Almacena el horario en el array
        $horarios[$materia_id][] = array(
            'grupo' => $grupo,
            'dia_semana' => $dia_semana,
            'hora_inicio' => $hora_inicio,
            'hora_final' => $hora_final
        );
    }

    // Función para comparar dos horarios y determinar cuál es mejor
    function compararHorarios($horario1, $horario2)
{
    // Comparar los días de la semana
    $dias_semana = array(
        'Lunes' => 1,
        'Martes' => 2,
        'Miércoles' => 3,
        'Jueves' => 4,
        'Viernes' => 5
    );

    $dia_semana1 = $dias_semana[$horario1['dia_semana']];
    $dia_semana2 = $dias_semana[$horario2['dia_semana']];

    if ($dia_semana1 < $dia_semana2) {
        return -1;
    } elseif ($dia_semana1 > $dia_semana2) {
        return 1;
    }

    // Si los días de la semana son iguales, comparar las horas de inicio
    if ($horario1['hora_inicio'] < $horario2['hora_inicio']) {
        return -1;
    } elseif ($horario1['hora_inicio'] > $horario2['hora_inicio']) {
        return 1;
    }

    // Si los días de la semana y las horas de inicio son iguales, considerar los minutos de inicio
    if ($horario1['hora_inicio'] === $horario2['hora_inicio']) {
        return 0;
    }

    // Si todo es igual, considerar que los horarios son iguales
    return 0;
}


    // Itera sobre las materias y compara los horarios para cada una
    foreach ($horarios as $materia_id => $materia_horarios) {
        // Ordena los horarios de la materia actual según tu criterio de comparación
        usort($materia_horarios, 'compararHorarios');

        // El mejor horario será el primero después de ordenar
        $mejor_horario = $materia_horarios[0];

        // Muestra el mejor horario de la materia actual
        echo "Mejor horario para la materia $materia_id:<br>";
        echo "Grupo: " . $mejor_horario['grupo'] . "<br>";
        echo "Día de la semana: " . $mejor_horario['dia_semana'] . "<br>";
        echo "Hora de inicio: " . $mejor_horario['hora_inicio'] . "<br>";
        echo "Hora final: " . $mejor_horario['hora_final'] . "<br><br>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Opti-horario</title>
    <link rel="icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../style/normalize.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;800&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='../style/createSchedule.css'>
</head>

<body>
    <div class="container">
        <h1>Mejor Horario Seleccionado</h1>
        <div class="horario">
            <?php if ($mejor_horario) : ?>
                <table>
                    <tr>
                        <th>Materia</th>
                        <th>Grupo</th>
                        <th>Día</th>
                        <th>Hora de inicio</th>
                        <th>Hora final</th>
                    </tr>
                    <tr>
                        <td><?php echo $mejor_horario['materia_id']; ?></td>
                        <td><?php echo $mejor_horario['grupo']; ?></td>
                        <td><?php echo $mejor_horario['dia_semana']; ?></td>
                        <td><?php echo $mejor_horario['hora_inicio']; ?></td>
                        <td><?php echo $mejor_horario['hora_final']; ?></td>
                    </tr>
                </table>
            <?php else : ?>
                <p>No se encontraron horarios seleccionados.</p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>

