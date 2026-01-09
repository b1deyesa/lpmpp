<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-lpmpp.png') }}" type="image/x-icon">
    
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/47.3.0/ckeditor5.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://kit.fontawesome.com/4419d23bf4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')
</head>
<body @if($class) class="{{ $class }}" @endif>
    
    {{-- Slot --}}
    {{ $slot }}
    
    <script src="https://cdn.ckeditor.com/ckeditor5/47.3.0/ckeditor5.umd.js"></script>
    @livewireScripts
    @stack('scripts')
</body>
</html>