 	
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?php echo base_url('asset');?>/hunafa.png">
        <title>Hunafa - <?php echo $title ?></title>
        <link href="<?php echo base_url('asset'); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('asset'); ?>/css/metisMenu.min.css" rel="stylesheet">
        <link href="<?php echo base_url('asset'); ?>/css/startmin.css" rel="stylesheet">
        <link href="<?php echo base_url('asset'); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('asset'); ?>/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url('asset'); ?>/css/dataTables/dataTables.responsive.css" rel="stylesheet">
        <script src="<?php echo base_url('asset'); ?>/js/jquery-3.3.1.min.js"></script>
        <?php if (isset($map['js'])) {
            echo  $map['js'];
        }; ?>
    </head>
