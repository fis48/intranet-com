<?php $this->load->view('general/header') ?>
    <div class="main-cont container-fluid">
        <!-- main menu -->
        <?php $this->load->view('front/top'); ?>
        <!-- main content -->
        <?php $this->load->view($mainContent) ?>
    </div>
<?php $this->load->view('general/footer') ?>
