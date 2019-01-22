<div class="bull-head float-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <!-- image -->
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 float-left">
        <img src="<?php echo $new->image ?>" class="img-fluid img-thumbnail" alt="CMC Analytics">
    </div>
    <!-- info -->
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 float-left">
        <?php $newDate = new Datetime($new->date); ?>
        <h2><?php echo $new->title ?></h2>
        <h3>
            <i class="fa fa-calendar-alt"></i>
            <?php echo strftime('%B %d de %Y', $newDate->getTimestamp()); ?>
        </h3>
        <p>
            <?php echo $new->description ?>
        </p>
    </div>
</div>

    <!-- body -->
    <div class="body col-lg-12 col-md-12 col-sm-12 col-xs-12 float-left">
        <?php print_r( $new->body ) ?>
    </div>
