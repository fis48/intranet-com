<div class="container-fluid col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <div class="clear-25"></div>
    <h1 class="seciont-title">
        <i class="fa fa-newspaper"></i>
        Agregar proyectos
    </h1>
    <?php echo form_open_multipart('/admin/addproject') ?>
        <!-- title -->
        <div class="form-group no-padd col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label for="title">Título</label>
            <input name="title" type="text" class="form-control" required>
        </div>
        <div class="clear-1"></div>
        <!-- description -->
        <label for="description">Descripción</label>
        <textarea name="description" class="form-control" rows="8"></textarea>
        <!-- image -->
        <label for="image">Imagen del proyecto</label>
        <div class="clear-1"></div>
        <input name="image" type="file">

        <div class="clear-1"></div>
        <div class="clear-1"></div>
        <input type="submit" value="Publicar" class="btn btn-success submit">
        </div>
    <?php echo form_close(); ?>
</div>
