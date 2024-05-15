<?php
session_start(); // Iniciar sesión para acceder a las variables de sesión

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    // Redirigir al usuario al formulario de inicio de sesión si no ha iniciado sesión
    header("Location: login.php");
    exit();
}

// Obtener el ID de usuario de la sesión
$usuario_id = $_SESSION['usuario_id'];

// Verificar si se recibieron datos POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verificar si se recibieron datos JSON válidos
    $jsonData = file_get_contents("php://input");
    $subjects = json_decode($jsonData, true);

    if ($subjects !== null) {
        // Aquí puedes procesar los datos recibidos como desees
        // Por ejemplo, puedes recorrer el array de materias y almacenarlas en una base de datos
        foreach ($subjects as $subject) {
            $id = $subject['id'];
            $title = $subject['title'];
            $code = $subject['code'];
            $credits = $subject['credits'];

            // Ejemplo de almacenamiento en una base de datos (usando PDO)
            // Esto es solo un ejemplo y debes adaptarlo a tu entorno y estructura de base de datos
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=optihorario', 'root', 'root');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $pdo->prepare("INSERT INTO materiasPrueba (id, title, cod, credits, usuario_id) VALUES (:id, :title, :cod, :credits, :usuario_id)");
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':cod', $code);
                $stmt->bindParam(':credits', $credits);
                $stmt->bindParam(':usuario_id', $usuario_id); // Utilizar el ID de usuario obtenido de la sesión
                $stmt->execute();
            } catch (PDOException $e) {
                echo "Error al conectar con la base de datos: " . $e->getMessage();
            }
        }
        echo "Datos recibidos y almacenados correctamente.";
    } else {
        http_response_code(400);
        echo "Error: No se recibieron datos JSON válidos.";
    }
} else {
    http_response_code(405);
    echo "Error: Esta página solo admite solicitudes POST.";
}
?>

<!-- 
session_start(); // Iniciar sesión para acceder a las variables de sesión

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    // Redirigir al usuario al formulario de inicio de sesión si no ha iniciado sesión
    header("Location: login.php");
    exit();
}

// Obtener el ID de usuario de la sesión
$usuario_id = $_SESSION['usuario_id'];

// Verificar si se recibieron datos POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verificar si se recibieron datos JSON válidos
    $jsonData = file_get_contents("php://input");
    $subjects = json_decode($jsonData, true);

    if ($subjects !== null) {
        // Aquí puedes procesar los datos recibidos como desees
        // Por ejemplo, puedes recorrer el array de materias y almacenarlas en una base de datos

        // Contar la cantidad de horarios que tiene el usuario
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=optihorario', 'root', 'root');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("SELECT COUNT(DISTINCT horario_id) AS cantidad_horarios FROM HorarioEstudiante WHERE usuario_id = :usuario_id");
            $stmt->bindParam(':usuario_id', $usuario_id); // Utilizar el ID de usuario obtenido de la sesión
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $cantidad_horarios = $row['cantidad_horarios'];
        } catch (PDOException $e) {
            http_response_code(500);
            echo "Error al conectar con la base de datos: " . $e->getMessage();
            exit();
        }

        // Generar un nombre único para el nuevo horario
        $nombre_horario = "Horario " . ($cantidad_horarios + 1);

        // Insertar el nuevo horario en la tabla Horarios
        try {
            $stmt = $pdo->prepare("INSERT INTO Horarios (nombre) VALUES (:nombre)");
            $stmt->bindParam(':nombre', $nombre_horario);
            $stmt->execute();
            $horario_id = $pdo->lastInsertId();
        } catch (PDOException $e) {
            http_response_code(500);
            echo "Error al insertar el nuevo horario: " . $e->getMessage();
            exit();
        }

        // Insertar las materias seleccionadas asociadas al nuevo horario en la tabla MateriasSeleccionadas
        foreach ($subjects as $subject) {
            $id = $subject['id'];
            $title = $subject['title'];
            $code = $subject['code'];
            $credits = $subject['credits'];

            try {
                $stmt = $pdo->prepare("INSERT INTO MateriasSeleccionadas (usuario_id, materia_id, horario_id) VALUES (:usuario_id, :materia_id, :horario_id)");
                $stmt->bindParam(':usuario_id', $usuario_id); // Utilizar el ID de usuario obtenido de la sesión
                $stmt->bindParam(':materia_id', $id);
                $stmt->bindParam(':horario_id', $horario_id);
                $stmt->execute();
            } catch (PDOException $e) {
                http_response_code(500);
                echo "Error al insertar las materias seleccionadas: " . $e->getMessage();
                exit();
            }
        }

        echo "Datos recibidos y almacenados correctamente.";
    } else {
        http_response_code(400);
        echo "Error: No se recibieron datos JSON válidos.";
    }
} else {
    http_response_code(405);
    echo "Error: Esta página solo admite solicitudes POST.";
} -->