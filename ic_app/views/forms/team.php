<div class="container-fluid col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <h1>
        <i class="fa fa-book"></i>
        <?php echo $formTitle ?>
    </h1>
    <div class="form-group no-padd col-lg-2 col-md-42 col-sm-2 col-xs-12">
        <label for="order">Orden</label>
        <input type="text" name="order" class="form-control"
            <?php if(isset($team)): ?>
                data-team-id="<?php echo $team->id ?>"
                value="<?php echo $team->order ?>"
            <?php else: ?>
                value="1"
            <?php endif ?>>
    </div>
    <h3>
    </h3>
    <?php if (!isset($team)): ?>
        <?php echo form_open_multipart('/admin/addteam') ?>
    <?php else: ?>
        <?php echo form_open_multipart('/admin/updateteam/'.$team->id) ?>
            <input type="hidden" name="id" value="<?php echo $team->id ?>">
    <?php endif ?>
        <div class="form-group">
            <!-- name -->
            <label for="name">Nombres</label>
            <input name="name" type="word" class="form-control" required
                <?php if(isset($team)){ echo "value='".$team->name."'"; } ?>>
            <!-- last name -->
            <label for="last_name">Apellidos</label>
            <input name="last_name" type="text" class="form-control" required
                <?php if(isset($team)){ echo "value='".$team->last_name."'"; } ?>>
            <!-- description -->
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control" rows="12" required
            ><?php if (isset($team)): ?><?php echo $team->description; ?><?php endif ?></textarea>
            <!-- image -->
            <label for="image">Tamaño: 205x205 pixeles</label>
            <div class="clear-1"></div>
            <input type="file" name="image" <?php if(!isset($team)){echo "required";} ?>>
            <div class="clear-1"></div>

            <input type="submit" value="Guardar" class="btn btn-success submit">
        </div>
    <?php echo form_close(); ?>
</div>
