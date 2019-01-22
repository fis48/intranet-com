<!-- banner -->
<section id="main-banner" class="container-fuid who">
    <?php if (isset($mainImg)): ?>
        <img class="img-fluid" src="<?php echo '/home_slide/'.$mainImg ?>">
    <?php endif ?>
    <!-- text -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-left">
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <h1>Comentarios</h1>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
    </div>
</section>

<div class="clear-25 top-clear"></div>
<div class="clear-25 top-clear"></div>

<!-- comments form -->
<?php $this->load->view('forms/comments'); ?>

<div class="clear-25"></div>
<div class="clear-25"></div>

<section class="gray-back">
    <!-- recent comments -->
    <h2 class="section-title">Comentarios recientes</h2>
    <?php if (isset($comments['efficiency']) && isset($comments['efficiency'][0])): ?>
        <div class="quest-card">
            <p class="alert-warning">Eficiencia</p>
            <p><?php echo $comments['efficiency'][0]->response ?></p>
        </div>
    <?php endif ?>
    <?php if (isset($comments['client']) && isset($comments['client'][0])): ?>
        <div class="quest-card">
            <p class="alert-warning">Clientes</p>
            <p><?php echo $comments['client'][0]->response ?></p>
        </div>
    <?php endif ?>
    <?php if (isset($comments['paper']) && isset($comments['paper'][0])): ?>
        <div class="quest-card">
            <p class="alert-warning">Uso del papel</p>
            <p><?php echo $comments['paper'][0]->response ?></p>
        </div>
    <?php endif ?>
    <?php if (!isset($comments['efficiency'])): ?>
        <?php foreach ($comments as $comment): ?>
            <div class="quest-card">
                <p class="alert-warning"><?php echo $comment->question ?></p>
                <p><?php echo $comment->response ?></p>
            </div>
        <?php endforeach ?>
    <?php endif ?>
</section>



