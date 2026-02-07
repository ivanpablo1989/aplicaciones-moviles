<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Exitoso</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('activos/css/registro_exitoso/body_registro_exitoso.css'); ?>">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

    <!-- Fondo -->
    <div class="fondo" style="background-image: url('<?= $fondo; ?>');"></div>

    <main class="inicio-container container d-flex flex-column align-items-center justify-content-center">

        <!-- TEXTO SUPERIOR -->
        <section class="mensaje-superior text-center">
            <h2>¡Acción completada!</h2>
            <p>Tu registro se completó correctamente. Estás a un paso de comenzar.</p>
        </section>

        <!-- TARJETA -->
        <div class="contenido text-center">
            <h1 class="titulo">Registro Exitoso</h1>
            <p class="mensaje">Tu cuenta ha sido creada correctamente. Ya podés explorar todas nuestras funcionalidades sin restricciones.</p>

            <div class="botones d-flex justify-content-center flex-wrap">
                <a href="<?= base_url('principal'); ?>" class="btn boton-verde m-2">Página Principal</a>
                <a href="<?= base_url('login'); ?>" class="btn boton-azul m-2">Iniciar Sesión</a>
            </div>
        </div>

        <!-- TEXTO INFERIOR -->
        <section class="mensaje-inferior text-center mt-4">
            <p>Si tenés dudas o problemas, podés contactarnos en cualquier momento. Estamos para ayudarte.</p>
        </section>

    </main>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fondo más nítido con jQuery -->
    <script>
        $(document).ready(function(){
            $('.fondo').css({
                'background-size': 'cover',
                'background-position': 'center',
                'filter': 'brightness(1) contrast(1.05) saturate(1.1)'
            });
        });
    </script>

</body>
</html>
