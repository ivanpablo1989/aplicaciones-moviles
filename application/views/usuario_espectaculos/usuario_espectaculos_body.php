
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cartelera de espectáculos</title>

    <!-- Bootstrap CSS (para flexibilidad) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet"
          href="<?= base_url('activos/css/usuario_espectaculos/usuario_espectaculos_body.css'); ?>">
</head>
<body>

<?php
$estilo_fondo = '';
if (!empty($fondo)) 
{
    $estilo_fondo = 'style="background-image: url(' . $fondo . ');"';
}
?>

<main class="inicio-container" <?= $estilo_fondo; ?>>

    <!-- Bienvenida -->
    <section class="bienvenida">
        <h1 class="mensaje-bienvenida">Lista de los mejores espectáculos</h1>
        <p class="mensaje-sub">
            Descubrí nuestra selección de eventos destacados y experiencias culturales únicas.
        </p>
    </section>

    <!-- Cartelera -->
    <section class="cartelera">
        <div class="tarjetas-container">

            <?php if (!empty($espectaculos)): ?>
                <?php foreach ($espectaculos as $espectaculo): ?>

                    <div class="tarjeta-wrapper">

                        <article class="tarjeta">

                            <h2 class="titulo"><?= $espectaculo['nombre']; ?></h2>

                            <img src="<?= base_url('activos/imagenes/' . $espectaculo['imagen']); ?>"
                                 alt="<?= $espectaculo['nombre']; ?>"
                                 class="imagen">

                            <p class="descripcion"><?= $espectaculo['descripcion']; ?></p>

                            <p class="precio">$<?= number_format($espectaculo['precio'], 2, ',', '.'); ?></p>

                            <a href="<?= site_url('espectaculos/espectaculo_logueado/' . $espectaculo['id_espectaculo']); ?>"
                               class="boton-ver">Ver espectáculo
                            </a>
                        </article>

                        <p class="texto-extra">¡No te pierdas esta experiencia única!</p>

                    </div>

                <?php endforeach; ?>
            <?php else: ?>
                <p class="sin-espectaculos">
                    No hay espectáculos disponibles en este momento.
                </p>
            <?php endif; ?>

        </div>
    </section>

</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
