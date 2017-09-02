<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="<?= base_url('/') ?>assets/images/favicon.ico">

    <title>Forum - Komunitas Pecinta Hewan</title>


    <!-- DatePicker -->
    <link href="<?= base_url('/') ?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="<?= base_url('/') ?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <!-- Sweat Alert -->
    <link href="<?= base_url('/') ?>assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <link href="<?= base_url('/') ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/') ?>assets/admin/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/') ?>assets/admin/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/') ?>assets/admin/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/') ?>assets/admin/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/') ?>assets/admin/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="<?= base_url('/') ?>assets/admin/js/modernizr.min.js"></script>

</head>

<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <?php $this->load->view('layout/admin/_topbar'); ?>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <?php $this->load->view('layout/admin/_leftmenu'); ?>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <?php $this->load->view($main_view); ?>
            </div>
            <!-- content -->

            <footer class="footer">
                © 2017. All rights reserved.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="<?= base_url('/') ?>assets/admin/js/jquery.min.js"></script>
    <script src="<?= base_url('/') ?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?= base_url('/') ?>assets/admin/js/detect.js"></script>
    <script src="<?= base_url('/') ?>assets/admin/js/fastclick.js"></script>
    <script src="<?= base_url('/') ?>assets/admin/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url('/') ?>assets/admin/js/jquery.blockUI.js"></script>
    <script src="<?= base_url('/') ?>assets/admin/js/waves.js"></script>
    <script src="<?= base_url('/') ?>assets/admin/js/wow.min.js"></script>
    <script src="<?= base_url('/') ?>assets/admin/js/jquery.nicescroll.js"></script>
    <script src="<?= base_url('/') ?>assets/admin/js/jquery.scrollTo.min.js"></script>

    <!-- Datepicker -->
    <script src="<?= base_url('/') ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Filestyle -->
    <script src="<?= base_url('/') ?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

    <!-- Datatables -->
    <script src="<?= base_url('/') ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('/') ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>

    <!-- Sweet-Alert  -->
    <script src="<?= base_url('/') ?>assets/plugins/sweet-alert2/sweetalert2.min.js"></script>


    <script src="<?= base_url('/') ?>assets/admin/js/jquery.core.js"></script>
    <script src="<?= base_url('/') ?>assets/admin/js/jquery.app.js"></script>

    <script src="<?= base_url('/') ?>assets/js/app.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            // Datatables
            $('#datatable').dataTable();
         });    
    </script>

    <script type="text/javascript">
        function createslug()
        {
            var title = $('#title').val();
            $('#slug').val(slugify(title));
        }

        function slugify(text)
        {
            return text.toString().toLowerCase()
                    .replace(/\s+/g, '-')           // Replace spaces with -
                    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                    .replace(/^-+/, '')             // Trim - from start of text
                    .replace(/-+$/, '');            // Trim - from end of text
        }
    </script>

    <script type="text/javascript">
        /*sweetalert confirm*/
        $(document.body).on('click', '.js-submit-confirm', function (event) {
            event.preventDefault();
            var $form = $(this).closest('form');
            var $el = $(this);
            var text = $el.data('confirm-message') ? $el.data('confirm-message') : 'You will not be able to recover this imaginary file!';
            swal({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              cancelButtonColor: '#d33',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Yes, delete it!'
                }).then(function () {
                  $form.submit()
            })
        });
    </script>

</body>

</html>
