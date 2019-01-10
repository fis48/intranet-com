<div class="container-fluid col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <h1 class="seciont-title">
        <i class="fa fa-newspaper"></i>
        <?php if (isset($event)): ?>
           Actualizar eventos
        <?php else: ?>
            Agregar eventos            
        <?php endif ?>
    </h1>
    <?php if (isset($event)): ?>
        <?php echo form_open_multipart('/admin/updateevents/'.$this->uri->segment(3)) ?>
    <?php else: ?>
        <?php echo form_open_multipart('/admin/addevent') ?>
    <?php endif ?>
        <!-- title -->
        <div class="form-group no-padd col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label for="title">Título</label>
            <input name="title" type="text" class="form-control" required
                <?php if(isset($event)){echo "value='$event->title'";} ?>>
        </div>
        <!-- location -->
        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label for="location">Lugar</label>
            <input name="location" type="text" class="form-control" required
                <?php if(isset($event)){echo "value='$event->location'";} ?>>
        </div>
        <div class="form-group no-padd col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- date ini -->
            <label for="date_ini">Fecha de inicio</label>
            <input name="date_ini" type="date" 
                <?php if (isset($event)) {
                    $eventDateIni = new DateTime($event->date_ini);
                    $eventDateEnd = new DateTime($event->date_end);
                } ?>
                <?php if (isset($event)): ?>
                    value="<?php echo $eventDateIni->format('Y-m-d'); ?>"
                <?php else: ?>
                    value="<?php echo $now->format('Y-m-d'); ?>"
                <?php endif ?>
                class="form-control">
        </div>
        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <!-- time ini -->
            <label for="time_ini">Hora de inicio</label>
            <input name="time_ini" type="time" 
                <?php if (isset($event)): ?>
                    value="<?php echo $eventDateIni->format('H:i'); ?>"
                <?php else: ?>
                    value="<?php echo $now->format('H:i'); ?>"                    
                <?php endif ?>
                class="form-control">
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- date end -->
            <div id="date-end">
                <label for="date_end">Fecha de finalización</label>
                <input name="date_end" type="date" 
                <?php if (isset($event)): ?>
                    value="<?php echo $eventDateEnd->format('Y-m-d'); ?>"
                <?php else: ?>                  
                    value="<?php echo $now->format('Y-m-d'); ?>"
                <?php endif ?>
                    class="form-control">
            </div>
        </div>
        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <!-- time end -->
            <label for="time_end">Hora de finalización</label>
            <input name="time_end" type="time" 
            <?php if (isset($event)): ?>
                value="<?php echo $eventDateEnd->format('H:i'); ?>"
            <?php else: ?>
                value="<?php echo $now->format('H:i'); ?>"                
            <?php endif ?>
                class="form-control">
        </div>
            <!-- description -->
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control" rows="8"
                ><?php if(isset($event)){echo $event->description;} ?></textarea>
            <!-- image -->
            <label for="image">Imagen del evento</label>
            <?php if (isset($event)): ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padd">
                    <img src="<?php echo '/events/'.$event->image ?>" alt="CMC Analitycs" class="img-thumbnail img-fluid">
                </div>
            <?php endif ?>
            <div class="clear-1"></div>
            <input name="image" type="file">

            <div class="clear-1"></div>
            <div class="clear-1"></div>
            <?php if (isset($event)): ?>
                <input type="hidden" name="id" value="<?php echo $event->id ?>">
            <?php endif ?>
            <input type="submit" value="Publicar" class="btn btn-success submit">
        </div>
    <?php echo form_close(); ?>
</div>





















