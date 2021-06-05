<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/10c404da60.js" crossorigin="anonymous"></script>

</head>
<body>
    {{-- @include('layouts.people.navBar')

    <div id="wrapper">
        @auth
            @include('layouts.people.leftBar') 
        @endauth
    
        <div id="page-content-wrapper">
            <div class="container-fluid contenido">
                @yield('content')
            </div>
        </div>
    </div> --}}
    <div class="wrapper">
		<!-- Sidebar -->
        @auth
		<nav id="sidebar" class="bg-primary">
            @include('layouts.people.leftBar') 
		</nav>
        @endauth

		<!-- Page Content -->
		<div id="content">
			@include('layouts.people.navBar')
			@yield('content')
		</div>
	</div>
</body>
</html>
