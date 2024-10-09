<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>BOMBEROS MC</title>
    <link rel="icon" href="bomberosmc.jpeg">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: rgb(255,0,0);
            background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(255,41,41,1) 25%, rgba(255,74,74,1) 50%, rgba(255,41,41,1) 75%, rgba(255,0,0,1) 100%);
        }
        .navbar {
            padding: 0.5em;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            background: rgb(50,47,50);
            background: linear-gradient(90deg, rgba(50,47,50,1) 0%, rgba(207,202,207,1) 13%, rgba(255,255,255,1) 25%, rgba(255,255,255,1) 50%, rgba(255,255,255,1) 75%, rgba(207,202,207,1) 87%, rgba(56,50,56,1) 100%);
        }
        .navbar:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .navbar-brand {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .navbar-brand img {
            width: 80px;
            height: 80px;
            margin-right: 1em;
        }
        .navbar-brand h1 {
            font-family: 'Georgia', serif;
            font-size: 1.5em;
            color: black;
            margin: 0;
        }
        .navbar-nav {
            flex: 1;
            display: flex;
            justify-content: space-around;
        }
        .navbar-nav .nav-link {
            color: black;
            text-decoration: none;
            font-family: 'Arial', sans-serif;
            font-size: 1.1em;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: red;
            transform: scale(1.1);
        }
        .navbar-expand-lg .container {
            max-width: 960px;
        }
        .header {
            padding: 1em;
            text-align: center;
            margin-bottom: 0;
            background: rgb(50,47,50);
            background: linear-gradient(90deg, rgba(50,47,50,1) 0%, rgba(207,202,207,1) 13%, rgba(255,255,255,1) 25%, rgba(255,255,255,1) 50%, rgba(255,255,255,1) 75%, rgba(207,202,207,1) 87%, rgba(56,50,56,1) 100%);
        }
        .navbar-spacer {
            margin-top: 10px;
        }
        
        .carousel {
            max-width: 80%; 
            margin: 20px auto; 
        }
        .carousel-inner {
            width: 100%;
            height: 400px; 
        }
        .carousel-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5); 
        }
        .footer {
            background: rgb(50,47,50);
            background: linear-gradient(90deg, rgba(50,47,50,1) 0%, rgba(207,202,207,1) 13%, rgba(255,255,255,1) 25%, rgba(255,255,255,1) 50%, rgba(255,255,255,1) 75%, rgba(207,202,207,1) 87%, rgba(56,50,56,1) 100%);
            color: black;
            padding: 2em 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        .footer img {
            width: 80px;
            height: 80px;
            margin-bottom: 1em;
        }
        .footer .footer-content {
            text-align: center;
        }
        .footer .footer-content h2 {
            margin: 0;
            font-size: 2em;
            font-family: 'Roboto Slab', serif;
            color: black;
        }
        .footer .footer-content p {
            margin: 0.5em 0;
            font-family: 'Roboto', sans-serif;
        }
        .footer .footer-content a {
            color: #ff0000;
            text-decoration: none;
            font-weight: bold;
        }
        .footer .footer-content a:hover {
            text-decoration: underline;
        }
        .social-icons {
            margin-top: 1em;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .social-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }
        .social-icon img {
            width: 100%; 
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .social-icon:hover img {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }
         .auth-buttons {
            position: absolute;
            right: 20px;
            top: 20px;
        }
        .auth-buttons a {
            text-decoration: none;
        }

        .auth-buttons button {
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            color: #fff;
            background-color: red;
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 120px;
        }

        .auth-buttons button:hover {
            background-color: #e55347;
            transform: scale(1.05);
        }
        .about-section {
            padding: 2em;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 80%;
            text-align: center;
        }
        .about-section h2{
            font-family: 'Roboto Slab', serif;
            color: black;
            margin-bottom: 1em;
        }
        .about-section p{
            font-family: 'Roboto', sans-serif;
            color: black;
            line-height: 1.6;
        }
    </style>
        <script>
        // JavaScript para interceptar clics en los enlaces de Inscripción y Cursos
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.navbar-nav .nav-link').forEach(function(link) {
                link.addEventListener('click', function(event) {
                    if (this.getAttribute('href') === 'inscripcion.php' || this.getAttribute('href') === 'cursos.php') {
                        event.preventDefault(); // Evita que el enlace se siga
                        alert('Debes iniciar sesión'); // Muestra el mensaje de alerta
                    }
                });
            });
        });
    </script>
</head>
<body>
    <div class="header">
        <a class="navbar-brand" href="#">
            <img src="bomberosmc.jpeg" alt="imagen_bomberos">
            <h1>BOMBEROS VOLUNTARIOS</h1>
        </a>
    </div>
    <div class="auth-buttons">
        <a href="inicio.php"><button>Login</button></a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light navbar-spacer">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="inscripcion.php">Inscripción</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cursos.php">Cursos</a>
                </li>

            </ul>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="bomberos5.jpeg" class="d-block w-100" alt="bomberos">
            </div>
            <div class="carousel-item">
                <img src="bomberos6.jpeg" class="d-block w-100" alt="bomberos">
            </div>
            <div class="carousel-item">
                <img src="bomberos7.jpeg" class="d-block w-100" alt="ropa de bomberos">
            </div>
            <div class="carousel-item">
                <img src="bomberos8.jpeg" class="d-block w-100" alt="bomberos">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="about-section">
        <h2>Bomberos monte cristo</h2>
        <p>En el corazón de Monte Cristo, los Bomberos de Monte Cristo se destacan como un símbolo de valentía, compromiso y servicio a nuestra comunidad. Fundada con el propósito de proteger y servir, nuestra organización está formada por un equipo de profesionales y voluntarios dedicados a salvaguardar la vida, los bienes y el entorno de nuestros vecinos. Nos enorgullece ofrecer una respuesta rápida y efectiva a cualquier situación de emergencia, gracias a un equipamiento de última tecnología y a la formación continua de nuestro personal. Cada miembro de nuestra brigada está preparado para actuar con precisión y determinación, garantizando la seguridad y el bienestar de la comunidad en todo momento.</p>
    </div>
    <footer class="footer">
        <img src="bomberosmc.jpeg" alt="Logo">
        <div class="footer-content">
            <h2>BOMBEROS VOLUNTARIOS DE MONTE CRISTO</h2>
            <p>Teléfono:0351-152-009-401 al 08</p>
            <p>Dirección: Av. Sarmiento Nº 112. Monte Cristo</p>
        </div>

        <div class="social-icons">
                <a href="https://www.facebook.com/bvmontecristo/?locale=es_LA" target="_blank" class="social-icon">
                    <img src="facebook.jpg" alt="Facebook Logo">
                </a>
                <a href="https://www.instagram.com/bvmontecristo/" target="_blank" class="social-icon">
                    <img src="instagram.jpg" alt="Instagram Logo">
                </a>
                <a href="https://www.youtube.com/user/bomberosra" target="_blank" class="social-icon">
                    <img src="youtube.png" alt="YouTube Logo">
                </a>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6u/2kUezt7L84aH1Z3gNh9+8f0J+kP/K02zXrXy2s0B0fI6BDMJn8bWyGGWnI4hFqZ6Z2okO2IrT/A/4J5Zg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </footer>
</body>
</html>