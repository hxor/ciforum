<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">

		<title>Forum | Register</title>

        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/core.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/components.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/icons.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/pages.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/responsive.css') ?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?= base_url('assets/js/modernizr.min.js') ?>"></script>

	</head>
	<body>

		<div class="account-pages"></div>
		<div class="clearfix"></div>
		<div class="wrapper-page">
			<div class=" card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Sign Up to <strong class="text-custom">Forum</strong> </h3>
				</div>

				<div class="panel-body">
					<?= form_open('auth/signup', ['class' => 'form-horizontal m-t-20']); ?>
						<div class="form-group ">
							<div class="col-xs-12">
								<?= form_input(['name' => 'name', 'placeholder' => 'Full Name', 'value' => $input->name, 'class' => 'form-control']); ?>
								<?= form_error('name') ?>
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
								<?= form_input(['type' => 'email', 'name' => 'email', 'placeholder' => 'Email', 'value' => $input->email, 'class' => 'form-control']) ?>
								<?= form_error('email') ?>
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<?= form_input(['type' => 'password', 'name' => 'password', 'placeholder' => 'Password', 'value' => $input->password, 'class' => 'form-control']) ?>
								<?= form_error('password') ?>
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<?= form_input(['type' => 'password', 'name' => 'confirm_password', 'placeholder' => 'Password Confirmation', 'value' => $input->confirm_password, 'class' => 'form-control']) ?>
								<?= form_error('confirm_password') ?>
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<div class="checkbox checkbox-primary">
									<input id="checkbox-signup" type="checkbox" checked="checked">
									<label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
								</div>
							</div>
						</div>

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
									Register
								</button>
							</div>
						</div>
					<?= form_close(); ?>

				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 text-center">
					<p>
						Already have account?<a href="page-login.html" class="text-primary m-l-5"><b>Sign In</b></a>
					</p>
				</div>
			</div>

		</div>

		<script>
			var resizefunc = [];
		</script>

		<!-- jQuery  -->
        <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/detect.js') ?>"></script>
        <script src="<?= base_url('assets/js/fastclick.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.slimscroll.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.blockUI.js') ?>"></script>
        <script src="<?= base_url('assets/js/waves.js') ?>"></script>
        <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.nicescroll.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.scrollTo.min.js') ?>"></script>


        <script src="<?= base_url('assets/js/jquery.core.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.app.js') ?>"></script>

	</body>
</html>
