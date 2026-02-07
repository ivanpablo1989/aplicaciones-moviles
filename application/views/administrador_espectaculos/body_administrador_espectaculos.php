
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($titulo ?? 'Administración de Espectáculos'); ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="<?= base_url('activos/css/administrador_espectaculos/body_administrador_espectaculos.css'); ?>">
</head>

<body style="background-image: url('<?= $fondo ?? ''; ?>');">

<main class="main-content container">

    <!-- ENCABEZADO -->
    <section class="encabezado text-center">
        <h1 class="titulo-principal">
            <?= htmlspecialchars($titulo ?? 'Administración de Espectáculos'); ?>
        </h1>

        <p class="descripcion-principal">
            Desde este panel podés editar, eliminar o revisar la información de cada espectáculo.
        </p>
    </section>

    <!-- TARJETAS -->
    <?php if (!empty($espectaculos)): ?>

        <div class="tarjetas-contenedor">

            <?php foreach ($espectaculos as $e): ?>
                <div class="tarjeta">

                    <!-- Nombre arriba -->
                    <h3 class="nombre-artista">
                        <?= htmlspecialchars($e['nombre'], ENT_QUOTES); ?>
                    </h3>

                    <?php 
                        $img_url = !empty($e['imagen'])
                            ? base_url('activos/imagenes/' . htmlspecialchars($e['imagen'], ENT_QUOTES))
                            : base_url('activos/imagenes/default.jpg');
                    ?>

                    <img src="<?= $img_url ?>" alt="<?= htmlspecialchars($e['nombre'], ENT_QUOTES); ?>" class="imagen">

                    <div class="contenido-info">
                        <p class="descripcion-artista">
                            <?= !empty($e['descripcion']) ? htmlspecialchars($e['descripcion'], ENT_QUOTES) : 'Sin descripción'; ?>
                        </p>
                        <p><strong>Fecha:</strong> <?= date('d/m/Y', strtotime($e['fecha'])); ?></p>
                        <p><strong>Hora:</strong> <?= date('H:i', strtotime($e['hora'])); ?></p>
                        <p><strong>Disponibles:</strong> <?= $e['disponibles']; ?></p>
                        <p><strong>Precio:</strong>
                            <?= !empty($e['precio']) ? '$' . htmlspecialchars($e['precio'], ENT_QUOTES) : 'No definido'; ?>
                        </p>
                    </div>

                    <div class="acciones-tarjeta">
                        <a href="<?= base_url('espectaculos/editar_espectaculo/' . $e['id_espectaculo']); ?>" class="btn-editar">
                            Editar
                        </a>
                        <a href="<?= base_url('espectaculos/eliminar_espectaculo/' . $e['id_espectaculo']); ?>" class="btn-eliminar">
                            Eliminar
                        </a>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>

        <!-- TEXTO POR FUERA -->
        <p class="texto-debajo-todas-tarjetas">
            Gestioná todos los espectáculos activos desde este panel administrativo.
        </p>

    <?php else: ?>
        <p class="texto-adicional">No hay espectáculos disponibles actualmente.</p>
    <?php endif; ?>

</main>

</body>
</html>
