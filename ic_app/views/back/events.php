<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1 class="section-title">
        <i class="fa fa-newspaper fa-sm"></i>
        Eventos
    </h1>
    <?php foreach ($events as $event): ?>
        <div class="cont-new container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="float-left col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <img src="<?php echo '/events/'.$event->image ?>"
                    class="img-fluid img-thumbnail">
            </div>
            <div class="float-left col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <?php $eventDate = new Datetime($event->date_ini); ?>
                <h3>
                    <i class="fa fa-calendar"></i>
                    <?php echo strftime('%B %d de %Y', $eventDate->getTimestamp()) ?>
                </h3>
                <p><?php echo $event->description ?></p>
            </div>
        </div>
        <div class="clear-1"></div>
    <?php endforeach ?>
</div>