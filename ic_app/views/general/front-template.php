<?php $this->load->view('general/header') ?>
    <div class="main-cont col-lg-11 col-md-11 col-sm-12 col-xs-12">
        <!-- main menu -->
        <?php $this->load->view('front/top'); ?>
        <!-- main content -->
        <?php $this->load->view($mainContent) ?>
    </div>
<?php $this->load->view('general/footer') ?>
