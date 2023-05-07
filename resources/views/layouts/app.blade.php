<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('libraries.styles')
</head>

<body>
    @include('components.preloader')
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        @include('components.header')
        @include('components.sidebar')
        <div class="page-wrapper">
            @if (isset($header))
                {{ $header ?? '' }}
            @endif
            <div class="container-fluid">
                {{ $content ?? '' }}
                @stack('modals')
            </div>
            @include('components.footer')
        </div>
    </div>
    @include('libraries.scripts')
</body>

</html>
