<!-- like -->
<div class="float-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1 class="section-title">
        <i class="fa fa-comments"></i>
        Comentarios
    </h1>
    <h3 class="q-h3 alert-success">
        <i class="fa fa-check-circle"></i>
        Me gusta que...</h3>
    <table class="table bordered thead-dark">
        <thead class="thead-dark">
            <tr>
                <th>
                    <i class="fa fa-user fa-sm"></i><br>
                    Funcionario
                </th>
                <th>
                    <i class="fa fa-calendar-alt fa-sm"></i><br>
                    Fecha
                </th>
                <th>
                    <i class="fa fa-comment fa-sm"></i><br>
                    Comentario
                </th>
                <th>
                    <i class="fa fa-calendar-alt fa-sm"></i><br>
                    Fecha respuesta
                </th>
                <th>
                    <i class="fa fa-check fa-sm"></i><br>
                    Respuesta
                </th>
                <th>
                    <i class="fa fa-clock"></i>
                    Última actualización
                </th>
                <th>
                    <i class="fa fa-marker"></i>
                    Actualizar respuesta
                </th>
            </tr>
        </thead>
        <?php foreach ($comments->like as $cLike): ?>
        <tr>
            <td>
                <?php echo $cLike->full_name ?>
                <br>
                <?php echo 'Id: '.$cLike->id_number ?>
            </td>
            <td>
                <?php $qDate = new Datetime($cLike->question_date); ?>
                <?php echo strftime('%d %b', $qDate->getTimestamp()); ?>
            </td>
            <td><?php echo $cLike->question ?></td>
            <?php if ($cLike->response_date !== NULL): ?>
                <td>
                    <p><?php echo $cLike->response; ?></p>
                </td>
                <td>
                    <?php $rDate = new Datetime($cLike->response_date); ?>
                    <?php echo strftime('%d %b', $rDate->getTimestamp()); ?>
                </td>
                <td>
                    <?php $updDate = new Datetime($cLike->response_update_date); ?>
                    <?php echo strftime('%d %b', $updDate->getTimestamp()); ?>
                </td>
                <td>
                    <a href="<?php echo '/index.php/admin/responseupdate/'.$cLike->id; ?>"
                        class="btn btn-primary resp-btn btn-sm">
                        <i class="fa fa-marker"></i>
                        Actualizar respuesta
                    </a>
                </td>
            <?php else: ?>
                <td>
                    <a href="<?php echo '/index.php/admin/questionresponse/'.$cLike->id; ?>"
                        class="btn btn-primary resp-btn btn-sm">
                        <i class="fa fa-exchange-alt"></i>
                        Responder
                    </a>
                </td>
            <?php endif ?>
        </tr>
        <?php endforeach ?>
    </table>
</div>

<!-- worry -->
<div class="float-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h3 class="q-h3 alert-warning">
        <i class="fa fa-temperature-high"></i>
        Me preocupa que...
    </h3>
    <table class="table bordered">
        <thead class="thead-dark">
            <tr>
                <th>Funcionario</th>
                <th>Comentario</th>
                <th>Respuesta</th>
            </tr>
        </thead>
        <?php foreach ($comments->worry as $wLike): ?>
        <tr>
            <td>
                <?php echo $wLike->full_name ?>
                <br>
                <?php echo 'Id: '.$wLike->id_number ?>
            </td>
            <td>
                <?php echo $wLike->question ?>
            </td>
            <?php if ($wLike->response_date !== NULL): ?>
                <td>
                    <p><?php echo $wLike->response; ?></p>
                </td>
            <?php else: ?>
                <td>
                    <a href="<?php echo '/index.php/admin/questionresponse/'.$wLike->id; ?>"
                        class="btn btn-primary">
                        Responder
                    </a>
                </td>
            <?php endif ?>
        </tr>
        <?php endforeach ?>
    </table>
</div>

<!-- occur -->
<div class="float-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h3 class="q-h3 alert-primary">
        <i class="fa fa-lightbulb"></i>
        Se me ocurre que...
    </h3>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3 class="q-h3 alert-secondary">
            <i class="fa fa-chart-line"></i>
            Para ser más eficientes
        </h3>
        <table class="table bordered">
            <thead class="thead-dark">
                <tr>
                    <th>
                        <i class="fa fa-user fa-ms"></i><br>
                        Funcionario
                    </th>
                    <th>
                        <i class="fa fa-calendar-alt fa-ms"></i><br>
                        Fecha
                    </th>
                    <th>
                        <i class="fa fa-comment fa-ms"></i><br>
                        Comentario
                    </th>
                    <th>
                        <i class="fa fa-check fa-ms"></i><br>
                        Respuesta
                    </th>
                    <th>
                        <i class="fa fa-calendar-alt fa-ms"></i><br>
                        Fecha respuesta
                    </th>
                    <th>
                        <i class="fa fa-clock fa-ms"></i><br>
                        Última actalización
                    </th>
                    <th>
                        <i class="fa fa-marker fa-ms"></i><br>
                        Actualizar respuesta
                    </th>
                </tr>
            </thead>
                <?php if (isset($comments->occur['efficiency'])): ?>
                <?php foreach ($comments->occur['efficiency'] as $oeComment): ?>
                    <tr>
                        <td>
                            <?php echo $oeComment->full_name ?>
                            <br>
                            <?php echo 'Id: '.$oeComment->id_number ?>
                        </td>
                        <td>
                            <?php $oeDate = new Datetime($oeComment->question_date) ?>
                            <?php $oeRespDate = new Datetime($oeComment->response_date) ?>
                            <?php $oeRespUpdDate = new Datetime($oeComment->response_update_date) ?>
                            <?php echo strftime('%d %b', $oeDate->getTimestamp()) ?>
                        </td>
                        <td><?php echo $oeComment->question ?></td>
                        <?php if ($oeComment->response_date !== NULL): ?>
                            <td>
                                <p><?php echo $oeComment->response; ?></p>
                            </td>
                            <td>
                                <?php echo strftime('%d %b', $oeRespDate->getTimestamp()); ?>
                            </td>
                            <td>
                                <?php echo strftime('%d %b', $oeRespUpdDate->getTimestamp()); ?>
                            </td>
                            <td>
                                <a href="<?php echo '/index.php/admin/responseupdate/'.$oeComment->id; ?>"
                                    class="btn btn-primary resp-btn btn-sm">
                                    <i class="fa fa-marker"></i>
                                    Actualizar respuesta
                                </a>
                            </td>
                        <?php else: ?>
                            <td>
                                <a href="<?php echo '/index.php/admin/questionresponse/'.$oeComment->id; ?>"
                                    class="btn btn-primary resp-btn btn-sm">
                                    <i class="fa fa-exchange-alt"></i>
                                    Responder
                                </a>
                            </td>
                        <?php endif ?>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </table>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3 class="q-h3 alert-secondary">
            <i class="fa fa-fire"></i>
            Para revitalizar experincia del cliente
        </h3>
        <table class="table bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Funcionario</th>
                    <th>Comentario</th>
                    <th>Respuesta</th>
                </tr>
            </thead>
            <?php if (isset($comments->occur['client'])): ?>
                <?php foreach ($comments->occur['client'] as $ocComment): ?>
                    <tr>
                        <td>
                            <?php echo $ocComment->full_name ?>
                            <br>
                            <?php echo 'Id: '.$ocComment->id_number ?>
                        </td>
                        <td><?php echo $ocComment->question ?></td>
                        <?php if ($ocComment->response_date !== NULL): ?>
                            <td>
                                <p><?php echo $ocComment->response; ?></p>
                            </td>
                        <?php else: ?>
                            <td>
                                <a href="<?php echo '/index.php/admin/questionresponse/'.$ocComment->id; ?>"
                                    class="btn btn-primary">
                                    Responder
                                </a>
                            </td>
                        <?php endif ?>
                    </tr>
                    </tr>
                <?php endforeach ?>
            <?php endif; ?>
        </table>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3 class="q-h3 alert-secondary">
            <i class="fa fa-leaf"></i>
            Para usar menos papel
        </h3>
        <table class="table bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Funcionario</th>
                    <th>Comentario</th>
                    <th>Respuesta</th>
                </tr>
            </thead>
            <?php if (isset($comments->occur['paper'])): ?>
                <?php foreach ($comments->occur['paper'] as $opComment): ?>
                    <tr>
                        <td>
                            <?php echo $opComment->full_name ?>
                            <br>
                            <?php echo 'Id: '.$opComment->id_number ?>
                        </td>
                        <td><?php echo $opComment->question ?></td>
                        <?php if ($opComment->response_date !== NULL): ?>
                            <td>
                                <p><?php echo $opComment->response; ?></p>
                            </td>
                        <?php else: ?>
                            <td>
                                <a href="<?php echo '/index.php/admin/questionresponse/'.$opComment->id; ?>"
                                    class="btn btn-primary">
                                    Responder
                                </a>
                            </td>
                        <?php endif ?>
                    </tr>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </table>
    </div>
</div>