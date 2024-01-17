<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="h-full font-sans antialiased text-white bg-black">

        <div class="container grid h-full grid-cols-4 mx-auto">

            {{-- MENU --}}
            <div class="pt-px text-[#d6d9db] space-y-2 flex flex-col">

                <x-menu.item route="/" icon="twitter"/>
                <x-menu.item route="/timeline" title="Página Inicial" icon="home"/>
                <x-menu.item route="/explore" title="Explorar" icon="explore"/>
                <x-menu.item route="/notifications" title="Notificações" icon="notifications"/>
                <x-menu.item route="/messages" title="Mensagens" icon="messages"/>
                <x-menu.item route="/lists" title="Listas" icon="lists"/>
                <x-menu.item route="/bookmarks" title="Itens Salvos" icon="bookmarks"/>
                <x-menu.item route="/communities" title="Comunidades" icon="communities"/>
                <x-menu.item route="/premium" title="Premium" icon="premium"/>
                <x-menu.item route="/profile" title="Profile" icon="profile"/>
                <x-menu.item route="/more" title="Mais" icon="more"/>

            </div>
            {{-- END MENU --}}

            <div class="col-span-2 text-center border-[#2f3336] border-x-[0.625px]">
                Timeline
            </div>
            <div class="text-center">
                Trending Topics
            </div>

        </div>

        @livewireScripts
    </body>
</html>
