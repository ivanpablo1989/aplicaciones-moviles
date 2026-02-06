<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="<?= base_url('activos/css/body_footer/body_footer_contacto.css'); ?>">
</head>
<body style="background-image: url('<?= $fondo; ?>'); background-size: cover; background-position: center center; background-attachment: fixed;">

    <!-- TEXTO INTRODUCTORIO -->
    <section class="intro-text text-center">
        <h1>¿Necesitas ayuda o información?</h1>
        <p>Estamos aquí para asistirte en todo lo relacionado con nuestros servicios universitarios.</p>
    </section>

    <!-- TARJETA DE CONTACTO -->
    <main class="main-content">
        <div class="cuadro-contacto text-center">
            <p class="texto-principal">
                Escríbenos a <strong>ivaninfonet@gmail.com</strong> o llámanos al <strong>(011) 11 - 2310 - 6932</strong> para recibir atención personalizada.
            </p>
            <p class="extra-info">
                Nuestro equipo responde de lunes a viernes, de 9:00 a 18:00.
                Somos los mas responsable de zona sur
            </p>
        </div>
    </main>

    <!-- TEXTO DEBAJO DE LA TARJETA -->
    <section class="texto-adicional text-center">
        <p>Si tienes alguna consulta o inquietud adicional, no dudes en ponerte en contacto con nosotros. ¡Estamos aquí para ayudarte!</p>
    </section>

</body>
</html>
