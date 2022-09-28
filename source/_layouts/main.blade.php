<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="h-full bg-zinc-900">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $page->title }}</title>
    <link rel="canonical" href="{{ $page->getUrl() }}" />
    <meta name="description" content="{{ $page->description }}" />

    <!-- Generic Favicons -->
    <link rel="icon" href="assets/images/favicons/favicon-32.png" sizes="32x32" />
    <link rel="icon" href="assets/images/favicons/favicon-57.png" sizes="57x57" />
    <link rel="icon" href="assets/images/favicons/favicon-76.png" sizes="76x76" />
    <link rel="icon" href="assets/images/favicons/favicon-96.png" sizes="96x96" />
    <link rel="icon" href="assets/images/favicons/favicon-128.png" sizes="128x128" />
    <link rel="icon" href="assets/images/favicons/favicon-192.png" sizes="192x192" />
    <link rel="icon" href="assets/images/favicons/favicon-228.png" sizes="228x228" />

    <!-- Android Favicon -->
    <link rel="shortcut icon" sizes="196x196" href="assets/images/favicons/favicon-196.png" />

    <!-- iOS Favicons -->
    <link rel="apple-touch-icon" href="assets/images/favicons/favicon-120.png" sizes="120x120" />
    <link rel="apple-touch-icon" href="assets/images/favicons/favicon-152.png" sizes="152x152" />
    <link rel="apple-touch-icon" href="assets/images/favicons/favicon-180.png" sizes="180x180" />

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
