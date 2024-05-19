<?php

include 'verify_session.php';

// Variables
$nameUser = $_SESSION['username'];
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
    <nav id="navbar">
        <div id="container-menu">
            <h1 id="title">
                <a id="title-link" href="#">
                    <div id="logo"></div>
                    <h1>Opti-Horario</h1>
                </a>
            </h1>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button id="nav-link">
                        <p id="container-item-user">Hola, 
                            <span id="item-user"><?php echo $nameUser?></span>
                        </p>
                        <div id="item-angle-down"></div>
                    </button>
                    <ul id="dropdown-menu">
                        <li class="item-header">
                            <h6>Cuenta</h6>
                        </li>
                        <li class="dropdown-item"><a class="item-link" href="../home/userEdit.html">Editar Perfil</a></li>
                        <li class="item-header">
                            <h6>Aplicación</h6>
                        </li>
                        <li class="dropdown-item"><a class="item-link" href="#">¿Cómo funciona?</a></li>
                        <li class="dropdown-item"><a class="item-link" href="../home/purpose.html">Propósito de la app</a></li>
                        <li>
                            <hr>
                        </li>
                        <li class="dropdown-item"><a class="item-link" href="logout.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <main id="main">
        <div id="container-main">
            <img id="main-banner-1" src="../img/banner-shape-1.png" alt="">
            <img id="main-banner-2" src="../img/banner-shape-2.png" alt="">
            <img id="main-banner-3" src="../img/banner-shape-3.png" alt="">
            <img class="bubble bubble-1" src="../img/bubble-1.png" alt="">
            <img class="bubble bubble-2" src="../img/bubble-2.png" alt="">
            <img class="bubble bubble-3" src="../img/bubble-3.png" alt="">
            <img class="bubble bubble-4" src="../img/bubble-4.png" alt="">
            <div id="main-content">
                <h2>Crea, optimiza & perfecciona tu horario </h2>
                <p>Con <strong>Opti-Horario</strong>, puedes crear el horario perfecto de manera fácil, eficaz y al
                    instante</p>
                <a href="createSchedule.php" id="main-createSchedule">Crea tu horario</a>
            </div>
        </div>

        <div id="horarios">
        <a href="showShedule.php" id="main-createSchedule">Ver horario</a>
        </div>
    </main>
</body>

</html>