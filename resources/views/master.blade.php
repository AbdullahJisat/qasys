<!DOCTYPE html>
<html lang="en">

<head>

        <meta charset="utf-8" />
        <title>Dashboard | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://coderthemes.com/ubold/layouts/assets/images/favicon.ico">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">

        <!-- Plugins css -->
        <link href="{{asset('components')}}/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('components')}}/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('components')}}/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />


        <!-- App css -->
        <link href="{{asset('components')}}/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{asset('components')}}/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="{{asset('components')}}/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{asset('components')}}/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="{{asset('components')}}/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Tables css -->
        <link href="{{asset('components')}}/libs/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            @includeIf('partials.topbar')

            @includeIf('partials.navbar')

            <!-- ============================================================== -->
            @includeIf('partials.bodycontent')
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        {{-- @includeIf('partials.sidebar') --}}

        <!-- Right bar overlay-->
        {{-- <div class="rightbar-overlay"></div> --}}

        <script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
        <!-- Vendor js -->
        <script src="{{asset('components')}}/js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="{{asset('components')}}/libs/flatpickr/flatpickr.min.js"></script>
        <script src="{{asset('components')}}/libs/apexcharts/apexcharts.min.js"></script>

        <script src="{{asset('components')}}/libs/selectize/js/standalone/selectize.min.js"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{asset('components')}}/js/pages/dashboard-1.init.js"></script>

        <!-- App js-->
        <script src="{{asset('components')}}/js/app.min.js"></script>

        <!-- Bootstrap Tables js -->
        <script src="{{asset('components')}}/libs/bootstrap-table/bootstrap-table.min.js"></script>

        <!-- Init js -->
        <script src="{{asset('components')}}/js/pages/bootstrap-tables.init.js"></script>

        <script src="{{asset('components')}}/js/pages/form-fileuploads.init.js"></script>

        <!-- Plugin js-->
        <script src="{{asset('components')}}/libs/parsleyjs/parsley.min.js"></script>

        <!-- Validation init js-->
        <script src="{{asset('components')}}/js/pages/form-validation.init.js"></script>

        <!-- Plugins js -->
        <script src="{{asset('components')}}/libs/dropzone/min/dropzone.min.js"></script>
        <script src="{{asset('components')}}/libs/dropify/js/dropify.min.js"></script>

        <!-- Init js-->


    </body>

<!-- Mirrored from coderthemes.com/ubold/layouts/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Sep 2021 07:43:29 GMT -->
</html>
