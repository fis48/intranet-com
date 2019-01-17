<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1 class="section-title">
        <i class="fa fa-image fa-sm"></i>
        Banners secciones
    </h1>
    <a href="<?php echo '/admin/addslide' ?>" class="btn-sm btn btn-danger">
        <i class="fa fa-plus"></i>
        Agregar slide
    </a>
    <div class="clear-1"></div>
    <?php foreach ($slide as $slideItem): ?>
        <div class="cont-slide container-fluid col-lg-4 col-md-4 col-sm-4 col-xs-4 float-left">
            <h2><?php echo $slideItem->title ?></h2>
            <a href="<?php echo '/admin/updateslide/'.$slideItem->id ?>" class="resp-btn btn btn-primary btn-sm">
                <i class="fa fa-marker"> </i>
                Actualizar
            </a>
            <a href="<?php echo '/admin/slidedelete/'.$slideItem->id ?>" class="resp-btn btn btn-danger btn-sm">
                <i class="fa fa-times"> </i>
                Eliminar
            </a>
            <div class="clear-10"></div>
            <div class="float-left no-padd col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <img src="<?php echo '/home_slide/'.$slideItem->image ?>"
                    class="img-fluid img-thumbnail">
            </div>
            <div class="float-left col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <p><?php echo $slideItem->description ?></p>
            </div>
        </div>
    <?php endforeach ?>
</div>