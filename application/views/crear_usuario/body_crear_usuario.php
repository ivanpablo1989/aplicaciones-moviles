
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="<?= base_url('activos/css/crear_usuario/body_crear_usuario.css'); ?>">

<main class="main-content crear-usuario-page" style="background-image: url('<?= $fondo ?? '' ?>');">

    <!-- TITULO Y DESCRIPCION -->
    <section class="page-header">
        <h1>Crear usuario</h1>
        <p>Completá los campos necesarios para registrar un nuevo usuario en el sistema</p>
    </section>

    <!-- TARJETA -->
    <div class="card">

        <div class="card-info">
            Todos los campos son obligatorios. La contraseña debe ser confirmada antes de guardar.
        </div>

        <form action="<?= base_url('usuario/crear_usuario'); ?>" method="post">

            <div class="form-grid">
                <!-- Nombre -->
                <div class="form-group">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" value="<?= set_value('nombre'); ?>" 
                           class="<?= form_error('nombre') ? 'error-input' : '' ?>" required>
                    <div class="error-msg"><?= form_error('nombre'); ?></div>
                </div>

                <!-- Apellido -->
                <div class="form-group">
                    <label class="form-label">Apellido</label>
                    <input type="text" name="apellido" value="<?= set_value('apellido'); ?>"
                           class="<?= form_error('apellido') ? 'error-input' : '' ?>" required>
                    <div class="error-msg"><?= form_error('apellido'); ?></div>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" name="email" value="<?= set_value('email'); ?>"
                           class="<?= form_error('email') ? 'error-input' : '' ?>" required>
                    <div class="error-msg"><?= form_error('email'); ?></div>
                </div>

                <!-- Contraseña -->
                <div class="form-group">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="password"
                           class="<?= form_error('password') ? 'error-input' : '' ?>" required>
                    <div class="error-msg"><?= form_error('password'); ?></div>
                </div>

                <!-- Confirmar Contraseña -->
                <div class="form-group">
                    <label class="form-label">Confirmar contraseña</label>
                    <input type="password" name="password_confirm"
                           class="<?= form_error('password_confirm') ? 'error-input' : '' ?>" required>
                    <div class="error-msg"><?= form_error('password_confirm'); ?></div>
                </div>

                <!-- DNI -->
                <div class="form-group">
                    <label class="form-label">DNI</label>
                    <input type="number" name="dni" value="<?= set_value('dni'); ?>"
                           class="<?= form_error('dni') ? 'error-input' : '' ?>" required>
                    <div class="error-msg"><?= form_error('dni'); ?></div>
                </div>

                <!-- Teléfono -->
                <div class="form-group">
                    <label class="form-label">Teléfono</label>
                    <input type="tel" name="telefono" value="<?= set_value('telefono'); ?>"
                           class="<?= form_error('telefono') ? 'error-input' : '' ?>">
                    <div class="error-msg"><?= form_error('telefono'); ?></div>
                </div>
            </div>

            <!-- BOTONES -->
            <div class="botones-finales">
                <button type="submit" class="btn">Crear usuario</button>
                <a href="<?= base_url('administrador'); ?>" class="btn btn-danger">Cancelar</a>
            </div>

        </form>
    </div>

    <!-- TEXTO DEBAJO DE LA TARJETA -->
    <div class="texto-debajo-tarjeta">
        <p>Si tienes problemas creando un usuario, contacta al administrador del sistema.<br>
           Asegúrate de ingresar todos los datos correctamente antes de guardar.</p>
    </div>

</main>
