<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?php echo base_url('asset');?>/hunafa.png">

        <title>Hunafa - Admin Panel</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('asset'); ?>/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('asset'); ?>/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url('asset'); ?>/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url('asset'); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login Administrator</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo site_url('admin/login/aksi_login'); ?>" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="username" name="username" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="password" name="password" type="password">
                                    </div>
                                    <p><?php if (! empty($pesan)) {
                                        echo $pesan;
                                    } ?></p>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button class="btn btn-default" type="submit">Login </button>
                                    <a class="btn btn-default" role="button" href="<?php echo site_url('home'); ?>"> <i class="glyphicon glyphicon-home"></i></a>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url('asset'); ?>/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('asset'); ?>/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('asset'); ?>/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('asset'); ?>/js/startmin.js"></script>

    </body>
</html>
