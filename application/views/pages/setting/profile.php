<div class="container">
	<div class="row">
        <div class="col-md-4 col-lg-3">
            <div class="profile-detail card-box">
                <div>
                    <img src="<?= base_url('/') ?><?= $user_profile['photo'] ? $user_profile['photo'] : "assets/images/users/avatar-2.jpg" ?>" class="img-circle" alt="profile-image">

                    <hr>

                    <div class="text-left">
                        <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15"><?= $user->name ?></span></p>

                        <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15"><?= $user->email ?></span></p>

                        <p class="text-muted font-13"><strong>Birthdate :</strong> <span class="m-l-15"><?= $user_profile['birthdate'] ?></span></p>
                    </div>


                    <div class="button-list m-t-20">
                    	<a href="<?= $user_profile['facebook'] ?>">
                    		<button type="button" class="btn btn-facebook waves-effect waves-light">
	                           <i class="fa fa-facebook"></i>
	                        </button>
                    	</a>

                        <a href="<?= $user_profile['twitter'] ?>">
                        	<button type="button" class="btn btn-twitter waves-effect waves-light">
	                           <i class="fa fa-twitter"></i>
	                        </button>
                        </a>

                    </div>
                </div>

            </div>

        </div>


        <div class="col-lg-9 col-md-8">
        	<div class="card-box">
				<?= form_open_multipart('setting/update_profile'); ?>
					<?= form_hidden('id', $user->id); ?>
	                <div class="form-group">
	                    <label for="userName">Name</label>
	                    <?= form_input(['name' => 'name', 'placeholder' => 'Full Name', 'value' => $user->name, 'class' => 'form-control']); ?>
						<?= form_error('name') ?>
	                </div>
	                <div class="form-group">
	                    <label for="emailAddress">Birth Date*</label>
	                    <div class="input-group">
                            <!-- <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="datepicker"> -->
                            <?= form_input(['name' => 'birthdate', 'placeholder' => 'yyyy-mm-dd', 'value' => $user_profile['birthdate'], 'class' => 'form-control', 'id' => 'datepicker']); ?>
	                    	<span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                        </div><!-- input-group -->
						<?= form_error('birthdate') ?>
	                </div>
	               <div class="form-group">
	                    <label for="userName">Address</label>
	                    <?= form_textarea(['name' => 'address', 'placeholder' => 'Address', 'value' => $user_profile['address'], 'class' => 'form-control']); ?>
						<?= form_error('address') ?>
	                </div>

	                <div class="form-group">
	                    <label for="userName">Email</label>
	                    <?= form_input(['type' => 'email', 'name' => 'email', 'placeholder' => 'Email', 'value' => $user->email, 'class' => 'form-control']); ?>
						<?= form_error('email') ?>
	                </div>

	                <div class="form-group">
	                    <label for="userName">Facebook</label>
	                    <?= form_input(['type' => 'text', 'name' => 'facebook', 'placeholder' => 'Facebook', 'value' => $user_profile['facebook'], 'class' => 'form-control']); ?>
						<?= form_error('facebook') ?>
	                </div>

	                <div class="form-group">
	                    <label for="userName">Twitter</label>
	                    <?= form_input(['type' => 'text', 'name' => 'twitter', 'placeholder' => 'Twitter', 'value' => $user_profile['twitter'], 'class' => 'form-control']); ?>
						<?= form_error('twitter') ?>
	                </div>

	                <div class="form-group">
                        <label class="control-label">Photo</label>
                        <?= form_input(['type' => 'file', 'name' => 'photo', 'placeholder' => 'Photo',  'class' => 'filestyle']); ?>
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
