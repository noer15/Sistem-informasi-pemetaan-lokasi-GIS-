<!DOCTYPE html>
<html>
    <?php $this->load->view('frontend/head'); ?>

    <body>
        <?php $this->load->view('frontend/header'); ?>

        <!-- .page-title start -->
        <?php $this->load->view('frontend/pagetitle'); ?>

        <?php $this->load->view($main_view); ?>

        <?php $this->load->view('frontend/footer'); ?>
    </body>
</html>
