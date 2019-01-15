<!-- banner -->
<section id="main-banner" class="container-fuid news">
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
        <h1>Últimas noticias</h1>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
    </div>
</section>
<!-- banner foot -->
<section id="foot-banner" class=" no-padd">
    <p>
    </p>
</section>

<!-- section title -->
<div class="section-title container-fuid float-left">
    <h2>Boletines</h2>
</div>

<!-- new -->
<section id="news">
    <?php foreach ($news as $new): ?>
        <?php $nDate = new Datetime($new->date); ?>
        <div class="new-card col-lg-6 col-md-6 col-sm-6 col-xs-12 float-left">
            <h2><?php echo $new->title ?></h2>
            <img src="<?php echo $new->image ?>" class="img-fluid"
                alt="Acumen" />
            <p class=" float-left">
                <span class="info float-left"><?php echo $new->title ?></span>
                <span class="info float-right">
                    <?php echo strftime('%d/%m/%Y', $nDate->getTimestamp()); ?>
                </span>
            </p>
            <p class=" float-left">
                <?php echo substr($new->description, 0, 220).'...' ?>            
            </p>
            <a class="btn btn-sm more-btn" href="<?php echo '/boletin/'.$new->id ?>">
                Ver más
            </a>
        </div>
    <?php endforeach ?>
</section>


















