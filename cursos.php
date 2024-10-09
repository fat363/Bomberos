<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Bomberos</title>
    <link rel="icon" href="bomberosmc.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: rgb(255,0,0);
            background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(255,41,41,1) 25%, rgba(255,74,74,1) 50%, rgba(255,41,41,1) 75%, rgba(255,0,0,1) 100%);
        }
        .container {
            max-width: 800px;
            margin: 2em auto;
            background: #fff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: flex-start;
            position: relative; /* Cambiado para alinear el botón en la parte superior derecha */
        }
        .logo {
            width: 80px;
            height: 80px;
            margin-right: 20px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;
            position: relative;
            top: -10px;
        }
        .logo img {
            width: 100%;
            height: auto;
        }
        .course-list {
            flex: 1;
        }
        .course-list h2 {
            margin-bottom: 1em;
            color: #333;
            text-align: left;
        }
        .course-list ul {
            list-style-type: none;
            padding: 0;
        }
        .course-list ul li {
            padding: 0.5em 0;
            border-bottom: 1px solid #ddd;
            position: relative;
        }
        .course-list ul li::before {
            content: attr(data-number) ". ";
            font-weight: bold;
            margin-right: 5px;
        }
        .rescate {
            background-color: rgba(0, 123, 255, 0.8);
            padding: 0.5em 1em;
            border-radius: 4px;
            color: #fff;
            text-decoration: none;
            font-size: 0.9em;
            float: right;
            position: relative;
            top: -5px;
        }
        .info {
            display: none;
            margin-top: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .btn-primary, .btn-secondary {
            display: inline-block;
            width: 48%;
            padding: 1em;
            font-size: 1.1em;
            text-align: center;
            border: none;
            border-radius: 30px;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .btn-back {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            padding: 0.5em 1em;
            font-size: 1em;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function toggleInfo(courseNumber) {
            const infoElement = document.getElementById('info-' + courseNumber);
            const isVisible = infoElement.style.display === 'block';
            infoElement.style.display = isVisible ? 'none' : 'block';
        }
    </script>
</head>
<body>
    <a href="bombervolun.php" class="btn-back">Volver a Inicio</a>
    <div class="container">
        <div class="logo">
            <img src="bomberosmc.jpeg" alt="Logo">
        </div>
        <div class="course-list">
            <h2>Lista de Cursos</h2>
            <ul>
                <li data-number="1">
                    Curso Básico de Bombero Voluntario
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(1)">Más Info</a>
                    <div id="info-1" class="info">
                    El Curso Básico de Bombero Voluntario es una formación inicial que prepara a los aspirantes para actuar en situaciones de emergencia. El curso incluye entrenamiento en combate de incendios, rescate, primeros auxilios, manejo de materiales peligrosos y trabajo en equipo. Los participantes aprenden a utilizar equipos de protección personal y herramientas básicas, así como técnicas de evacuación y seguridad en incendios. Es un requisito esencial para integrarse a un cuerpo de bomberos voluntarios y poder responder de manera efectiva ante diferentes tipos de emergencias.
                    </div>
                </li>
                <li data-number="2">
                    Cabo
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(2)">Más Info</a>
                    <div id="info-2" class="info">
                    Un cabo de bomberos es un rango intermedio en los cuerpos de bomberos. Su papel incluye supervisar y coordinar a los bomberos durante emergencias, capacitar al personal en técnicas y seguridad, asegurar el mantenimiento adecuado del equipo, y registrar las actividades. También participa activamente en operaciones de emergencia. Requiere experiencia previa, habilidades de liderazgo y conocimientos técnicos en manejo de emergencias.
                    </div>
                </li>
                <li data-number="3">
                    Cabo Primero
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(3)">Más Info</a>
                    <div id="info-3" class="info">
                    Un cabo primero de bomberos supervisa a los bomberos y cabos, asegura su formación en técnicas avanzadas, mantiene el equipo en óptimas condiciones y gestiona la documentación de las operaciones. También juega un papel activo en la coordinación durante emergencias. Este rango requiere experiencia previa, habilidades de liderazgo avanzadas y un profundo conocimiento técnico.
                    </div>
                </li>
                <li data-number="4">
                    Sargento 
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(4)">Más Info</a>
                    <div id="info-4" class="info">
                    Un sargento de bomberos lidera equipos, coordina operaciones y entrenamientos, y desarrolla estrategias para emergencias. Supervisa el mantenimiento del equipo y gestiona la documentación de actividades. Este rango requiere experiencia extensa, habilidades de liderazgo y un profundo conocimiento técnico.
                    </div>
                </li>
                <li data-number="5">
                    Sargento Primero 
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(5)">Más Info</a>
                    <div id="info-5" class="info">
                    Un sargento primero de bomberos lidera y coordina equipos en situaciones de emergencia, supervisa el entrenamiento del personal, y gestiona el mantenimiento del equipo. Además, desarrolla estrategias operativas y revisa la documentación de las actividades. Este rango exige una amplia experiencia, habilidades avanzadas de liderazgo y un profundo conocimiento técnico en manejo de emergencias.
                    </div>
                </li>
                <li data-number="6">
                    Sargento Ayudante
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(6)">Más Info</a>
                    <div id="info-6" class="info">
                    Un sargento ayudante de bomberos asiste al sargento en la gestión de equipos y operaciones durante emergencias. Supervisa el entrenamiento y la preparación del personal, coordina actividades y asegura el mantenimiento del equipo. También participa en la planificación estratégica y en la documentación de las operaciones. Este rango requiere experiencia previa, habilidades de liderazgo y un buen conocimiento técnico en manejo de emergencias.
                    </div>
                </li>
                <li data-number="7">
                    Sub oficial principal
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(7)">Más Info</a>
                    <div id="info-7" class="info">
                    Un suboficial principal de bomberos lidera equipos en emergencias, supervisa el entrenamiento y desarrollo del personal, y asegura el mantenimiento óptimo del equipo. Participa en la planificación estratégica y en la gestión de operaciones a nivel superior, y revisa detalladamente la documentación. Este rango requiere una extensa experiencia, habilidades de liderazgo avanzadas y un profundo conocimiento técnico en el manejo de emergencias.
                    </div>
                </li>
                <li data-number="8">
                    Sub oficial mayor
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(8)">Más Info</a>
                    <div id="info-8" class="info">
                    Un suboficial mayor de bomberos es el rango más alto dentro del personal suboficial, supervisando la operación y gestión de equipos en emergencias. Se encarga de la formación y desarrollo del personal, asegura el mantenimiento y eficacia del equipo, y participa en la planificación estratégica y toma de decisiones a nivel alto. También revisa la documentación y coordina con otros rangos superiores. Este rol requiere amplia experiencia, excepcionales habilidades de liderazgo y un profundo conocimiento técnico en manejo de emergencias.
                    </div>
                </li>
                <li data-number="9">
                    Oficial Ayudante
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(9)">Más Info</a>
                    <div id="info-9" class="info">
                    Un oficial ayudante de bomberos asiste a los oficiales superiores en la gestión y coordinación de equipos durante emergencias. Se encarga de supervisar el entrenamiento del personal, colaborar en la planificación estratégica y asegurar el mantenimiento del equipo. También revisa la documentación y apoya en la toma de decisiones operativas. Este rango requiere experiencia previa, habilidades de liderazgo y un sólido conocimiento técnico en el manejo de emergencias.
                    </div>
                </li>
                <li data-number="10">
                    Sub inspector
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(10)">Más Info</a>
                    <div id="info-10" class="info">
                    Un subinspector de bomberos supervisa y coordina equipos en situaciones de emergencia, gestiona el entrenamiento del personal, y asegura el mantenimiento del equipo. Participa en la planificación estratégica y en la toma de decisiones operativas, además de revisar la documentación y garantizar el cumplimiento de procedimientos. Este rango requiere una considerable experiencia, habilidades avanzadas de liderazgo y un profundo conocimiento técnico en el manejo de emergencias.
                    </div>
                </li>
                <li data-number="11">
                    Oficial inspector
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(11)">Más Info</a>
                    <div id="info-11" class="info">
                    Un oficial inspector de bomberos supervisa la gestión y coordinación de equipos durante emergencias, lidera la planificación estratégica y asegura el entrenamiento y el mantenimiento del personal y el equipo. Participa en la toma de decisiones operativas, revisa la documentación y garantiza el cumplimiento de normativas y procedimientos. Este rango exige amplia experiencia, excepcionales habilidades de liderazgo y un profundo conocimiento técnico en el manejo de emergencias.
                    </div>
                </li>
                <li data-number="12">
                    Oficial principal
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(12)">Más Info</a>
                    <div id="info-12" class="info">
                    Un oficial principal de bomberos lidera la gestión de equipos en emergencias, dirige la planificación estratégica y supervisa el entrenamiento y el mantenimiento del personal y el equipo. Participa en la toma de decisiones a nivel alto, revisa la documentación y asegura el cumplimiento de normativas y procedimientos. Este rango requiere una extensa experiencia, habilidades de liderazgo excepcionales y un conocimiento profundo en el manejo de emergencias.
                    </div>
                </li>
                <li data-number="13">
                    Sub comisario
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(13)">Más Info</a>
                    <div id="info-13" class="info">
                    El subcomisario de bomberos es un rango intermedio en el cuerpo de bomberos, encargado de supervisar operaciones diarias, coordinar equipos en emergencias, gestionar recursos y apoyar en la formación del personal. Su rol combina liderazgo y conocimientos técnicos para garantizar la eficacia y seguridad en la respuesta a incidentes.
                    </div>
                </li>
                <li data-number="14">
                    Comisario
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(14)">Más Info</a>
                    <div id="info-14" class="info">
                    El comisario de bomberos es un alto cargo en el cuerpo de bomberos, responsable de dirigir y coordinar todas las operaciones del departamento. Sus funciones incluyen supervisar el personal, desarrollar estrategias de respuesta a emergencias, gestionar recursos y asegurar el cumplimiento de políticas y procedimientos. El comisario también se encarga de representar al cuerpo de bomberos en asuntos oficiales y de colaborar con otras agencias en situaciones de emergencia. Su rol exige habilidades de liderazgo, experiencia en gestión y profundo conocimiento técnico en el área de bomberos.
                    </div>
                </li>
                <li data-number="15">
                    Comisario Inspector
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(15)">Más Info</a>
                    <div id="info-15" class="info">
                    El comisario inspector de bomberos es un rango alto que supervisa y dirige las operaciones del cuerpo de bomberos a nivel estratégico. Sus responsabilidades incluyen la planificación y coordinación de políticas, la gestión de recursos a gran escala, y la supervisión de todas las unidades bajo su mando. También se encarga de la evaluación del desempeño del personal, la implementación de normas y procedimientos, y la representación del cuerpo de bomberos en cuestiones oficiales y colaboraciones interinstitucionales. Este puesto requiere amplias habilidades de liderazgo, gestión estratégica y un profundo conocimiento técnico en el ámbito de los bomberos.
                    </div>
                </li>
                <li data-number="16">
                    Comisario Mayor
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(16)">Más Info</a>
                    <div id="info-16" class="info">
                    El comisario mayor de bomberos es el rango más alto en el cuerpo de bomberos, encargado de la dirección general y la supervisión estratégica del departamento. Sus responsabilidades abarcan el desarrollo de políticas y estrategias a nivel global, la coordinación con otras agencias y organismos, y la gestión de recursos y presupuestos importantes. Además, el comisario mayor supervisa el desempeño de los oficiales de rango inferior, asegura el cumplimiento de normas y procedimientos, y representa al cuerpo de bomberos en eventos y reuniones oficiales. Este puesto requiere una gran capacidad de liderazgo, visión estratégica y una vasta experiencia en gestión y operaciones de bomberos.
                    </div>
                </li>
                <li data-number="17">
                    Comisario General
                    <a href="javascript:void(0);" class="rescate" onclick="toggleInfo(17)">Más Info</a>
                    <div id="info-17" class="info">
                    El comisario general de bomberos es el rango más alto dentro del cuerpo de bomberos. Su función principal es la dirección y administración global del departamento. Esto incluye la formulación de políticas estratégicas, la coordinación con otras agencias gubernamentales y entidades de emergencia, la gestión de presupuestos y recursos a gran escala, y la supervisión de la implementación de normas y procedimientos en todo el cuerpo de bomberos. El comisario general también actúa como representante oficial del cuerpo de bomberos en eventos públicos, reuniones gubernamentales y colaboraciones interinstitucionales. Este puesto requiere un liderazgo excepcional, habilidades avanzadas en gestión y una amplia experiencia en el campo de los bomberos.
                    </div>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="d-flex justify-content-between" style="max-width: 800px; margin: 2em auto;">
        <a href="cursos2.php" class="btn btn-primary">Anotarme a un Curso</a>
    </div>
</body>
</html>


