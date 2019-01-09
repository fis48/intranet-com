<!-- banner -->
<section id="main-banner" class="container-fuid news">
    <!-- text -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-left">
        <h1><?php echo $project->title ?></h1>
    </div>
</section>

<div class="cont-event container-fluid float-left">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 float-left">
        <img src="<?php echo '/projects/'.$project->image ?>" class="img-fluid">
    </div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 float-left">
        <h2><?php echo $project->title ?></h2>
        <p><?php echo $project->description ?></p>
    </div>
</div>








