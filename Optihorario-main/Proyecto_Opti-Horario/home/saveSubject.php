<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $jsonData = file_get_contents("php://input");
    $subjects = json_decode($jsonData, true);

    if ($subjects !== null) {
        foreach ($subjects as $subject) {
            $id = $subject['id'];
            // $title = $subject['title'];
            $code = $subject['code'];
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=optihorario', 'root', 'root');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $pdo->prepare("INSERT INTO MateriasSeleccionadas (usuario_id, materia_id) VALUES (:usuario_id, :materia_id)");
                $stmt->bindParam(':usuario_id', $usuario_id);
                $stmt->bindParam(':materia_id', $code);
                $stmt->execute();
            } catch (PDOException $e) {
                echo "Error al conectar con la base de datos: " . $e->getMessage();
            }
        }
        echo "Datos recibidos y almacenados correctamente.";
    } 
} 
?>
