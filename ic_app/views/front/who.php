<!-- banner -->
<section id="main-banner" class="container-fuid who">
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
        <h1>¿ Quién es quién ?</h1>
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


<!-- team -->
<section id="who">
    <?php foreach ($team as $teamItem): ?>
        <div class="who-card col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <img src="<?php echo '/team/'.$teamItem->image ?>" class="img-circle">
            <h3><?php echo $teamItem->name ?><br> <?php echo $teamItem->last_name ?></h3>
            <p><?php echo substr($teamItem->description, 0, 200)."..." ?></p>
            <a data-team-id="<?php echo $teamItem->id ?>">Ver más</a>
        </div>
    <?php endforeach ?>
    <div class="team-display">
        <img src="" alt="CMC Analitycs">
        <div class="clear-25"></div>
        <h2></h2>
        <p></p>
        <a href="#" class="close-btn btn btn-secondary">
            Cerrar
        </a>
    </div>
</section>
















