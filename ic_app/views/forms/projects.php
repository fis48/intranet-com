<div class="container-fluid col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <div class="clear-25"></div>
    <h1 class="seciont-title">
        <i class="fa fa-check"></i>
        <?php if (isset($project)): ?>
            Actualizar proyecto
        <?php else: ?>
            Agregar proyectos
        <?php endif ?>
    </h1>
    <?php if (isset($project)): ?>
        <?php echo form_open_multipart('/index.php/admin/updateproject/'.$project->id) ?>
    <?php else: ?>
        <?php echo form_open_multipart('/index.php/admin/addproject') ?>
    <?php endif ?>
        <!-- title -->
        <div class="form-group no-padd col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <label for="title">Título</label>
            <input name="title" type="text" class="form-control" required
            <?php if(isset($project)){echo "value='$project->title'";} ?> >
        </div>
        <!-- date -->
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <label for="date">Fecha</label>
            <input name="date" type="date" class="form-control"
                <?php if (isset($project)): ?>
                    <?php $projDate = new DateTime($project->date); ?>
                    value="<?php echo $projDate->format('Y-m-d') ?>"
                <?php else: ?>
                    value="<?php echo $now->format('Y-m-d'); ?>"
                <?php endif ?>
            >
        </div>
        <div class="clear-1"></div>
        <!-- description -->
        <label for="description">Descripción</label>
        <textarea name="description" class="form-control" rows="8"
            ><?php if(isset($project)){echo $project->description;}?></textarea>
        <!-- image -->
        <label for="image">Imagen del proyecto</label>
        <?php if (isset($project) && $project->image !== ''): ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padd">
                <img src="<?php echo '/projects/'.$project->image ?>" class="img-fluid img-thumbnail">
            </div>
        <?php endif ?>
        <div class="clear-1"></div>
        <input name="image" type="file" />

        <div class="clear-1"></div>
        <div class="clear-1"></div>
        <?php if (isset($project)): ?>
            <input type="hidden" name="id" value="<?php echo $project->id ?>">
        <?php endif ?>
        <input type="submit" value="Publicar" class="btn btn-success submit">
        </div>
    <?php echo form_close(); ?>
</div>
