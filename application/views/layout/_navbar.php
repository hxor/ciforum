<div class="topbar-main">
    <div class="container">

        <!-- Logo container-->
        <div class="logo">
            <a href="<?= base_url('/') ?>" class="logo"><span>Ub<i class="md md-album"></i>ld</span></a>
        </div>
        <!-- End Logo container-->


        <div class="menu-extras">

            <ul class="nav navbar-nav navbar-right pull-right">

                <?php if (!$this->session->userdata('login')){?>
                <li class="navbar-c-items">
                    <a href="<?= base_url('login') ?>" class="waves-effect waves-light"> Login </a>
                </li>
                <?php }else{ ?>
                <li class="dropdown navbar-c-items">
                    <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><?= $this->session->userdata('name') ?> </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url('setting/profile') ?>"><i class="ti-user text-custom m-r-10"></i> Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url('logout') ?>"><i class="ti-power-off text-danger m-r-10"></i> Logout</a></li>
                    </ul>
                </li>
                <?php } ?>
            </ul>
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

    </div>
</div>


<!-- end navbar-custom -->
