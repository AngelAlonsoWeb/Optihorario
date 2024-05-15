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
    <link rel="stylesheet" href="../style/normalize.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;800&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='../style/createSchedule.css'>
</head>

<body>
    <nav id="navbar">
        <ul id="list-nav">
            <li class="item-nav"><a href="index.php" id="btn-return">Cancelar</a></li>
            <li class="item-nav">
                <h2 id="nav-career">Ing. En Sistemas Computacionales</h2>
                <h3 id="nav-title">Seleccione sus materias</h3>
            </li>
            <li class="item-nav header-nav">
                <div>
                    <button id="get-subject">Enviar</button>
                    <p id="totalCredits">Total de Créditos: 0</p>
                    <p id="totalCredits"></p>
                </div>
            </li>
        </ul>
    </nav>
    <main id="container">
        <div id="subject-container">
            <!-------------------------------------------- Semestre 1 ------------------------------------------>
            <ul class="column column-1">
                <li class="semester">1</li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="ACF-0901" data-credits="5">
                    <label for="ACF-0901">
                        <div class="option-subject">
                            <h3 class="subject-title">Cálculo Diferencial</h3>
                            <p class="subject-code">ACF-0901</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>
                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="AED-1285" data-credits="5">
                    <label for="AED-1285">
                        <div class="option-subject">
                            <h3 class="subject-title">Fundamentos de Programación</h3>
                            <p class="subject-code">AED-1285</p>
                            <p class="subject-credits">5</p>
                        </div>
                </li>
                </label>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="ACA-0907" data-credits="4">
                    <label for="ACA-0907">
                        <div class="option-subject">
                            <h3 class="subject-title">Taller de Ética</h3>
                            <p class="subject-code">ACA-0907</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="AEF-1041" data-credits="5">
                    <label for="AEF-1041">
                        <div class="option-subject">
                            <h3 class="subject-title">Matemáticas Discretas</h3>
                            <p class="subject-code">AEF-1041</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCH-1024" data-credits="4">
                    <label for="SCH-1024">
                        <div class="option-subject">
                            <h3 class="subject-title">Taller de Administración</h3>
                            <p class="subject-code">SCH-1024</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="ACC-0906" data-credits="4">
                    <label for="ACC-0906">
                        <div class="option-subject">
                            <h3 class="subject-title">Fundamentos de Investigación</h3>
                            <p class="subject-code">ACC-0906</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>

                </li>
            </ul>
            <!-------------------------------------------- Semestre 2 ------------------------------------------>
            <ul class="column column-2">
                <li class="semester">2</li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="ACF-0902" data-credits="5">
                    <label for="ACF-0902">
                        <div class="option-subject">
                            <h3 class="subject-title">Cálculo Integral</h3>
                            <p class="subject-code">ACF-0902</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="AED-1286" data-credits="5">
                    <label for="AED-1286">
                        <div class="option-subject">
                            <h3 class="subject-title">Programación Orientada a Objetos</h3>
                            <p class="subject-code">AED-1286</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="AEC-1008" data-credits="4">
                    <label for="AEC-1008">
                        <div class="option-subject">
                            <h3 class="subject-title">Contabilidad Financiera</h3>
                            <p class="subject-code">AEC-1008</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="AEC-1058" data-credits="4">
                    <label for="AEC-1058">
                        <div class="option-subject">
                            <h3 class="subject-title">Química</h3>
                            <p class="subject-code">AEC-1058</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="ACF-0903" data-credits="5">
                    <label for="ACF-0903">
                        <div class="option-subject">
                            <h3 class="subject-title">Álgebra Lineal</h3>
                            <p class="subject-code">ACF-0903</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="AEF-1052" data-credits="5">
                    <label for="AEF-1052">
                        <div class="option-subject">
                            <h3 class="subject-title">Probabilidad y Estadística</h3>
                            <p class="subject-code">AEF-1052</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>

                </li>
            </ul>
            <!-------------------------------------------- Semestre 3 ------------------------------------------>

            <ul class="column column-3">
                <li class="semester">3</li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="ACF-0904" data-credits="5">
                    <label for="ACF-0904">
                        <div class="option-subject">
                            <h3 class="subject-title">Cálculo Vectorial</h3>
                            <p class="subject-code">ACF-0904</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="AED-1026" data-credits="5">
                    <label for="AED-1026">
                        <div class="option-subject">
                            <h3 class="subject-title">Estructura de Datos</h3>
                            <p class="subject-code">AED-1026</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCC-1005" data-credits="4">
                    <label for="SCC-1005">
                        <div class="option-subject">
                            <h3 class="subject-title">Cultura Empresarial</h3>
                            <p class="subject-code">SCC-1005</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCC-1013" data-credits="4">
                    <label for="SCC-1013">
                        <div class="option-subject">
                            <h3 class="subject-title">Investigación de Operaciones</h3>
                            <p class="subject-code">SCC-1013</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="ACD-0908" data-credits="5">
                    <label for="ACD-0908">
                        <div class="option-subject">
                            <h3 class="subject-title">Desarrollo Sustentable</h3>
                            <p class="subject-code">ACD-0908</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCF-1006" data-credits="5">
                    <label for="SCF-1006">
                        <div class="option-subject">
                            <h3 class="subject-title">Física General</h3>
                            <p class="subject-code">SCF-1006</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>

                </li>
            </ul>
            <!-------------------------------------------- Semestre 4 ------------------------------------------>

            <ul class="column column-4">
                <li class="semester">4</li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="ACF-0905" data-credits="5">
                    <label for="ACF-0905">
                        <div class="option-subject">
                            <h3 class="subject-title">Ecuaciones Diferenciales</h3>
                            <p class="subject-code">ACF-0905</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCC-1017" data-credits="4">
                    <label for="SCC-1017">
                        <div class="option-subject">
                            <h3 class="subject-title">Métodos Numéricos</h3>
                            <p class="subject-code">SCC-1017</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCD-1027" data-credits="5">
                    <label for="SCD-1027">
                        <div class="option-subject">
                            <h3 class="subject-title">Tópicos Avanzados de Programación</h3>
                            <p class="subject-code">SCD-1027</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="AEF-1031" data-credits="5">
                    <label for="AEF-1031">
                        <div class="option-subject">
                            <h3 class="subject-title">Fundamentos de Base de Datos</h3>
                            <p class="subject-code">AEF-1031</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCD-1022" data-credits="5">
                    <label for="SCD-1022">
                        <div class="option-subject">
                            <h3 class="subject-title">Simulación</h3>
                            <p class="subject-code">SCD-1022</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCD-1018" data-credits="5">
                    <label for="SCD-1018">
                        <div class="option-subject">
                            <h3 class="subject-title">Principios Eléctricos y Aplicaciones Digitales</h3>
                            <p class="subject-code">SCD-1018</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>
                </li>
            </ul>
            <!-------------------------------------------- Semestre 5 ------------------------------------------>
            <ul class="column column-5">
                <li class="semester">5</li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCC-1010" data-credits="4">
                    <label for="SCC-1010">
                        <div class="option-subject">
                            <h3 class="subject-title">Graficación</h3>
                            <p class="subject-code">SCC-1010</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="AEC-1034" data-credits="4">
                    <label for="AEC-1034">
                        <div class="option-subject">
                            <h3 class="subject-title">Fundamentos de Telecomunicaciones</h3>
                            <p class="subject-code">AEC-1034</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="AEC-1061" data-credits="4">
                    <label for="AEC-1061">
                        <div class="option-subject">
                            <h3 class="subject-title">Sistemas Operativos</h3>
                            <p class="subject-code">AEC-1061</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCA-1025" data-credits="4">
                    <label for="SCA-1025">
                        <div class="option-subject">
                            <h3 class="subject-title">Taller de Base de Datos</h3>
                            <p class="subject-code">SCA-1025</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCC-1007" data-credits="4">
                    <label for="SCC-1007">
                        <div class="option-subject">
                            <h3 class="subject-title">Fundamentos de Ingeniería de Software</h3>
                            <p class="subject-code">SCC-1007</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCD-1003" data-credits="5">
                    <label for="SCD-1003">
                        <div class="option-subject">
                            <h3 class="subject-title">Arquitectura de Computadoras</h3>
                            <p class="subject-code">SCD-1003</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>
                </li>
            </ul>
            <!-------------------------------------------- Semestre 6 ------------------------------------------>
            <ul class="column column-6">
                <li class="semester">6</li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCD-1015" data-credits="5">
                    <label for="SCD-1015">
                        <div class="option-subject">
                            <h3 class="subject-title">Lenguajes y Autómatas 1</h3>
                            <p class="subject-code">SCD-1015</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCD-1021" data-credits="5">
                    <label for="SCD-1021">
                        <div class="option-subject">
                            <h3 class="subject-title">Redes de Computadoras</h3>
                            <p class="subject-code">SCD-1021</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCA-1026" data-credits="4">
                    <label for="SCA-1026">
                        <div class="option-subject">
                            <h3 class="subject-title">Taller de Sistemas Operativos</h3>
                            <p class="subject-code">SCA-1026</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCB-1001" data-credits="5">
                    <label for="SCB-1001">
                        <div class="option-subject">
                            <h3 class="subject-title">Administración de Base de Datos</h3>
                            <p class="subject-code">SCB-1001</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCD-1011" data-credits="5">
                    <label for="SCD-1011">
                        <div class="option-subject">
                            <h3 class="subject-title">Ingeniería de Software</h3>
                            <p class="subject-code">SCD-1011</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>
                </li>

                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCC-1014" data-credits="4">
                    <label for="SCC-1014">
                        <div class="option-subject">
                            <h3 class="subject-title">Lenguajes de Intefaz</h3>
                            <p class="subject-code">+SCC-1014</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>
                </li>

            </ul>
            <!-------------------------------------------- Semestre 7 ------------------------------------------>

            <ul class="column column-7">
                <li class="semester">7</li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCD-1016" data-credits="5">
                    <label for="SCD-1016">
                        <div class="option-subject">

                            <h3 class="subject-title">Lenguajes y Autómatas II</h3>
                            <p class="subject-code">SCD-1016</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCD-1004" data-credits="5">
                    <label for="SCD-1004">
                        <div class="option-subject">

                            <h3 class="subject-title">Conmutación y Enrutamiento en Redes de Datos</h3>
                            <p class="subject-code">SCD-1004</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="ACA-0909" data-credits="4">
                    <label for="ACA-0909">
                        <div class="option-subject">

                            <h3 class="subject-title">Taller de investigación I</h3>
                            <p class="subject-code">ACA-0909</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>

                </li>
                <li class="subject no-subject"></li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCG-1009" data-credits="6">
                    <label for="SCG-1009">
                        <div class="option-subject">

                            <h3 class="subject-title">Gestión de Proyectos de Software</h3>
                            <p class="subject-code">SCG-1009</p>
                            <p class="subject-credits">6</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCC-1023" data-credits="4">
                    <label for="SCC-1023">
                        <div class="option-subject">

                            <h3 class="subject-title">Sistemas Programables</h3>
                            <p class="subject-code">SCC-1023</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>

                </li>

            </ul>
            <!-------------------------------------------- Semestre 8 ------------------------------------------>

            <ul class="column column-8">
                <li class="semester">8</li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCC-1019" data-credits="4">
                    <label for="SCC-1019">
                        <div class="option-subject">
                            <h3 class="subject-title">Programación Lógica y Funcional</h3>
                            <p class="subject-code">SCC-1019</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCA-1002" data-credits="4">
                    <label for="SCA-1002">
                        <div class="option-subject">
                            <h3 class="subject-title">Administración de Redes</h3>
                            <p class="subject-code">SCA-1002</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>

                </li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="ACA-0910" data-credits="4">
                    <label for="ACA-0910">
                        <div class="option-subject">
                            <h3 class="subject-title">Taller de Investigación II</h3>
                            <p class="subject-code">ACA-0910</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>

                </li>
                <li class="subject no-subject"></li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="AEB-1055" data-credits="5">
                    <label for="AEB-1055">
                        <div class="option-subject">
                            <h3 class="subject-title">Programación Web</h3>
                            <p class="subject-code">AEB-1055</p>
                            <p class="subject-credits">5</p>
                        </div>
                    </label>

                </li>
                <li class="subject no-subject"></li>


            </ul>
            <!-------------------------------------------- Semestre 9 ------------------------------------------>

            <ul class="column column-9">
                <li class="semester">9</li>
                <li class="subject">
                    <input class="cb-subject" type="checkbox" id="SCC-1012" data-credits="4">
                    <label for="SCC-1012">
                        <div class="option-subject">
                            <h3 class="subject-title">Inteligencia Artificial</h3>
                            <p class="subject-code">SCC-1012</p>
                            <p class="subject-credits">4</p>
                        </div>
                    </label>

                </li>

                <li class="subject no-subject"></li>
                <li class="subject no-subject"></li>
                <li class="subject no-subject"></li>
                <li class="subject no-subject"></li>
                <li class="subject no-subject"></li>
            </ul>
        </div>
    </main>
    <div class="overlay" id="overlay"></div>
    <div class="popup" id="popup">

        <div class="buttons-popup">
            <button id="closePopup">Regresar</button>
            <button id="sendPopup">Confirmar</button>
        </div>
        <h3 id="title-popup">Materias seleccionadas</h3>
        <p id="popupContent"></p>
    </div>
    <p id="message"></p>
    <script src="../js/main.js"></script>
</body>

</html>