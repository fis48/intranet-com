<?php if ($logged !== NULL): ?>
    <div class="top-backend container-fluid">
        <i class="fa fa-lg fa-user-circle"></i>
        <span><?php echo $logged->full_name ?></span>
        <a href="/admin/logout" class="close-sess btn btn-sm float-right">
            <i class="fa fa-times-circle"></i>
            <span>Cerrar sesión</span>
        </a>
    </div>
        <nav>
            <a href="/admin/dashboard" class="btn btn-warning btn-sm">
                <i class="fa fa-arrow-left"></i>
                Salir
            </a>
        </nav>
<?php endif ?>

