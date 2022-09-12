<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="h-full bg-zinc-900">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body
    class="h-full font-sans antialiased text-zinc-100 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">
    <x-navbar></x-navbar>
    @yield('body')
</body>

</html>
