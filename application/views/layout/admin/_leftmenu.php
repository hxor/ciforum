<div class="sidebar-inner slimscrollleft">
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>

            <li class="text-muted menu-title">Navigation</li>

            <li>
                <a href="<?= base_url('admin') ?>" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span></a>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Forum </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="<?= base_url('admin/forum/forum_category') ?>">Category</a></li>
                    <li><a href="?3">Forum</a></li>
                    <li><a href="?3">Room</a></li>
                </ul>
            </li>

        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
