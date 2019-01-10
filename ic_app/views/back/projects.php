<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1 class="section-title">
        <i class="fa fa-newspaper fa-sm"></i>
        Proyectos
    </h1>
    <?php foreach ($projects as $project): ?>
        <div class="cont-new container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2><?php echo $project->title ?></h2>
            <a href="<?php echo '/admin/updateproject/'.$project->id ?>" class="resp-btn btn btn-default btn-sm">
                <i class="fa fa-marker"> </i>
                Actualizar
            </a>
            <div class="clear-10"></div>
            <div class="float-left col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <img src="<?php echo '/projects/'.$project->image ?>"
                    class="img-fluid img-thumbnail">
            </div>
            <div class="float-left col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <p><?php echo $project->description ?></p>
            </div>
        </div>
    <?php endforeach ?>
</div>