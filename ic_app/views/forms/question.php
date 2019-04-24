<div class="wrap-comments float-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <?php if ($this->uri->segment(1) == 'admin'): ?>
        <h1>
        <i class="fa fa-question-circle"></i>
        Crear pregunta
        </h1>
    <?php else: ?>
        <h1>Escríbanos sus preguntas</h1>
        <div class="clear-25"></div>

    <?php endif ?>
    <?php echo form_open('/index.php/front/askquestion') ?>
        <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <!-- full name -->
            <label for="full_name">Nombres y Apellidos</label>
            <input name="full_name" type="text" required class="form-control" required>
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- email -->
            <label for="email">Email</label>
            <input name="email" type="text" required class="form-control" required>
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- id number -->
            <label for="id_number">No. Identificación</label>
            <input name="id_number" type="text" required class="form-control" required>
        </div>
        <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <!-- headq -->
            <label for="headq">Sede</label>
            <select name="headq" class="form-control" required>
                <option value="" disabled selected="">Seleccione una</option>
                <option value="Barranquilla – Miss Universo">Barranquilla – Miss Universo</option>
                <option value=" Barranquilla – Green Towers"> Barranquilla – Green Towers</option>
                <option value="Bogotá – Torre Alianza">Bogotá – Torre Alianza</option>
                <option value="Bogotá – Morato">Bogotá – Morato</option>
                <option value="Bogotá – Carrera 12">Bogotá – Carrera 12</option>
                <option value="Bogotá – Calle 80 / Bodega 23">Bogotá – Calle 80 / Bodega 23</option>
                <option value="Bucaramanga">Bucaramanga</option>
                <option value="Cali">Cali</option>
                <option value="Cartagena">Cartagena</option>
                <option value="Manizales – Siglo XXI">Manizales – Siglo XXI</option>
                <option value="Manizales - Castillo">Manizales - Castillo</option>
                <option value="Medellín">Medellín</option>
                <option value="Pereira">Pereira</option>
            </select>
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- question -->
            <label for="question">Pregunta</label>
            <textarea name="question" class="form-control" rows="8" class="form-control" required></textarea>
            <!-- question date -->
            <input name="question_date" type="hidden"
                value="<?php echo $now->format('Y-m-d H:i:s') ?>">
            <!-- is admin -->
            <?php if ($this->uri->segment(1) == 'admin'): ?>
                <input name="is_admin" type="hidden" value="1">
            <?php endif ?>
            <div class="clear-10"></div>
            <!-- submit -->
            <input type="submit" value="Enviar" class="btn btn-success submit">
        </div>
    <?php echo form_close(); ?>
</div>
