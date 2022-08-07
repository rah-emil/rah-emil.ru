<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO META -->
    <title>@yield('title', 'FullStack разработчик') &bull; Rah Emil</title>
    <meta name="description" content="FullStack разработчик, блогер, TeamLead">

    <!-- OG TAGS -->
    <meta property="og:title" content="@yield('og:title', 'FullStack разработчик') • Rah Emil">
    <meta property="og:site_name" content="rah-emil.ru">
    <meta property="og:url" content="https://rah-emil.ru">
    <meta property="og:description" content="FullStack разработчик, блогер, TeamLead">
    <meta property="og:type" content="profile">
    <meta property="og:image" content="{{ asset('favicons/apple-touch-icon.png') }}">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <link rel="mask-icon" color="#795bd5" href="{{ asset('favicons/safari-pinned-tab.svg') }}">
    <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#8447fd">
    <meta name="msapplication-config" content="{{ asset('favicons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- STYLES -->
    @vite('resources/scss/app.scss')

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,800" rel="stylesheet" />
</head>
<body>
    @yield('content')

    <!-- SCRIPTS -->
    @vite('resources/js/app.js')
</body>
</html>
