<?php 
    require_once '../includes/header.php';
?>

<!-- Body -->
<div class="container">
    <div class="row justify-content-center mt-5 md-5">
        <div class="col-6">
            <h1>Registro<h1>
            <form action="" method="post">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control"
                <?php (isset($errores['name']) )? "is-invalid":"" ?>
                id="name" name="name" aria-describedby="nameHelp" placeholder="Introduce un nombre de usuario">
                <small id="nameHelp" class="form-text text-muted">El nombre con el que te identificarás en la página web.</small>
                <?php if( isset($errores['name']) ): ?>
                    <div class="invalid-feedback">
                        El nombre es obligatorio.
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Introduce un email">
                <small id="emailHelp" class="form-text text-muted">Prometemos no hacer cosas malas con tu email.</small>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Introduce tu contraseña">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirma contraseña</label>
                <input type="password" class="form-control" id="'password_confirmation'" name="password" placeholder="Confirma tu contraseña">
            </div>
            <button type="submit" class="btn btn-primary" name="register">Enviar</button>
            </form>
        </div>
    </div>
</div>
<!-- End Body -->

<?php 
    require_once '../includes/footer.php';
?>