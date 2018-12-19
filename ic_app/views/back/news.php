<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1 class="section-title">
        <i class="fa fa-newspaper fa-sm"></i>
        Boletines
    </h1>
    <?php foreach ($news as $new): ?>
        <div class="cont-new container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="float-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <img src="<?php echo $new->image ?>"
                    class="img-fluid img-thumbnail">
            </div>
            <div class="float-left col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <?php $newDate = new Datetime($new->date); ?>
                <h3>
                    <i class="fa fa-calendar"></i>
                    <?php echo strftime('%B %d de %Y', $newDate->getTimestamp()) ?>
                </h3>
                <p><?php echo $new->description ?></p>
            </div>
        </div>
        <div class="clear-1"></div>
    <?php endforeach ?>
</div>