<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ $title }}</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="http://cdn.sportscity.com.ph/admin-lte-3/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://cdn.sportscity.com.ph/admin-lte-3/dist/css/adminlte.min.css">

    {!! $headerImports !!}
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav text-sm">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md {{ $navBarColor }} ">
            <div class="container">
                <a href="{{ config('app.url') }}" class="navbar-brand">
                    <img src="{{ $brandLogo ?? 'http://cdn.sportscity.com.ph/admin-lte-3/dist/img/AdminLTELogo.png' }}"
                        alt="{{ $brandName }} Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">{{ $brandName }}</span>
                </a>

                {!! $navbar ?? '' !!}
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> {{ $headerText }} <small>{{ $headerTextSm }}</small></h1>
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
            <div class="content">
                <div class="container">
                    {!! $content ?? '' !!}
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
        <footer class="main-footer">
            {!! $footer ?? '' !!}
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="http://cdn.sportscity.com.ph/admin-lte-3/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="http://cdn.sportscity.com.ph/admin-lte-3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://cdn.sportscity.com.ph/admin-lte-3/dist/js/adminlte.min.js"></script>

    {!! $footerImports ?? '' !!}
</body>

</html>
