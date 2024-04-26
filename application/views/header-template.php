<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?= $judul; ?></title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/assets/images/favicon.ico">

        <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/morris/morris.css">

        <link href="<?php echo base_url();?>assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/assets/css/style.css" rel="stylesheet" type="text/css">


        <link href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/assets/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url() ?>assets/assets/images/favicon.ico" type="image/x-icon">
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

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="<?php echo base_url('dashboard');?>" class="logo">
                        <span>
                            <img src="<?php echo base_url();?>assets/assets/images/main-logos.png" alt="Main Logo" height="60" class="mt-3">
                        </span>
                        <i>
                            <img src="<?php echo base_url();?>assets/assets/images/main-logos.png" alt="Main Logo" height="45">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom bg-dark">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">

                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="<?php echo base_url();?>assets/assets/images/users/avatar.png" alt="user" class="rounded-circle">
                                    <span class="text-white d-none d-md-inline-block ml-1"><?=$this->session->username?> <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a class="dropdown-item" href="<?php echo base_url('update_password');?>"><i class="mdi mdi-lock-open-outline m-r-5"></i> Change Password </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="<?php echo base_url('login/logout');?>"><i class="mdi mdi-power text-danger"></i> Logout </a>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect waves-light bg-dark">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->
    </body>
</html>