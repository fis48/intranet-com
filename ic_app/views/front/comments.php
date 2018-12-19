<!-- banner -->
<section id="main-banner" class="container-fuid who">
    <!-- text -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-left">
        <h1>Comentarios</h1>
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

<!-- comments form -->
<?php $this->load->view('forms/comments'); ?>

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



