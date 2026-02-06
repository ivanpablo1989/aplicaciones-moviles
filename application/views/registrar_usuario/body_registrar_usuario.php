
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $titulo ?? 'UNLa Tienda'; ?></title>

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS personalizado -->
  <link rel="stylesheet" href="<?= base_url('activos/css/registrar_usuario/body_registrar_usuario.css?v=' . time()); ?>">
</head>

<body style="background-image: url('<?= $fondo; ?>');">

  <div class="registro-bg">

    <div class="registro-wrapper">

      <!-- Header -->
      <div class="registro-header">
        <h2>Registrate para continuar</h2>
        <p class="descripcion">
          Completá tus datos personales para crear una cuenta y disfrutar de todos nuestros servicios sin limitaciones.
        </p>
      </div>

      <?php if (isset($error)): ?>
        <div class="alert alert-danger">
          <strong>Atención:</strong> <?= $error; ?>
        </div>
      <?php endif; ?>

      <!-- Tarjeta de registro -->
      <div class="registro-card">

        <form method="post" action="<?= site_url('registrar/registrar_usuario'); ?>" autocomplete="off">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group col-md-6">
              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="dni">DNI</label>
              <input type="text" class="form-control" id="dni" name="dni" required>
            </div>
            <div class="form-group col-md-6">
              <label for="telefono">Teléfono</label>
              <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nombre_usuario">Email</label>
              <input type="email" class="form-control" id="nombre_usuario" name="nombre_usuario" required>
            </div>
            <div class="form-group col-md-6">
              <label for="palabra_clave">Contraseña</label>
              <input type="password" class="form-control" id="palabra_clave" name="palabra_clave" required autocomplete="new-password">
            </div>
          </div>

          <div class="registro-actions">
            <button type="submit" class="btn btn-success">Crear cuenta</button>
            <a href="<?= site_url('login'); ?>" class="btn btn-primary">Iniciar sesión</a>
          </div>

        </form>
      </div>

      <!-- Texto extra debajo -->
      <div class="registro-extra">
        <span>
          Al registrarte aceptás nuestros Términos y Condiciones y la Política de Privacidad
        </span>
      </div>

    </div>
  </div>

  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
