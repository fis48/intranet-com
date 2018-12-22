<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CMC Analytics - Intranet communications</title>
        <!-- css -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="/css/front.css">
        <!-- js -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/front.js"></script>
    </head>

    <body>
        <!-- flashdata -->
        <?php if ($this->session->flashdata('msg') !== NULL): ?>
            <div class="flashdata col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p>
                    <?php echo $this->session->flashdata('msg') ?>
                    <br>        
                    <a href="/">Cerrar</a>
                </p>
            </div>
        <?php endif ?>
