<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Log In | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://coderthemes.com/ubold/layouts/assets/images/favicon.ico">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

        <!-- Plugins css -->
        <link href="{{asset('components')}}/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('components')}}/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('components')}}/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{asset('components')}}/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="{{asset('components')}}/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{asset('components')}}/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="{{asset('components')}}/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    @yield('content')
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2021 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="#" class="text-white-50">Coderthemes</a>
        </footer>

        <!-- Vendor js -->
        <script src="{{asset('components')}}/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="{{asset('components')}}/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/ubold/layouts/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Sep 2021 07:44:21 GMT -->
</html>
