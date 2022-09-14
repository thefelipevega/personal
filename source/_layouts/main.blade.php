<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="h-full bg-zinc-900">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="{{ $page->getUrl() }}" />
    <meta name="description" content="{{ $page->description }}" />
    <title>{{ $page->title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700" rel="stylesheet" />
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}" />
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
  </head>

  <body class="mx-auto h-full max-w-7xl px-4 font-sans text-zinc-100 antialiased sm:px-6 lg:px-8">
    <x-navbar></x-navbar>
    @yield('body')
  </body>
</html>
