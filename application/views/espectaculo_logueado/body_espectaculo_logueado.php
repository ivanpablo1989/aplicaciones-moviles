<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($espectaculo['nombre']); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="<?= base_url('activos/css/espectaculo_logueado/body_espectaculo_logueado.css'); ?>">
</head>
<body>

<!-- Fondo con overlay -->
<div class="fondo-body" style="background-image: url('<?= htmlspecialchars($fondo); ?>');"></div>

<main class="container py-5">

    <!-- Introducción -->
    <section class="intro text-center mb-4">
        <h2 class="fw-bold titulo-espectaculo"><?= htmlspecialchars($espectaculo['nombre']); ?></h2>
        <p class="lead descripcion-intro">
            Conocé toda la información del evento, disponibilidad de entradas y realizá tu reserva de forma rápida y segura.
        </p>
    </section>

    <!-- Tarjeta principal más compacta -->
    <section class="card shadow mx-auto mb-4 card-principal">
        <div class="card-body text-center p-4">

            <!-- Imagen -->
            <div class="imagen-wrapper mb-3">
                <img src="<?= base_url('activos/imagenes/' . $espectaculo['imagen']); ?>"
                     alt="<?= htmlspecialchars($espectaculo['nombre']); ?>"
                     class="img-fluid rounded-3 shadow-sm imagen-artista">
            </div>

            <!-- Descripción -->
            <p class="descripcion mb-3"><?= htmlspecialchars($espectaculo['descripcion']); ?></p>

            <!-- Detalles -->
            <ul class="list-group list-group-flush mb-3 detalles text-start">
                <li><strong>Fecha:</strong> <?= htmlspecialchars($espectaculo['fecha']); ?></li>
                <li><strong>Hora:</strong> <?= htmlspecialchars($espectaculo['hora']); ?></li>
                <li><strong>Dirección:</strong> <?= htmlspecialchars($espectaculo['direccion']); ?></li>
                <li><strong>Entradas disponibles:</strong> <?= htmlspecialchars($espectaculo['disponibles']); ?></li>
            </ul>

            <?php if (!empty($mensaje)): ?>
                <div class="alert alert-success mb-3"><?= htmlspecialchars($mensaje); ?></div>
            <?php endif; ?>

            <?php if ($espectaculo['disponibles'] > 0): ?>
                <form method="post" action="<?= site_url('reservar/procesar_reserva/' . $espectaculo['id_espectaculo']); ?>" class="mb-3 formulario">
                    <div class="mb-2">
                        <label for="cantidad_entradas" class="form-label">Cantidad de entradas</label>
                        <input type="number" name="cantidad_entradas" id="cantidad_entradas"
                               min="1" max="<?= htmlspecialchars($espectaculo['disponibles']); ?>" required
                               class="form-control input-cantidad">
                    </div>
                    <div class="d-flex flex-wrap justify-content-center gap-2">
                        <button type="submit" class="btn btn-success btn-sm">Reservar</button>
                        <a href="<?= site_url('usuario/usuario_espectaculos'); ?>" class="btn btn-primary btn-sm">Ir a Espectáculos</a>
                    </div>
                </form>
            <?php else: ?>
                <div class="alert alert-danger mb-2">Entradas agotadas.</div>
                <a href="<?= site_url('usuario/usuario_espectaculos'); ?>" class="btn btn-primary btn-sm">Ir a Espectáculos</a>
            <?php endif; ?>

        </div>
    </section>

    <!-- Mapa -->
    <section class="mapa-section text-center mb-5">
        <h2>Ubicación del espectáculo</h2>
        <p class="mapa-intro">
            Encontrá fácilmente el lugar del evento en el mapa para organizar tu llegada.
        </p>

        <div class="mapa-externa mb-3">
            <img src="<?= base_url('activos/imagenes/mapa.jfif'); ?>" alt="Mapa del lugar" class="img-fluid rounded shadow-sm">
        </div>

        <p class="mapa-texto">
            El evento se realizará en un espacio accesible y cómodo, con transporte público cercano.
        </p>
    </section>

</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
