<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $judul; ?></title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/assets/images/favicon.ico">

    <link href="<?php echo base_url(); ?>assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Loader -->
    <div id="lds-ellipsis">
        <div id="status">
            <div class="spinner">
                <div class="ellipsis1"></div>
                <div class="ellipsis2"></div>
                <div class="ellipsis3"></div>
                <div class="ellipsis4"></div>
            </div>
        </div>
    </div>

    <!-- Background -->
    <div class="account-pages">
    <!-- Begin page -->
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">
                    <img src="<?php echo base_url(); ?>assets/assets/images/main-logos.png" height="95" alt="logo">
                    <p class="text-white"> <?= $judul; ?> </p>
                </h3>
                <div class="p-8">
                    <p align="center" style="font-size:12px;border-color: #ffffff;color: red;margin-bottom: 0;border-radius: 2px;-webkit-border-radius: 2px;-moz-border-radius: 2px;font-weight: 600;" id="notif"><?php echo $this->session->flashdata('pesan'); ?></p>
                    <form class="form-horizontal m-t-80" action="<?php echo base_url('login/auth'); ?>" method="post">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" autofocus required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary col-10 waves-effect waves-light my-3" type="submit">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="m-t-10 text-center">
            <p class="text-white">© <?= date('Y'); ?> <?= $footer; ?></p>
        </div>
    </div>
    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="<?php echo base_url(); ?>assets/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/js/waves.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url(); ?>assets/assets/js/app.js"></script>

</body>

</html>