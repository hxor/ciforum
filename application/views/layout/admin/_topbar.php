<!-- LOGO -->
<div class="topbar-left">
    <div class="text-center">
        <a href="<?= base_url('/') ?>" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a>
        <!-- Image Logo here -->
        <!--<a href="index.html" class="logo">-->
        <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
        <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
        <!--</a>-->
    </div>
</div>

<!-- Button mobile view to collapse sidebar menu -->
<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="">
            <div class="pull-left">
                <button class="button-menu-mobile open-left waves-effect waves-light">
                        <i class="md md-menu"></i>
                    </button>
                <span class="clearfix"></span>
            </div>

            <ul class="nav navbar-nav hidden-xs">
                <li><a href="#" class="waves-effect waves-light">Files</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>

            <form role="search" class="navbar-left app-search pull-left hidden-xs">
                <input type="text" placeholder="Search..." class="form-control">
                <a href=""><i class="fa fa-search"></i></a>
            </form>


            <ul class="nav navbar-nav navbar-right pull-right">
                <li class="hidden-xs">
                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                </li>
                <li class="dropdown top-menu-item-xs">
                    <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"> <?= $this->session->userdata('name') ?> </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url('setting/profile') ?>"><i class="ti-user text-custom m-r-10"></i> Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url('logout') ?>"><i class="ti-power-off text-danger m-r-10"></i> Logout</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
