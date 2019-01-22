<!-- banner -->
<section id="main-banner" class="container-fuid news">
    <?php if (isset($mainImg)): ?>
        <img class="img-fluid" src="<?php echo '/home_slide/'.$mainImg ?>">
    <?php endif ?>
    <!-- text -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-left">
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <h1>Los proyectos</h1>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
    </div>
</section>
<!-- banner foot -->
<section id="foot-banner" class=" no-padd">
    <p>
Entérate en qué consisten nuestros proyectos que hacen parte del gran programa de transformación. Cada uno de estos pasos nos llevará a construir la Alianza del futuro.
    </p>
</section>

<!-- section title -->
<div class="section-title container-fuid float-left">
    <h2>Proyectos</h2>
</div>

<!-- events -->
<section id="projects">
    <?php foreach ($projects as $project): ?>
        <div class="new-card col-lg-6 col-md-6 col-sm-12 col-xs-12 float-left">
            <img src="<?php echo '/projects/'.$project->image ?>" class="img-fluid"
                alt="CMC Analytics" />
            <p class=" float-left">
                <span class="info float-left"><?php echo $project->title ?></span>
            </p>
            <p class=" float-left">
                <?php echo substr($project->description, 0, 220).'...' ?>
            </p>
            <a href="<?php echo '/proyecto/'.$project->id ?>" class="more-btn btn btn-sm">
                Ver más
            </a>
        </div>
    <?php endforeach ?>
</section>


















