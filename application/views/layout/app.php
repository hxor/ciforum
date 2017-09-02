<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <!-- App Favicon icon -->
    <link rel="shortcut icon" href="<?= base_url('/') ?>assets/images/favicon.ico">
    <!-- App Title -->
    <title>Forum - Komunitas Pecinta Hewan</title>

    <!-- DatePicker -->
    <link href="<?= base_url('/') ?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <link href="<?= base_url('/') ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/') ?>assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/') ?>assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/') ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/') ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/') ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/') ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/') ?>assets/css/app.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="<?= base_url('/') ?>assets/js/modernizr.min.js"></script>

</head>


<body>


    <!-- Navigation Bar-->
    <header id="topnav">
        <?php $this->load->view('layout/_navbar'); ?>
    </header>
    <!-- End Navigation Bar-->


    <div class="wrapper">
    <?php $this->load->view($main_view); ?>
    </div>
    <!-- end wrapper -->



    <!-- jQuery  -->
    <script src="<?= base_url('/') ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url('/') ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url('/') ?>assets/js/detect.js"></script>
    <script src="<?= base_url('/') ?>assets/js/fastclick.js"></script>
    <script src="<?= base_url('/') ?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url('/') ?>assets/js/jquery.blockUI.js"></script>
    <script src="<?= base_url('/') ?>assets/js/waves.js"></script>
    <script src="<?= base_url('/') ?>assets/js/wow.min.js"></script>
    <script src="<?= base_url('/') ?>assets/js/jquery.nicescroll.js"></script>
    <script src="<?= base_url('/') ?>assets/js/jquery.scrollTo.min.js"></script>

    <!-- Datepicker -->
    <script src="<?= base_url('/') ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Filestyle -->
    <script src="<?= base_url('/') ?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

    <!-- App core js -->
    <script src="<?= base_url('/') ?>assets/js/jquery.core.js"></script>
    <script src="<?= base_url('/') ?>assets/js/jquery.app.js"></script>
    <script src="<?= base_url('/') ?>assets/js/app.js"></script>

</body>

</html>
