<div class="container-fluid col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <h1>
        <i class="fa fa-book"></i>
        <?php echo $formTitle ?>
    </h1>
    <h3>
    </h3>
    <?php if (!isset($word)): ?>
        <?php echo form_open('/index.php/admin/addword') ?>
    <?php else: ?>
        <?php echo form_open('/index.php/admin/glossaryedit/'.$word->id) ?>
            <input type="hidden" name="word-id" value="<?php echo $word->id ?>">
    <?php endif ?>
        <!-- word -->
        <div class="form-group">
            <label for="word">Palabra</label>
            <input name="word" type="word" class="form-control" required
                <?php if(isset($word)){ echo "value='".$word->word."'"; } ?>>
            <!-- password -->
            <label for="meaning">Significado</label>
            <textarea name="meaning" class="form-control" rows="12"
                ><?php if (isset($word)): ?><?php echo $word->meaning; ?>
                <?php endif ?>
            </textarea>
            <input type="submit" value="Guardar" class="btn btn-success submit">
        </div>
    <?php echo form_close(); ?>
</div>
