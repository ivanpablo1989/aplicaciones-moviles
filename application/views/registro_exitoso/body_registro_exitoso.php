<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Exitoso</title>
    <link rel="stylesheet" href="<?= base_url('activos/css/registro_exitoso/body_registro_exitoso.css'); ?>">
</head>

<body style="background-image: url('<?= $fondo; ?>');">

    <main class="inicio-container">

        <!-- TEXTO SUPERIOR (FUERA DE LA TARJETA) -->
        <section class="mensaje-superior">
            <h2>¡Acción completada!</h2>
            <p>Tu registro se completó correctamente. Estás a un paso de comenzar.</p>
        </section>

        <!-- TARJETA -->
        <div class="contenido">
            <h1 class="titulo">Registro Exitoso</h1>
            <p class="mensaje">Tu cuenta ha sido creada correctamente. 
                Ya podés explorar todas nuestras funcionalidades sin restricciones.</p>

            <div class="botones">
                <a href="<?= base_url('principal'); ?>" class="boton boton-verde">
                    Página Principal
                </a>
                <a href="<?= base_url('login'); ?>" class="boton boton-azul">
                    Iniciar Sesión
                </a>
            </div>
        </div>

        <!-- TEXTO DEBAJO DE LA TARJETA -->
        <section class="mensaje-inferior">
            <p>Si tenés dudas o problemas, podés contactarnos en cualquier momento.
                 Estamos para ayudarte.</p>
        </section>

    </main>

</body>
</html>
