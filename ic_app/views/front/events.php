<!-- banner -->
<section id="main-banner" class="container-fuid news">
    <!-- text -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-left">
        <h1>Eventos</h1>
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
    <h2>Eventos</h2>
</div>

<!-- events -->
<section id="events">
    <?php foreach ($events as $event): ?>
        <?php $evIniDate = new Datetime($event->date_ini); ?>
        <div class="new-card col-lg-6 col-md-6 col-sm-6 col-xs-12 float-left">
            <img src="<?php echo '/events/'.$event->image ?>" class="img-fluid"
                alt="Acumen" />
            <p class=" float-left">
                <span class="info float-left"><?php echo $event->title ?></span>
                <span class="info float-right">
                    <?php echo strftime('%d/%m/%Y', $evIniDate->getTimestamp()); ?>
                </span>
            </p>
            <p class=" float-left">
                <?php echo substr($event->description, 0, 220) ?>
            </p>
            <a href="<?php echo '/evento/'.$event->id ?>" class="more-btn btn btn-sm">
                Ver más
            </a>
        </div>
    <?php endforeach ?>
</section>


















