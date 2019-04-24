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
        <div class="clear-25"></div>
        <h1>Eventos</h1>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
    </div>
</section>
<!-- banner foot -->
<section id="foot-banner" class=" no-padd">
    <p>
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
        <div class="new-card col-lg-6 col-md-6 col-sm-12 col-xs-12 float-left">
            <h2><?php echo $event->title ?></h2>
            <img src="<?php echo '/events/'.$event->image ?>" class="img-fluid"
                alt="Acumen" />
            <p class=" float-left">
                <span class="info float-left"><?php echo $event->title ?></span>
                <span class="info float-right">
                    <?php echo strftime('%d/%m/%Y', $evIniDate->getTimestamp()); ?>
                </span>
            </p>
            <p class=" float-left">
                <?php echo substr($event->description, 0, 220).'...' ?>
            </p>
            <a href="<?php echo '/index.php/evento/'.$event->id ?>" class="more-btn btn btn-sm">
                Ver más
            </a>
        </div>
    <?php endforeach ?>
</section>


















