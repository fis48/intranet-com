<div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1 class="seciont-title">
        <i class="fa fa-newspaper"></i>
        <?php if (isset($new)): ?>
            Actualizar boletín
        <?php else: ?>
            Agregar boletín
        <?php endif ?>
    </h1>
    <?php if (isset($new)): ?>
        <?php echo form_open_multipart('/index.php/admin/updatenews/'.$new->id) ?>
    <?php else: ?>
        <?php echo form_open_multipart('/index.php/admin/addnews') ?>
    <?php endif ?>
        <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <!-- title -->
            <label for="title">Título</label>
            <input name="title" type="text" class="form-control" required
                <?php if(isset($new)){echo "value='$new->title'";} ?>>
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <!-- date -->
            <label for="date">Fecha</label>
            <input name="date" type="date" class="form-control"
                <?php if (isset($new)): ?>
                    <?php $newDate = new DateTime($new->date); ?>
                    value="<?php echo $newDate->format('Y-m-d') ?>"
                <?php else: ?>
                    value="<?php echo $now->format('Y-m-d'); ?>"
                <?php endif ?>
                 required>
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- description -->
            <label for="description">Resumen del boletín</label>
            <textarea name="description" class="form-control" rows="8" required
            ><?php if(isset($new)){echo $new->description;} ?></textarea>
        </div>
        <!-- bulletin body -->
        <div class="cont-bull form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 class="section-title">Cuerpo del boletín</h2>
            <label for="body">Boletín</label>
            <textarea id="bull-body" name="body" class="form-control"
                rows="8"><?php if(isset($new)){echo $new->body;} ?></textarea>
            <!-- image: from ajax bulletin drop image -->
            <input id="image" name="image" value="" type="hidden">
            <!-- submit -->
            <?php if (isset($new)): ?>
                <input type="hidden" name="id" value="<?php echo $new->id ?>">
            <?php endif ?>
            <input type="submit" value="Publicar" class="btn btn-success submit">
        </div>
    <?php echo form_close(); ?>
</div>









