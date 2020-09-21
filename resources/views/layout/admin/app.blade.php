<!DOCTYPE html>
@if(LaravelLocalization::setLocale()=='ar')
    <html dir="rtl">
    @else
        <html dir="ltr">
        @endif
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- Tell the browser to be responsive to screen width -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <!-- Favicon icon -->
            <meta name="csrf-token" content="{{ csrf_token() }}">


            <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/images/favicon.png')}}">
            <title>AdminBite admin Template - The Ultimate Multipurpose admin template</title>
            <!-- Custom CSS -->
            <link href="{{asset('admin/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
            <link href="{{asset('admin/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
            <link href="{{asset('admin/assets/libs/morris/morris.css')}}" rel="stylesheet">
        @stack('style')
        <!-- Custom CSS -->
            <link href="{{asset('admin/dist/css/style.css')}}" rel="stylesheet">
            <!-- HTML5 Shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond/1.4.2/respond.min.js"></script>


            <![endif]-->
        </head>

        <body>
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div id="main-wrapper">
            @include('admin.include.topbar')
            @include('admin.include.sidebar')
            <div class="page-wrapper">
                @yield('content')
            </div>
        </div>

        @include('admin.include.customize')


        </body>

        <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{asset('admin/assets/libs/popper/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- apps -->
        <script src="{{asset('admin/dist/js/app.min.js')}}"></script>
        <script src="{{asset('admin/dist/js/app.init.js')}}"></script>
        <script src="{{asset('admin/dist/js/app-style-switcher.js')}}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
        <!--Wave Effects -->
        <script src="{{asset('admin/dist/js/waves.js')}}"></script>
        <!--Menu sidebar -->
        <script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
        <!--Custom JavaScript -->
        <script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        <script src="{{asset('admin/assets/libs/chartist/dist/chartist.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
        <!--c3 charts -->
        <script src="{{asset('admin/assets/extra-libs/c3/d3.min.js')}}"></script>
        <script src="{{asset('admin/assets/extra-libs/c3/c3.min.js')}}"></script>
        <!--chartjs -->
        <script src="{{asset('admin/assets/libs/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/morris/morris.min.js')}}"></script>

        <script src="{{asset('admin/dist/js/pages/dashboards/dashboard1.js')}}"></script>


        @stack('script')

        </html>
