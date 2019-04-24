<div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1 class="section-title">
        <i class="fa fa-exchange-alt"></i>
        Responder pregunta
    </h1>
    <!-- question -->
    <p class="q-data">
        <i class="fa fa-user"></i>
        <?php echo $question->full_name.' | '; ?>
        <i class="fa fa-map-marker-alt"></i>
        <?php echo $question->city.' - '.$question->headq.' | '; ?>
        <?php $qDate = new Datetime($question->question_date) ?>
        <i class="fa fa-calendar-alt"></i>
        <?php echo strftime('%b %d', $qDate->getTimestamp()) ?>
        <br>
    </p>
    <p class="q-answering alert-primary">
        <?php echo $question->question ?>
    </p>
    <!-- form -->
    <?php if ($this->uri->segment(2) == 'responseupdate'): ?>
        <?php echo form_open('/index.php/admin/responseupdate/'.$question->id) ?>
    <?php else: ?>
        <?php echo form_open('/index.php/admin/questionresponse/'.$question->id) ?>
    <?php endif ?>
        <div class="form-group">
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
