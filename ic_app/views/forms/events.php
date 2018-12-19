<div class="container-fluid col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <h1 class="seciont-title">
        <i class="fa fa-newspaper"></i>
        Agregar eventos
    </h1>
    <?php echo form_open_multipart('/admin/addevent') ?>
        <!-- title -->
        <div class="form-group no-padd col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label for="title">Título</label>
            <input name="title" type="text" class="form-control" required>
        </div>
        <!-- location -->
        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label for="location">Lugar</label>
            <input name="location" type="text" class="form-control" required>
        </div>
        <div class="form-group no-padd col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- date ini -->
            <label for="date_ini">Fecha de inicio</label>
            <input name="date_ini" type="date" value="<?php echo $now->format('Y-m-d'); ?>"
                class="form-control">
        </div>
        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <!-- time ini -->
            <label for="time_ini">Hora de inicio</label>
            <input name="time_ini" type="time" value="<?php echo $now->format('H:i'); ?>"
                class="form-control">
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- date end -->
            <div id="date-end">
                <label for="date_end">Fecha de finalización</label>
                <input name="date_end" type="date" value="<?php echo $now->format('Y-m-d'); ?>"
                    class="form-control">
            </div>
        </div>
        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <!-- time end -->
            <label for="time_end">Hora de finalización</label>
            <input name="time_end" type="time" value="<?php echo $now->format('H:i'); ?>"
                class="form-control">
        </div>
            <!-- description -->
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control" rows="8"></textarea>
            <!-- image -->
            <label for="image">Imagen del evento</label>
            <div class="clear-1"></div>
            <input name="image" type="file">

            <div class="clear-1"></div>
            <div class="clear-1"></div>
            <input type="submit" value="Publicar" class="btn btn-success submit">
        </div>
    <?php echo form_close(); ?>
</div>
