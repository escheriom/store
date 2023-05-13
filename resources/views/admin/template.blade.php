 <!-- site -->

 <!-- BEGIN: Head-->

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Layout Full - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../../../assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
        @include('admin/header')
        @include('admin/menu')
        @yield('content')
        @include('admin/footer')

          <!-- BEGIN: Vendor JS-->
    <script src="../../../assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="../../../assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../assets/js/core/app-menu.js"></script>
    <script src="../../../assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- BEGIN: Custom JS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/js/scripts.js">
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>