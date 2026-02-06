<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="<?= base_url('activos/css/body_footer/body_footer_ayuda.css'); ?>">
</head>
<body style="background-image: url('<?= $fondo; ?>'); background-size: cover; background-position: center center; background-attachment: fixed;">

    <!-- Texto introductorio -->
    <section class="intro-text text-center">
        <h1>¿Necesitas asistencia?</h1>
        <p>Estamos aquí para ayudarte a utilizar nuestra plataforma de manera sencilla y efectiva.</p>
    </section>

    <!-- Tarjeta de ayuda -->
    <main class="main-content">
        <div class="cuadro-ayuda text-center">
            <h2>Ayuda</h2>
            <p>
                En esta sección encontrarás información y soporte para aprovechar al máximo UNLa Tienda.
            </p>
            <p class="extra-info">
                Guías rápidas, preguntas frecuentes y contacto con nuestro equipo de soporte.
            </p>
        </div>
    </main>

    <!-- Texto adicional debajo de la tarjeta -->
    <section class="texto-adicional text-center">
        <p>
            Contáctanos para cualquier consulta adicional. ¡Estamos para ayudarte!
        </p>
    </section>

</body>
</html>
