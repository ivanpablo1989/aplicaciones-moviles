
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="<?= base_url('activos/css/espectaculo_sin_loguear/body_espectaculo_sin_loguear.css?v=' . time()) ?>">
</head>
<body>

    <!-- Fondo -->
    <div class="fondo-body" style="background-image: url('<?= htmlspecialchars($fondo) ?>');" aria-hidden="true"></div>

    <!-- Intro -->
    <header class="intro-text">
        <h1>La Mejor Función</h1>
        <p>El recital más excepcional de la historia de la música. La mejor experiencia para vivirla en directo.</p>
    </header>

    <!-- Tarjeta del espectáculo -->
    <main class="registro-container d-flex justify-content-center">
        <article class="tarjeta-espectaculo">

            <section class="espectaculo-info mb-4">
                <h2 class="espectaculo-nombre"><?= htmlspecialchars($espectaculo['nombre']) ?></h2>
                <p class="espectaculo-descripcion"><?= htmlspecialchars($espectaculo['descripcion']) ?></p>
            </section>

            <figure class="imagen mb-4">
                <img 
                    src="<?= base_url('activos/imagenes/' . $espectaculo['imagen']) ?>" 
                    alt="Imagen del espectáculo"
                    class="imagen-espectaculo">
            </figure>

            <section class="detalles mb-3">
                <ul class="detalles-fila list-unstyled">
                    <li><strong>Fecha:</strong> <?= htmlspecialchars($espectaculo['fecha']) ?></li>
                    <li><strong>Hora:</strong> <?= htmlspecialchars($espectaculo['hora']) ?></li>
                    <li><strong>Dirección:</strong> <?= htmlspecialchars($espectaculo['direccion']) ?></li>
                    <li><strong>Precio:</strong> $<?= number_format($espectaculo['precio'], 2, ',', '.') ?></li>
                    <li><strong>Entradas disponibles:</strong> <?= htmlspecialchars($espectaculo['disponibles']) ?></li>
                </ul>
            </section>

            <section class="informacion mb-3">
                <p class="estado <?= $espectaculo['disponibles'] > 0 ? 'disponible' : 'agotado' ?>">
                    <?= $espectaculo['disponibles'] > 0 ? '¡Todavía hay lugares disponibles!' : 'Entradas agotadas.' ?>
                </p>
            </section>

            <section class="reserva-login text-center mt-3">
                <p class="texto-login mb-2">Para reservar entradas, primero debés iniciar sesión.</p>
                <a href="<?= site_url('login') ?>" class="btn btn-primary boton-login">Iniciar sesión</a>
            </section>

        </article>
    </main>

    <!-- MAPA -->
    <section class="mapa-section text-center">
        <h2 class="mapa-titulo">Ubicación del espectáculo</h2>

        <p class="mapa-descripcion">
            Encontrá fácilmente el lugar del evento en el mapa para organizar tu llegada.
        </p>

        <div class="mapa-externa">
            <img src="<?= base_url('activos/imagenes/mapa.jfif') ?>" alt="Mapa del lugar" class="imagen-mapa">
        </div>
    </section>

    <!-- Texto final -->
    <section class="texto-final text-center">
        <p>Este es el lugar donde podrás disfrutar del espectáculo. ¡No te lo pierdas!</p>
    </section>

    <!-- jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
