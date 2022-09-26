<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>NICE.Impossible is nothing</title>
    <link rel="apple-touch-icon" href="/assets_admin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets_admin/app-assets/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/assets_admin/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/assets_admin/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/assets_admin/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/assets_admin/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/assets_admin/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/assets_admin/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/assets_admin/app-assets/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets_admin/assets/css/style.css">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- @toastr_css --}}
</head>

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-col="2-columns">
    <form class="form-horizontal form-simple" action="{{ route('admin.login') }}" method="post">
        @csrf
        <section class="login pt-100">
            <div class="container">
                <div class="billing-details">
                    <h2 class="checkout-title text-uppercase text-center mb-30">LOGIN</h2>
                    <form class="checkout-form">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter your Password"
                                required>
                        </div>
                        <div class="login-btn-g">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-color right-side">Log In</button>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a title="Forgot Password" class="link forgot-password mtb-20" href="#">Forgot your
                                password?</a>
                        </div>
                        <div class="new-account text-center mt-20">
                            <span>Don't have an account?</span>
                            <a class="link" title="Create New Account" href="register.html">Create New Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </form>

    <script src="/assets_admin/app-assets/vendors/js/vendors.min.js"></script>
    <script src="/assets_admin/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="/assets_admin/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="/assets_admin/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="/assets_admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="/assets_admin/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="/assets_admin/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="/assets_admin/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="/assets_admin/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="/assets_admin/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
    <script src="/assets_admin/app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="/assets_admin/app-assets/js/core/app-menu.js"></script>
    <script src="/assets_admin/app-assets/js/core/app.js"></script>
    <script src="/assets_admin/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
    <script src="/assets_admin/app-assets/js/scripts/pages/page-users.js"></script>
    <script src="/assets_admin/custom.js"></script>
    <script src="/assets_admin/app-assets/js/scripts/navs/navs.js"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

    @yield('js')
    @yield('css')

</body>
</html>
