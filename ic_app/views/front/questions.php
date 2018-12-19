<!-- banner -->
<section id="main-banner" class="container-fuid who">
    <!-- text -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-left">
        <h1>Preguntas</h1>
        <p>
            Párrafos de descripción de Programa de Transformación y del Website Párrafos
            de descripción de Programa de Transformación y del Website Párrafos de
            descripción de Programa de Transformación y del Website Párrafos de
            descripción de Programa de Transformación y del Website Párrafos de
            descripción de Programa de Transformación y del Website
        </p>
    </div>
</section>

<!-- banner foot -->
<section id="foot-banner" class=" no-padd">
    <p>
        Párrafo descriptivo del website: objetivo del website Párrafo descriptivo del website:
        objetivo del website Párrafo descriptivo del website: objetivo del website Párrafo
        descriptivo del website
    </p>
</section>

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
</section>