<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="h-full bg-zinc-900">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $page->title }}</title>
    <link rel="canonical" href="{{ $page->getUrl() }}" />
    <meta name="description" content="{{ $page->description }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700" rel="stylesheet" />
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}" />
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
  </head>

  <body class="mx-auto flex h-full max-w-7xl flex-col px-4 py-4 font-sans text-zinc-100 antialiased sm:px-6 lg:px-8">
    <x-header></x-header>
    <main class="flex-1 py-4">@yield('body')</main>
    <x-footer></x-footer>
  </body>
</html>
