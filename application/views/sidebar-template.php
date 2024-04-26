 <!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main Menu</li>
                <li <?php if($location == 'dashboard') { echo 'class="active"'; } ?>>
                    <a href="<?php echo base_url('dashboard'); ?>" <?php if($location == 'dashboard') { echo 'class="waves-effect active"'; } ?> >
                        <i class="mdi mdi-home"></i><span> Dashboard </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->