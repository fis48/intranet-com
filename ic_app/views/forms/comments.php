<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1>Escríbanos sus comentarios</h1>
    <div class="clear-25"></div>

    <?php echo form_open('/front/askquestion') ?>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
        <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <!-- headq -->
            <label for="headq">Sede</label>
            <select name="headq" class="form-control" required>
                <option value="" disabled selected="">Seleccione una</option>
                <option value="sede">sede</option>
                <option value="sede">sede</option>
                <option value="sede">sede</option>
            </select>
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- type -->
            <label for="type">Tipo de comentario</label>
            <select name="type" class="form-control" required>
                <option value="" selected disabled>Seleccione tipo de comentario</option>
                <option value="worry"
                    <?php if($selValue == 'worry'){ echo "selected"; } ?>>
                    Me preocupa
                </option>
                <option value="like"
                    <?php if($selValue == 'like'){ echo "selected"; } ?>>
                    Me gusta
                </option>
                <option value="occur"
                    <?php if($selValue == 'occur'){ echo "selected"; } ?>>
                    Se me ocurre
                </option>
            </select>
        </div>
        <div class="subtype form-group alert-success col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!-- subtype -->
            <label for="subtype" class="subtype-sel">Su idea aplica para</label>
            <select name="subtype" class="subtype-sel form-control">
                <option value="" selected disabled>Seleccione tipo de idea</option>
                <option value="efficiency">Ser más eficientes</option>
                <option value="client">Revitalizar experiencia del cliente</option>
                <option value="paper">Usar menos papel</option>
            </select>
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- comment -->
            <textarea name="question" class="form-control" rows="10"></textarea>
            <!-- is comment -->
            <input name="is_comment" type="hidden" value="1">
            <input name="question_date" value="<?php echo $now->format('Y-m-d H:i:s') ?>"
                type="hidden">
            <div class="clear-10"></div>
            <input type="submit" class="btn btn-success submit" value="Enviar">
        </div>
    <?php echo form_close(); ?>
</div>


















