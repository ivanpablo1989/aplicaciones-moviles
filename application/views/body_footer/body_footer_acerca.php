<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $titulo; ?></title>

  <link rel="stylesheet" href="<?= base_url('activos/css/body_footer/body_footer_acerca.css?v=' . time()); ?>">
</head>

<body style="background-image: url('<?= $fondo; ?>');">

  <!-- Texto introductorio fuera de la tarjeta -->
  <section class="intro-text">
    <h1><?= $titulo; ?></h1>
    <p>
      Un espacio pensado para estudiantes de todos los niveles,
      de todas las universidades.
    </p>
  </section>

  <!-- Contenedor principal -->
  <main class="main-content">

    <!-- Tarjeta Acerca -->
    <article class="cuadro-acerca">
      <p class="texto-principal">
        Te ofrecemos productos y actividades diseñadas para acompañarte
        en tu vida universitaria.
      </p>

      <p class="extra-info">
        Explorá nuestras secciones y descubrí beneficios, eventos
        y contenido exclusivo para nuestra comunidad.
      </p>
    </article>

    <!-- Texto adicional debajo -->
    <div class="texto-debajo">
      <p>
        Aprovechá todas las herramientas y recursos que tenemos para vos.
        Somos los mejores.
      </p>
    </div>

  </main>

</body>
</html>

