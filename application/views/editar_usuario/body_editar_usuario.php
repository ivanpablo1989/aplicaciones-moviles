
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="<?= base_url('activos/css/editar_usuario/body_editar_usuario.css'); ?>">

<main class="main-content" style="background-image: url('<?= $fondo ?? '' ?>');">

    <!-- TITULO Y DESCRIPCION -->
    <section class="page-header">
        <h1>Editar usuario</h1>
        <p>Modificá la información del usuario seleccionado. Los cambios se aplicarán inmediatamente al guardar.</p>
    </section>

    <!-- TARJETA -->
    <div class="card">

        <div class="card-info">
            Completá los campos que necesites actualizar. Si no ingresás una nueva contraseña, se mantendrá la actual.
        </div>

        <form action="<?= base_url('usuario/editar_usuario/' . ($usuario->id_usuario ?? '')) ?>" method="post">
            <input type="hidden" name="id_usuario" value="<?= $usuario->id_usuario ?? '' ?>">

            <div class="form-grid">

                <div class="form-group">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" value="<?= set_value('nombre', $usuario->nombre ?? '') ?>" class="form-control <?= form_error('nombre') ? 'error-input' : '' ?>" required>
                    <div class="error-msg"><?= form_error('nombre'); ?></div>
                </div>

                <div class="form-group">
                    <label class="form-label">Apellido</label>
                    <input type="text" name="apellido" value="<?= set_value('apellido', $usuario->apellido ?? '') ?>" class="form-control <?= form_error('apellido') ? 'error-input' : '' ?>" required>
                    <div class="error-msg"><?= form_error('apellido'); ?></div>
                </div>

                <div class="form-group">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" name="email" value="<?= set_value('email', $usuario->nombre_usuario ?? '') ?>" class="form-control <?= form_error('email') ? 'error-input' : '' ?>" required>
                    <div class="error-msg"><?= form_error('email'); ?></div>
                </div>

                <div class="form-group">
                    <label class="form-label">Contraseña <span class="opcional">(opcional)</span></label>
                    <input type="password" name="password" class="form-control <?= form_error('password') ? 'error-input' : '' ?>">
                    <div class="error-msg"><?= form_error('password'); ?></div>
                </div>

                <div class="form-group">
                    <label class="form-label">DNI</label>
                    <input type="number" name="dni" value="<?= set_value('dni', $usuario->dni ?? '') ?>" class="form-control <?= form_error('dni') ? 'error-input' : '' ?>" required>
                    <div class="error-msg"><?= form_error('dni'); ?></div>
                </div>

                <div class="form-group">
                    <label class="form-label">Teléfono</label>
                    <input type="text" name="telefono" value="<?= set_value('telefono', $usuario->telefono ?? '') ?>" class="form-control <?= form_error('telefono') ? 'error-input' : '' ?>">
                    <div class="error-msg"><?= form_error('telefono'); ?></div>
                </div>

            </div>

            <div class="botones-finales">
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                <a href="<?= base_url('administrador/lista_usuarios'); ?>" class="btn btn-danger">Cancelar</a>
            </div>

        </form>
    </div>

    <!-- TEXTO DE PIE -->
    <p class="footer-text">Asegurate de revisar todos los datos antes de guardar los cambios.</p>

</main>
