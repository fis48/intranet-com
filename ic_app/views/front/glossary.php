<!-- banner -->
<section id="main-banner" class="container-fuid who">
    <?php if (isset($mainImg)): ?>
        <img class="img-fluid" src="<?php echo '/home_slide/'.$mainImg ?>">
    <?php endif ?>
    <!-- text -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-left">
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <h1>Glosario</h1>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
    </div>
</section>
<!-- banner foot -->
<section id="foot-banner" class=" no-padd">
    <p>
Aquí encontrarás  los términos que enmarcan y definen los diferentes proyectos de transformación, referenciarlos e interpretarlos te permitirán tener una comprensión más clara del propósito, los objetivos, las metas y los alcances que buscamos conseguir para seguir creciendo en armonía
    </p>
</section>

<!-- section title -->
<div class="section-title container-fuid float-left">
    <h2>Conceptos clave</h2>
</div>

<!-- glossary -->
<section id="glossary">
    <?php foreach ($glossary as $gItem): ?>
        <div class="glossary-card col-lg-6 col-md-6 col-sm-12 col-xs-12" data-word-id="<?php echo $gItem->id ?>">
            <h3><?php echo $gItem->word ?></h3>
            <p data-word-id="<?php echo $gItem->id ?>"><?php echo substr($gItem->meaning, 0, 200).'...' ?></p>
            <a href="#" data-word-id="<?php echo $gItem->id ?>">Ver más</a>
        </div>
    <?php endforeach ?>
    <div class="glossary-display">
        <h2></h2>
        <p></p>
        <a href="#">
            <i class="fa fa-close"></i>
            Cerrar
        </a>
    </div>
</section>
















