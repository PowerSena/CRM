<?php
require_once("Config/conexion.php");

// Crear una instancia de la clase Database para obtener la conexión PDO
$database = new Database();
$pdo = $database->conectar();

// Verificar si se ha hecho clic en el enlace de registro
if(isset($_GET['accion']) && $_GET['accion'] == 'registro') {
    // Consultar si hay una licencia activa
    $query = "SELECT * FROM licencia WHERE estado = 1";
    $resultado = $pdo->query($query);

    // Si no hay una licencia activa, redirigir al usuario al index.php
    if($resultado->rowCount() != 1) {
        header("Location: index.php");
        exit(); // Detener la ejecución del script
    }
}

// Si llegamos aquí, significa que hay una licencia activa o no se ha intentado registrarse
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Assets/css/formulario.css">
    <title>FORMULARIO DE REGISTRO E INICIO SESIÓN</title>
</head>
<body>
    <div class="container-form register">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesión con tus datos</p>
                <input type="button" value="Iniciar Sesión" id="sign-in">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear una Cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <p>o usa tu email para registrarte</p>
                <form class="form">
                    <label>
                        <i class='bx bx-user' ></i>
                        <input type="text" placeholder="Nombre Completo">
                    </label>
                    <label >
                        <i class='bx bx-envelope' ></i>
                        <input type="email" placeholder="Correo Electronico">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña">
                    </label>
                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </div>
    </div>

    <div class="container-form login hide">
        <div class="information">
            <div class="info-childs">
                <h2>¡¡Bienvenido nuevamente!!</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesión con tus datos</p>
                <input type="button" value="Registrarse" id="sign-up">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesión</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <p>o Iniciar Sesión con una cuenta</p>
                <form class="form">
                    <label >
                        <i class='bx bx-envelope' ></i>
                        <input type="email" placeholder="Correo Electronico">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña">
                    </label>
                    <input type="submit" value="Iniciar Sesión">
                </form>
            </div>
        </div>
    </div>

    <script src="Assets/js/script.js"></script>
</body>
</html>