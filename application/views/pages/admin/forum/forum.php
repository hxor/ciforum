<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                <ul class="dropdown-menu drop-menu-right" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>

            <h4 class="page-title">Datatable</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Ubold</a>
                </li>
                <li>
                    <a href="#">Tables</a>
                </li>
                <li class="active">
                    Datatable
                </li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title"><b>Default Example</b>
                <?= anchor('admin/forum/forum_create', 'Add Forum', ['class' => 'btn btn-success pull-right']); ?></h4>
                <hr>
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Forum</th>
                        <th>Category</th>
                        <th>Moderator</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                        <?php foreach ($forum as $data):?>
                            <tr>
                                <td><?= $data->id ?></td>
                                <td><?= ucwords($data->forum) ?></td>
                                <td><?= ucwords($data->category) ?></td>
                                <td><?= ucwords($data->name) ?></td>
                                <td>
                                    <?= form_open('admin/forum/category_delete/'); ?>
                                        <?= form_hidden('id', $data->id); ?>
                                        <a href="#" class="btn btn-info btn-xs">Show</a>
                                    <a href="<?= base_url('/admin/forum/category_edit/' . $data->id) ?>" class="btn btn-warning btn-xs">Edit</a>
                                        <?= form_button(['type' => 'submit', 'content' => 'Delete', 'class' => 'btn btn-xs btn-danger js-submit-confirm']) ?>
                                    <?= form_close() ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- container -->
