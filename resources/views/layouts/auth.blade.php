<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'E-Rapor') }}</title>
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/icons-react/dist/index.umd.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/iconfont/tabler-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<body  class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        <div class="container container-tight py-4">
            {{$slot}}
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/js/tabler.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
@livewireScripts
</body>
</html>
