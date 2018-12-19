<!-- unresolved -->
<div class="container-fluid">
    <h1 class="section-title">
        <i class="fa fa-question-circle fa-sm"></i>
        Preguntas
    </h1>
    <div class="unresolved col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3 class="q-h3 alert-danger">
            <i class="fa fa-exclamation-triangle fa-sm"></i>
            Por resolver
        </h3>
        <table class="table bordered">
            <thead class="thead-dark">
                <tr>
                    <th>
                        <i class="fa fa-user"></i><br>
                        Funcionario
                    </th>
                    <th>
                        <i class="fa fa-question-circle fa-sm"></i><br>
                        Pregunta
                    </th>
                    <th>
                        <i class="fa fa-calendar-alt"></i><br>
                        Fecha
                    </th>
                    <th>
                        <i class="fa fa-exchange-alt"></i><br>
                        Responder
                    </th>
                </tr>
            </thead>
            <?php foreach ($questions->unresolved as $uQuest): ?>
                <tr>
                    <td><?php echo $uQuest->full_name ?></td>
                    <td class="left-text"><?php echo $uQuest->question ?></td>
                    <?php $qDate = new Datetime($uQuest->question_date); ?>
                    <td><?php echo strftime('%d de %b', $qDate->getTimestamp()) ?></td>
                    <td>
                        <a href="<?php echo '/admin/questionresponse/'.$uQuest->id ?>"
                            class="resp-btn btn btn-primary btn-sm float-right">
                            <i class="fa fa-exchange-alt"></i>
                            Responder
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>
<!-- resolved -->
<div class="container-fluid">
    <div class="resolved col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3 class="q-h3 alert-success">
            <i class="fa fa-check-circle"></i>
            Resueltas
        </h3>
        <table class="table bordered">
            <thead class="thead-dark">
                <tr>
                    <th>
                        <i class="fa fa-question-circle fa-sm"></i><br>
                        Pregunta
                    </th>
                    <th>
                        <i class="fa fa-check"></i><br>
                        Respuesta
                    </th>
                    <th>
                        <i class="fa fa-calendar-alt"></i><br>
                        Fecha de respuesta
                    </th>
                    <th>
                        <i class="fa fa-calendar-alt"></i><br>
                        Última actualización
                    </th>
                    <th>
                        <i class="fa fa-arrow-alt-circle-down"></i><br>
                        Fuente
                    </th>
                    <th>
                        <i class="fa fa-marker"></i><br>
                        Actualizar respuesta
                    </th>
                </tr>
            </thead>
        <?php foreach ($questions->resolved as $rQuestion): ?>
            <?php $respDate = new Datetime($rQuestion->response_date); ?>
            <?php $updDate = new Datetime($rQuestion->response_update_date); ?>
            <tr>
                <td><?php echo $rQuestion->question ?></td>
                <td><?php echo $rQuestion->response ?></td>
                <td>
                    <?php echo strftime('%d de %b', $respDate->getTimestamp()) ?>
                    <br>
                    <i class="fa fa-clock fa-sm"></i>
                    <?php echo strftime('%H:%M', $respDate->getTimestamp()) ?>
                </td>
                <td>
                    <?php echo strftime('%d de %b', $updDate->getTimestamp()) ?>
                    <br>
                    <i class="fa fa-clock fa-sm"></i>
                    <?php echo strftime('%H:%M', $updDate->getTimestamp()) ?>
                </td>
                <td><?php echo $rQuestion->source ?></td>
                <td>
                    <a href="<?php echo '/admin/responseupdate/'.$rQuestion->id ?>"
                        class="resp-btn btn btn-primary btn-sm float-right">
                        <i class="fa fa-exchange-alt"></i>
                        Acutalizar respuesta
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
        </table>
    </div>
</div>








