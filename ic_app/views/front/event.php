<!-- banner -->
<section id="main-banner" class="container-fuid news">
    <!-- text -->
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 float-left">
        <h1><?php echo $event->title ?></h1>
    </div>
</section>

<div class="cont-event container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12 float-left">
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 float-left">
        <img src="<?php echo '/events/'.$event->image ?>" class="img-fluid">
    </div>
    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 float-left">
        <?php $dateIni = new DateTime($event->date_ini); ?>
        <h2><?php echo $event->title ?></h2>
        <p>
            <span>
                <i class="fa fa-calendar-alt"></i>
                <?php echo strftime('%d / %m / %Y') ?>
            </span>
            <br>
            <span>
                <i class="fa fa-clock"></i>
                <?php echo strftime('%H:%M') ?>
            </span>
            <br>
            <span>
                <i class="fa fa-map-marker-alt"></i>
                <?php echo $event->location ?>
            </span>
        </p>
        <p><?php echo $event->description ?></p>
    </div>
</div>








