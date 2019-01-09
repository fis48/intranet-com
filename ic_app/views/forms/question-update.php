<div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="clear-25"></div>
    <h1 class="section-title">
        <i class="fa fa-marker"></i>
        Actualizar pregunta
    </h1>
    <!-- question -->
    <p class="q-data alert-primary">
        <i class="fa fa-user"></i>
        <?php echo $question->full_name.' | '; ?>
        <i class="fa fa-map-marker-alt"></i>
        <?php echo $question->city.' - '.$question->headq.' | '; ?>
        <?php $qDate = new Datetime($question->question_date) ?>
        <i class="fa fa-calendar-alt"></i>
        <?php echo strftime('%b %d', $qDate->getTimestamp()) ?>
        <br>
    </p>
    <!-- form -->
    <?php echo form_open('/admin/questionupdate/'.$question->id) ?>
        <div class="form-group">
            <!-- question -->
            <label for="question">Pregunta</label>
            <input type="text" name="question" value="<?php echo $question->question ?>" class="form-control">
            <!-- response -->
            <label for="response">Respuesta</label>
            <textarea name="response" class="form-control"
                rows="8"><?php echo $question->response; ?></textarea>
            <!-- source -->
            <label for="fuente">Fuente</label>
            <input name="source" type="text" class="form-control"
                value="<?php echo $question->source; ?>">
        </div>
        <!-- question id -->
        <input name="q_id" value="<?php echo $question->id ?>" type="hidden">
        <!-- is comment -->
        <input name="is_comment" value="<?php echo $question->is_comment ?>" type="hidden">
        <!-- question date -->
        <input name="question_date" type="hidden"
            value="<?php echo $question->question_date ?>">
        <!-- response date -->
        <input name="response_date" type="hidden" class="form-control"
            value="<?php echo $now->format('Y-m-d H:i:s') ?>">
        <!-- response update date -->
        <input name="response_update_date" type="hidden" class="form-control"
            value="<?php echo $now->format('Y-m-d H:i:s') ?>">
        <!-- submit -->
        <input type="submit" value="Responder" class="btn btn-success submit">
    <?php echo form_close(); ?>
</div>
