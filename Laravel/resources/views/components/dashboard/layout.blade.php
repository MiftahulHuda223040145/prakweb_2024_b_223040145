<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
@vite(['resources/css/app.css','resources/js/app.js'])
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{-- Trix Editor --}}
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

<style>
    trix-toolbar [data-trix-button-group='file-tools'] {
        display: none;
    }
</style>

<title>{{$title}}</title>
</head>
<body>

    <x-dashboard.sidebar></x-dashboard.sidebar>
    <x-dashboard.header>{{$title}}</x-dashboard.header>
    {{$slot}}
</body>
</html>