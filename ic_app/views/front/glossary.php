<!-- banner -->
<section id="main-banner" class="container-fuid who">
    <!-- text -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-left">
        <h1>Glosario</h1>
        <p>
            Párrafos de descripción de Programa de Transformación y del Website Párrafos
            de descripción de Programa de Transformación y del Website Párrafos de
            descripción de Programa de Transformación y del Website Párrafos de
            descripción de Programa de Transformación y del Website Párrafos de
            descripción de Programa de Transformación y del Website
        </p>
    </div>
</section>
<!-- banner foot -->
<section id="foot-banner" class=" no-padd">
    <p>
        Párrafo descriptivo del website: objetivo del website Párrafo descriptivo del website:
        objetivo del website Párrafo descriptivo del website: objetivo del website Párrafo
        descriptivo del website
    </p>
</section>

<!-- section title -->
<div class="section-title container-fuid float-left">
    <h2>Conceptos clave</h2>
    <p>
        Acá se cuenta que es una sección informativa con el objetivo de que los
        funcionarios tengan claros conceptos clave de la estrategia y del Programa de
        Transformación
    </p>
</div>

<!-- glossary -->
<section id="glossary">
    <?php foreach ($glossary as $gItem): ?>
        <div class="glossary-card col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3><?php echo $gItem->word ?></h3>
            <?php print_r( $gItem->meaning ) ?>
        </div>
    <?php endforeach ?>
</section>
















