<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Spice Hotel | Bootstrap 4 Admin Dashboard Template + UI Kit</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="{{ url('admin') }}/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('admin') }}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!--bootstrap -->
	<link href="{{ url('admin') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="{{ url('admin') }}/assets/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="{{ url('admin') }}/assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="{{ url('admin') }}/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" media="screen">
	<!-- morris chart -->
    <link href="{{ url('admin') }}/assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{ url('admin') }}/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="{{ url('admin') }}/assets/css/material_style.css">
	<!-- animation -->
	<link href="{{ url('admin') }}/assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- data tables -->
    <link href="{{ url('admin') }}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
	<!-- Template Styles -->
    <link href="{{ url('admin') }}/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('admin') }}/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('admin') }}/assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('admin') }}/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('admin') }}/assets/css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- dropzone -->
    <link href="{{ url('admin') }}/assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
    <!--tagsinput-->
    <link href="{{ url('admin') }}/assets/plugins/jquery-tags-input/jquery-tags-input.css" rel="stylesheet">
    <!--select2-->
    <link href="{{ url('admin') }}/assets/plugins/select2/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('admin') }}/assets/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Date Time item CSS -->
    <link rel="stylesheet" href="{{ url('admin') }}/assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="{{ url('admin') }}/assets/img/favicon.ico" /> 
 </head>
 <!-- END HEAD -->
 <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        @include('admin.layouts.header')
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            @include('admin.layouts.sidebar')
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    @include('admin.layouts.page-bar')
                    
                    @yield('main')
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            @include('admin.layouts.chat-sidebar')
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        @include('admin.layouts.footer')
    </div>
    <!-- start js include path -->
    <script src="{{ url('admin') }}/assets/plugins/jquery/jquery.min.js" ></script>
    <script src="{{ url('admin') }}/assets/plugins/popper/popper.min.js" ></script>
    <script src="{{ url('admin') }}/assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="{{ url('admin') }}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="{{ url('admin') }}/assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="{{ url('admin') }}/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" ></script>
    <script src="{{ url('admin') }}/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js" ></script>
    <script src="{{ url('admin') }}/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker-init.js" ></script>
    <script src="{{ url('admin') }}/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js" ></script>
    <script src="{{ url('admin') }}/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js" ></script>
    <script src="{{ url('admin') }}/assets/plugins/sparkline/jquery.sparkline.min.js" ></script>
	<script src="{{ url('admin') }}/assets/js/pages/sparkline/sparkline-data.js" ></script>
    <!-- Common js-->
	<script src="{{ url('admin') }}/assets/js/app.js" ></script>
    <script src="{{ url('admin') }}/assets/js/layout.js" ></script>
    <script src="{{ url('admin') }}/assets/js/theme-color.js" ></script>
    <!-- data tables -->
    <script src="{{ url('admin') }}/assets/plugins/datatables/jquery.dataTables.min.js" ></script>
 	<script src="{{ url('admin') }}/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
 	<script src="{{ url('admin') }}/assets/js/pages/table/table_data.js" ></script>
    <!-- material -->
    <script src="{{ url('admin') }}/assets/plugins/material/material.min.js"></script>
    <script src="{{ url('admin') }}/assets/js/pages/material_select/getmdl-select.js" ></script>
    <script src="{{ url('admin') }}/assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
	<script src="{{ url('admin') }}/assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
	<script src="{{ url('admin') }}/assets/plugins/material-datetimepicker/datetimepicker.js"></script>
    <!-- dropzone -->
    <script src="{{ url('admin') }}/assets/plugins/dropzone/dropzone.js" ></script>
    <script src="{{ url('admin') }}/assets/plugins/dropzone/dropzone-call.js" ></script>
    <!-- animation -->
    <script src="{{ url('admin') }}/assets/js/pages/ui/animations.js" ></script>
    <!--tags input-->
    <script src="{{ url('admin') }}/assets/plugins/jquery-tags-input/jquery-tags-input.js" ></script>
    <script src="{{ url('admin') }}/assets/plugins/jquery-tags-input/jquery-tags-input-init.js" ></script>
    <!--select2-->
    <script src="{{ url('admin') }}/assets/plugins/select2/js/select2.js" ></script>
    <script src="{{ url('admin') }}/assets/js/pages/select2/select2-init.js" ></script>
    <!-- morris chart -->
    <script src="{{ url('admin') }}/assets/plugins/morris/morris.min.js" ></script>
    <script src="{{ url('admin') }}/assets/plugins/morris/raphael-min.js" ></script>
    <script src="{{ url('admin') }}/assets/js/pages/chart/morris/morris_home_data.js" ></script>
    <!-- end js include path -->
  </body>
</html>