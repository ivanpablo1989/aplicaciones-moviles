<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titulo) ? $titulo : 'Cartelera' ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="<?= base_url('activos/css/principal/body_principal.css?v=' . time()) ?>">
</head>
<body style="background-image: url('<?= isset($fondo) ? $fondo : '' ?>');">

<main class="inicio-container">

    <!-- SECCIÓN DE BIENVENIDA -->
    <section class="bienvenida">
        <div class="texto-limitado mx-auto text-center">
            <h1 class="mensaje-bienvenida"><?= isset($titulo) ? $titulo : 'Cartelera' ?></h1>
            <p class="mensaje-sub">
                Descubrí nuestra selección de eventos destacados: conciertos, obras de teatro y experiencias culturales únicas.
            </p>
        </div>
    </section>

    <!-- SECCIÓN DE CARTELERA -->
    <section class="cartelera">
        <div class="tarjetas-container">

            <?php if (!empty($espectaculos)): ?>
                <?php foreach ($espectaculos as $e): ?>
                    <article class="tarjeta">

                        <h3 class="nombre-artista"><?= $e['nombre'] ?></h3>

                        <img
                            src="<?= base_url('activos/imagenes/' . $e['imagen']) ?>"
                            alt="<?= $e['nombre'] ?>"
                            class="imagen"
                            loading="lazy"
                        >

                        <p class="descripcion"><?= $e['descripcion'] ?></p>
                        <p class="precio">$<?= number_format($e['precio'], 2, ',', '.') ?></p>

                        <a href="<?= site_url('principal/espectaculo_principal/' . $e['id_espectaculo']) ?>"
                           class="boton-ver">Ver espectáculo</a>

                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="texto-general texto-limitado">
                    No hay espectáculos disponibles en este momento.
                </p>
            <?php endif; ?>

        </div>

        <div class="texto-general texto-limitado">
            ¡No te pierdas ninguno de nuestros eventos destacados! Son los mejores del mundo.
        </div>
    </section>

</main>

<!-- jQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
