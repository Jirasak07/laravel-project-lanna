<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <title> @yield('title')</title>
    @include('layouts.css')
    @yield('style')
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('layouts.header')
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <nav-menus></nav-menus>
            @include('layouts.user.sidebar')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="">
                                            <i class="f-16 fa fa-home"></i>
                                        </a>
                                    </li>
                                    @yield('breadcrumb-items')
                                </ol>
                                @yield('breadcrumb-title')
                            </div>
                            <div class="col-lg-6">
                                <!-- Bookmark Start-->

                                <!-- Bookmark Ends-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                @yield('content')
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            @include('layouts.footer')
        </div>
    </div>
    @include('layouts.script')
</body>

</html>
