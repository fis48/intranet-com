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
        <h1>Preguntas</h1>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
        <div class="clear-25 top-clear"></div>
    </div>
</section>

<div class="clear-25 top-clear"></div>
<div class="clear-25 top-clear"></div>

<!-- ask question form -->
<?php $this->load->view('forms/question'); ?>

<div class="clear-25"></div>
<div class="clear-25"></div>

<!-- recent questions -->
<section class="gray-back">
    <h2 class="section-title">Preguntas recientes</h2>
    <?php foreach ($questions->resolved as $rQuest): ?>
        <div class="quest-card">
            <p class="alert-warning"><?php echo $rQuest->question ?></p>
            <p><?php echo $rQuest->response ?></p>
        </div>
    <?php endforeach ?>
    <a href="preguntas-todo">Ver todo</a>
</section>