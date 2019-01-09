<!-- banner -->
<section id="main-banner" class="container-fuid who">
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
        <div class="glossary-card col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3><?php echo $gItem->word ?></h3>
            <p><?php echo $gItem->meaning ?></p>
        </div>
    <?php endforeach ?>
</section>
















