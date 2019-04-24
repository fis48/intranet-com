<div class="clear-25"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1 class="section-title">
        <i class="fa fa-file"></i>
        Reportes de preguntas y comentarios
    </h1>
    <table class="table table-bordered">
        <?php foreach ($reports as $report): ?>
            <tr>
                <td>
                    <a href="<?php echo '/index.php/reportes/'.$report->file_name ?>"
                        download="<?php echo $report->file_name ?>">
                        <i class="fa fa-download"></i>
                        <?php echo $report->file_name ?>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>