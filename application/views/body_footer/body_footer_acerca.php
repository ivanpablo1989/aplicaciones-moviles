
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $titulo; ?></title>

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="<?= base_url('activos/css/body_footer/body_footer_acerca.css'); ?>">
</head>

<body style="background-image: url('<?= $fondo; ?>');">

  <!-- Texto introductorio fuera de la tarjeta -->
  <section class="intro-text">
    <h1><?= $titulo; ?></h1>
    <p>Un espacio pensado para estudiantes</p>
  </section>

  <!-- Contenedor principal -->
  <main class="main-content">

    <!-- Tarjeta Acerca -->
    <div class="cuadro-acerca">
      <h2><?= $titulo; ?></h2>
      <p>
        Te ofrecemos productos y actividades diseñadas para acompañarte en tu vida universitaria.
      </p>
      <p class="extra-info">
        Explora nuestras secciones y descubre beneficios, eventos y contenido exclusivo para nuestra comunidad.
      </p>
    </div>

    <!-- Texto adicional debajo -->
    <div class="texto-debajo">
      <p>¡Aprovecha todas las herramientas y recursos que tenemos para ti!</p>
    </div>

  </main>

</body>
</html>
