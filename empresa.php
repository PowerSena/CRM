<?php
include 'Config/conexion.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nitc = $_POST['nitc'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    
    $database = new Database();
    $pdo = $database->conectar();
    
    $sql = "INSERT INTO empresa (nitc, nombre, direccion, telefono) VALUES (:nitc, :nombre, :direccion, :telefono)";
    
    $stmt = $pdo->prepare($sql);
    
    $params = array(
        ':nitc' => $nitc,
        ':nombre' => $nombre,
        ':direccion' => $direccion,
        ':telefono' => $telefono
    );
    
    if($stmt->execute($params)){
        echo "Empresa creada correctamente.";

    } else{
      
        echo "Error al crear la empresa.";

    }
    
    unset($stmt);
    unset($pdo);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tecni-Electric</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">
    </div>
  </header><!-- End Header -->
  
  
  <!-- ======= Hero Section ======= -->
  <section >
    <h2>Crear Empresa</h2>
    <form action="" method="post">
        <label for="nitc">NIT:</label>
        <input type="text" id="nitc" name="nitc" required><br><br>
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required><br><br>
        
        <input type="submit" value="Crear Empresa">
    </form>
  </section><!-- End Hero -->
  

 <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>TecniElectrics</span></strong>. All Rights Reserved
        <div class="copyright">
          <span><a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terminos&Condiciones</a></span>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <!-- Modal -->
  <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Términos y Condiciones</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Bienvenido al [Tecnelectrics], proporcionado por [Nombre de la Empresa]. Al utilizar nuestro servicio, usted acepta los siguientes términos y condiciones:

          <br><br><strong>Registro y Cuentas de Usuario:</strong> Para utilizar nuestro CRM, puede ser necesario registrarse y crear una cuenta de usuario. Usted es responsable de mantener la confidencialidad de su cuenta y contraseña.

          <br><br><strong>Propiedad Intelectual:</strong> Todos los derechos de propiedad intelectual sobre el CRM [Nombre del CRM] y cualquier contenido generado por los usuarios pertenecen a [Nombre de la Empresa].

          <br><br><strong>Privacidad y Seguridad:</strong> Nos comprometemos a proteger la privacidad y seguridad de sus datos.

          <br><br><strong>Uso Aceptable:</strong> Usted acepta utilizar nuestro CRM de manera ética y legal. Se prohíbe cualquier uso del servicio que sea ilegal o que viole los derechos de terceros.

          <br><br><strong>Responsabilidad:</strong> No somos responsables de ningún daño directo, indirecto, incidental, especial o consecuente que surja del uso de nuestro CRM. Usted utiliza nuestro servicio bajo su propio riesgo.
        </div>
      </div>
    </div>
  </div>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
