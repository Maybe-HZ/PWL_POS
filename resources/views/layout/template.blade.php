{{-- JS7 praktikum 1 bagian 7 --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'PWL Laravel Strater Code') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        {{-- JS7 praktikum 1 bagian 10 --}}
        {{-- Navbar --}}
        @include('layout.header')
        {{-- .Navbar --}}

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/')}}" class="brand-link">
                <img src="{{assets('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">PWL - Starter Code</span>
            </a>

            {{-- JS7 praktikum 1 bagian 12 --}}
            {{-- Sidebar --}}
            @include('layout.sidebar')
            {{-- .Sidebar --}}
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            {{-- JS7 praktikum 1 bagian 13 --}}
            {{-- Breadcrumb --}}
            @include('layout.breadcrumb')
            {{-- .Breadcrumb --}}

            <!-- Main content -->
            <section class="content">
                {{-- JS7 praktikum 1 bagian 18 --}}
                {{-- Content --}}
                @yield('content')
                {{-- .Content --}}
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        {{-- JS7 praktikum 1 bagian 13 --}}
        {{-- Footer --}}
        @include('layout.footer')
        {{-- .Footer --}}
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
</body>

</html>
