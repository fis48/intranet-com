<div class="float-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1>Escríbanos sus preguntas</h1>
    <?php echo form_open('/front/askquestion') ?>
        <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <!-- full name -->
            <label for="full_name">Nombres y Apellidos</label>
            <input name="full_name" type="text" required class="form-control">
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- email -->
            <label for="email">Email</label>
            <input name="email" type="text" required class="form-control">
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- id number -->
            <label for="id_number">No. Identificación</label>
            <input name="id_number" type="text" required class="form-control">
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- city -->
            <label for="city">Ciudad</label>
            <input name="city" type="text" required class="form-control">
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- headq -->
            <label for="headq">Sede</label>
            <input name="headq" type="text" required class="form-control">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- question -->
            <label for="question">Pregunta</label>
            <textarea name="question" class="form-control" rows="8" class="form-control"></textarea>
            <!-- question date -->
            <input name="question_date" type="hidden"
                value="<?php echo $now->format('Y-m-d H:i:s') ?>">
            <div class="clear-10"></div>
            <!-- submit -->
            <input type="submit" value="Enviar" class="btn btn-success submit">
        </div>
    <?php echo form_close(); ?>
</div>
