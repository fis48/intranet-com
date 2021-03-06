<div class="container-fluid">
    <h1 class="section-title">
        <i class="fa fa-book fa-sm"></i>
        Glosario
    </h1>
    <dl class="glossary">
        <?php foreach ($glossary as $word): ?>
        <div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <dt><?php echo $word->word ?></dt>
            <dd><?php echo $word->meaning ?></dd>
            <a href="<?php echo '/index.php/admin/glossaryedit/'.$word->id ?>" class="btn-sm btn btn-primary">
                Editar
            </a>
            <a href="<?php echo '/index.php/admin/glossarydelete/'.$word->id ?>" class="btn-sm btn btn-danger">
                Eliminar
            </a>
        </div>
        <?php endforeach ?>
    </dl>
</div>