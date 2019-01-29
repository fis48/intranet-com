<!-- banner -->
<section id="main-banner" class="container-fuid news">
    <!-- text -->
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 float-left">
        <h1><?php echo $project->title ?></h1>
    </div>
</section>

<div class="cont-event container-fluid float-left">
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 float-left">
        <img src="<?php echo '/projects/'.$project->image ?>" class="img-fluid">
    </div>
    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 float-left">
        <?php $projDate = new Datetime($project->date); ?>
        <h2><?php echo $project->title ?></h2>
        <h3>
            <i class="fa fa-calendar-alt"></i>
            <?php echo strftime('%B %d de %Y', $projDate->getTimestamp()); ?>
        </h3>
        <p><?php echo $project->description ?></p>
    </div>
</div>








