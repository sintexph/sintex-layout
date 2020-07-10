<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Admin LTE' }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://cdn.sportscity.com.ph/admin-lte-3/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://cdn.sportscity.com.ph/admin-lte-3/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="http://cdn.sportscity.com.ph/admin-lte-3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    {!! $headerImports ?? '' !!}
     
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed text-sm">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand {{ $navBarColor }}">
            {!! $navbar ?? '' !!}
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar {{ $sidebarColor }} elevation-4">
            <!-- Brand Logo -->
            <a href="{{ config('app.url') }}" class="brand-link {{ $brandColor }}">
                <img src="{{ $brandLogo ?? 'http://cdn.sportscity.com.ph/admin-lte-3/dist/img/AdminLTELogo.png' }}"
                    alt="{{ $brandName }} Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ $brandName }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                {!! $sidebarUserPanel ?? '' !!}

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar nav-legacy flex-column nav-compact nav-child-indent"
                        data-widget="treeview" role="menu" data-accordion="false">
                        {!! $sidebarMenu ?? '' !!}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">{{ $headerText }}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                {!! $breadcrumbItems ?? '' !!}
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                  {!! $content ?? '' !!}
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
          {!! $footer ?? '' !!}
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="http://cdn.sportscity.com.ph/admin-lte-3/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="http://cdn.sportscity.com.ph/admin-lte-3/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    

    <!-- Bootstrap 4 -->
    <script src="http://cdn.sportscity.com.ph/admin-lte-3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="http://cdn.sportscity.com.ph/admin-lte-3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
    </script>
    <!-- AdminLTE App -->
    <script src="http://cdn.sportscity.com.ph/admin-lte-3/dist/js/adminlte.js"></script>
    
    {!! $footerImports ?? '' !!}

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    
</body>

</html>
