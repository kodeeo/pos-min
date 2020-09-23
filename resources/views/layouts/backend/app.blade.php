<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'News Blog') }}</title>


    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">


    <link rel="icon" href="{{ asset('assets/backend/img/policymaker.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    @stack('css')

</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
@php
$setting=auth()->user()->setting;
@endphp
<!-- Navbar -->
@include('layouts.backend.partial.navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('layouts.backend.partial.sidebar')

<!-- Content Wrapper. Contains page content -->
@yield('content')
<!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('layouts.backend.partial.footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('assets/backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('assets/backend/js/adminlte.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>


{!! Toastr::message() !!}

<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}', 'Error!!', {
        closeButton: true,
        progressBar: true,
    });
    @endforeach
    @endif
</script>

@stack('js')

</body>


</html>
