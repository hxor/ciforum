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

            <h4 class="page-title">Forum Category</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Ubold</a>
                </li>
                <li>
                    <a href="#">Forum</a>
                </li>
                <li class="active">
                    Forum Category
                </li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-6">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Basic Form</b></h4>

                <?= form_open($form_action); ?>
                    <div class="form-group">
                        <label for="userName">Category Forum</label>
                        <?= form_dropdown('forcat_id', $forum_category, $input->forcat_id, ['class' => 'form-control', 'required' => 'required']) ?>
                        <?= form_error('forcat_id') ?>
                    </div>
                    <div class="form-group">
                        <label for="userName">Moderator</label>
                        <?= form_dropdown('moderator', $moderator, $input->moderator, ['class' => 'form-control', 'required' => 'required']) ?>
                        <?= form_error('moderator') ?>
                    </div>
                    <div class="form-group">
                        <label for="userName">Forum</label>
                        <?= form_input(['name' => 'forum', 'placeholder' => 'Forum Title', 'id' => 'title', 'onkeyup' => 'createslug()',  'value' => $input->forum, 'class' => 'form-control']); ?>
                        <?= form_error('forum') ?>
                    </div>
                    <div class="form-group">
                        <label for="userName">Slug</label>
                        <?= form_input(['name' => 'slug', 'id' => 'slug', 'placeholder' => 'forum', 'value' => $input->slug, 'class' => 'form-control', 'readonly' => 'readonly']); ?>
                        <?= form_error('slug') ?>
                    </div>
                    <div class="form-group">
                        <label for="userName">Description</label>
                        <?= form_textarea(['name' => 'description', 'placeholder'=>'description of forum', 'value' => $input->description, 'rows' => '5', 'cols' => '10','class' => 'form-control']); ?>
                        <?= form_error('description') ?>
                    </div>

                    <div class="form-group text-right m-b-0">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                            Cancel
                        </button>
                    </div>

                <?= form_close(); ?>
            </div>
        </div>
    </div>

</div>
<!-- container -->
