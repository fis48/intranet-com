<!-- banner -->
<section id="main-banner" class="container-fuid who">
    <!-- text -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-left">
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <h1>Preguntas</h1>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
        <div class="clear-25"></div>
    </div>
</section>

<div class="clear-25"></div>
<div class="clear-25"></div>

<!-- recent questions -->
<section class="gray-back">
    <?php foreach ($questions->resolved as $rQuest): ?>
        <div class="quest-card">
            <p class="alert-warning"><?php echo $rQuest->question ?></p>
            <p><?php echo $rQuest->response ?></p>
        </div>
    <?php endforeach ?>
    <a href="preguntas">Volver</a>
</section>