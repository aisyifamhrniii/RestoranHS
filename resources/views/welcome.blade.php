<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <style>
    .background {
            background-image: url('{{ asset("assets/background.svg") }}');
        }
    </style>
 
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        @include('components.restoran.header')
        <x-banner></x-banner>   
        <div class="background ">    
            <x-product></x-product>
        </div> 
        <x-Reservation></x-Reservation>
        <x-footer></x-footer>
        <x-add></x-add>
    </body>
</html>
