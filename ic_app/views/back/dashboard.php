<div class="container-fluid back-section">
    <!-- glossary -->
    <div class="back-card container-fluid float-left col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <h2>
            <i class="fa fa-book fa-sm"></i>
            Glosario
            <span class="badge badge-pill badge-secondary">
                <?php echo count($glossary) ?>
            </span>
        </h2>
        <a href="/admin/addword" class="btn btn-sm">Agregar palabra</a>
        <a href="/admin/glossary" class="btn btn-sm">Ver todo</a>
        <h3>
            <i class="fa fa-clock fa-sm"></i>
            Agregadas recientemente
        </h3>
        <ul>
            <?php $i = 1; ?>
            <?php foreach ($glossary as $gWord): ?>
                <?php if ($i <= 3): ?>
                    <li><?php echo $gWord->word ?></li>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    </div>
    <!-- questions -->
    <div class="back-card container-fluid float-left col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <h2>
            <i class="fa fa-question-circle fa-sm"></i>
            Preguntas
            <span class="badge badge-pill badge-danger">
                <?php echo count($questions->unresolved); ?>
            </span>
        </h2>
        <a href="/admin/questions" class="btn btn-sm">Ver todo</a>
        <a href="/admin/createquestion" class="btn btn-sm">Crear pregunta</a>
        <h3>
            <i class="fa fa-sm fa-exclamation-triangle"></i>
            Sin respuesta
        </h3>
        <ul>
            <?php $i = 1; ?>
            <?php foreach ($questions->unresolved as $uQuestion): ?>
                <?php if ($i <= 3): ?>
                    <li>
                        <?php $qDate = new Datetime($uQuestion->question_date); ?>
                        <span class="badge badge-small badge-pill badge-dark">
                            <?php echo strftime('%B %d - %Y', $qDate->getTimestamp()) ?>
                        </span>
                        <br>
                        <?php echo $uQuestion->question ?>
                    </li>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    </div>
    <!-- comments -->
    <div class="back-card container-fluid float-left col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <h2>
            <i class="fa fa-comments fa-sm"></i>
            Comentarios
            <span class="badge badge-pill badge-secondary">
                <?php echo $commentsCount; ?>
            </span>
        </h2>
        <a href="/admin/comments" class="btn btn-sm">Ver todo</a>
        <h3>
            <i class="fa fa-sm fa-clock"></i>
            Agregados recientemente
        </h3>
        <span class="badge-small badge badge-pill badge-secondary">Me gusta</span>
        <?php if (isset($comments->like[0])): ?>
            <p><?php echo substr($comments->like[0]->question, 0, 80).'...' ?></p>
        <?php endif ?>
        <span class="badge-small badge badge-pill badge-secondary">Me preocupa</span>
        <?php if (isset($comments->worry[0])): ?>
            <p><?php echo substr($comments->worry[0]->question, 0, 80).'...' ?></p>
        <?php endif ?>
        <span class="badge-small badge badge-pill badge-secondary">Eficiencia</span>
        <?php if (isset($comments->occur['efficiency'][0])): ?>
            <p><?php echo substr($comments->occur['efficiency'][0]->question, 0, 80).'...' ?></p>
        <?php endif ?>
        <span class="badge-small badge badge-pill badge-secondary">Clientes</span>
        <?php if (isset($comments->occur['client'][0])): ?>
            <p><?php echo substr($comments->occur['client'][0]->question, 0, 80).'...' ?></p>
        <?php endif ?>
        <span class="badge-small badge badge-pill badge-secondary">Uso del papel</span>
        <?php if (isset($comments->occur['paper'][0])): ?>
            <p><?php echo substr($comments->occur['paper'][0]->question, 0, 80).'...' ?></p>
        <?php endif ?>
    </div>
</div>

<!-- news -->
<div class="container-fluid back-section">
    <div class="float-left col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h2>
            <i class="fa fa-newspaper fa-sm"></i>
            Boletines
            <span class="badge badge-pill badge-secondary"><?php echo count($news) ?></span>
        </h2>
        <a href="/admin/addnews" class="btn btn-sm">Agregar boletín</a>
        <a href="/admin/news" class="btn btn-sm">Ver todo</a>
        <h3 class="q-h3 alert-primary">
            <i class="fa fa-marker fa-sm"></i>
            Última actualización
        </h3>
        <ul>
            <li>
                <?php if (isset($news[0])): ?>
                    <?php $newDate = new Datetime($news[0]->date); ?>
                    <span>
                        <i class="fa fa-calendar-alt"></i>
                        <?php echo strftime('%B %d de %Y', $newDate->getTimestamp()) ?>
                    </span>
                    <h4><?php echo $news[0]->title ?></h4>
                    <p><?php echo substr($news[0]->description, 0, 125).'...' ?></p>
                <?php else: ?>
                    <span>No hay boletines publicadas</span>
                <?php endif ?>
            </li>
        </ul>
    </div>
    <!-- events -->
    <div class="float-left col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h2>
            <i class="fa fa-newspaper fa-sm"></i>
            Eventos
            <span class="badge badge-pill badge-secondary"><?php echo count($events) ?></span>
        </h2>
        <a href="/admin/addevent" class="btn btn-sm">Agregar eventos</a>
        <a href="/admin/events" class="btn btn-sm">Ver todo</a>
        <h3 class="q-h3 alert-primary">
            <i class="fa fa-marker fa-sm"></i>
            Última actualización
        </h3>
        <ul>
            <li>
                <?php $evIniDate = new Datetime($events[0]->date_ini); ?>
                <?php $evEndDate = new Datetime($events[0]->date_end); ?>
                <span>
                    <i class="fa fa-calendar-alt"></i>
                    <?php echo strftime('%B %d de %Y', $evIniDate->getTimestamp()) ?>
                </span>
                <br>
                <span>
                    <i class="fa fa-clock"></i>
                    <?php echo strftime('%H:%I', $evIniDate->getTimestamp()).' - '.
                        strftime('%H:%I', $evEndDate->getTimestamp()) ?>
                </span>
                <h4><?php echo $events[0]->title ?></h4>
                <p><?php echo substr($events[0]->description, 0, 125).'...' ?></p>
            </li>
        </ul>
    </div>
</div>

<!-- projects -->
<div class="container-fluid back-section">
    <div class="float-left col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h2>
            <i class="fa fa-check fa-sm"></i> 
            Proyectos
            <span class="badge badge-pill badge-secondary"><?php echo count($projects) ?></span>
        </h2>
        <a href="/admin/addproject" class="btn btn-sm">Agregar proyectos</a>
        <a href="/admin/projects" class="btn btn-sm">Ver todo</a>
        <ul>
            <li>
                <?php if (isset($projects[0])): ?>
                    <h4><?php echo $projects[0]->title ?></h4>
                    <p><?php echo substr($projects[0]->description, 0, 125).'...' ?></p>
                    <?php else: ?>
                        <p>No se han creado proyectos</p>
                <?php endif ?>
            </li>
        </ul>
    </div>
</div>




