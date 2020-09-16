<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name')}}</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('assets/auth/images/icons/favicon.ico')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/main.css')}}">
</head>
<body>

@yield('content')

<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="{{ asset('assets/auth/js/main.js')}}"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
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
</body>
</html>
