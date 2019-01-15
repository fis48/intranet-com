<div class="container-fluid">
    <h1 class="section-title">
        <i class="fa fa-book fa-sm"></i>
        ¿Quién es Quién?
    </h1>
    <a href="<?php echo '/admin/addteam' ?>" class="btn-sm btn btn-danger">
        <i class="fa fa-user-plus"></i>
        Agregar persona
    </a>


    <dl class="glossary">
        <?php foreach ($team as $teamItem): ?>
        <div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12 float-left">
            <div class="no-border col-lg-2 col-md-2 col-sm-2 col-xs-12 float-left">
                <img src="<?php echo "/team/".$teamItem->image ?>" class="img-fluid" alt="Cmc Analytics">
            </div>
            <dt><?php echo $teamItem->name.' '.$teamItem->last_name ?></dt>
            <dd><?php echo $teamItem->description ?></dd>
            <a href="<?php echo '/admin/updateteam/'.$teamItem->id ?>" class="btn-sm btn btn-primary">
                Editar
            </a>
            <a href="<?php echo '/admin/teamdelete/'.$teamItem->id ?>" class="btn-sm btn btn-danger">
                Eliminar
            </a>
        </div>
        <div class="clear-1"></div>
        <?php endforeach ?>
    </dl>
</div>