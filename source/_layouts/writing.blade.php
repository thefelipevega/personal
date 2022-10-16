@extends('_layouts.main') @section('body')
<a
  href="/writing"
  class="ml-2 flex items-center text-sm font-bold tracking-wide text-zinc-500 no-underline transition-colors duration-300 ease-in-out hover:text-sky-400">
  <svg viewBox="0 0 20 20" fill="currentColor" class="mr-1 h-4 w-4">
    <path
      fill-rule="evenodd"
      d="M7.793 2.232a.75.75 0 01-.025 1.06L3.622 7.25h10.003a5.375 5.375 0 010 10.75H10.75a.75.75 0 010-1.5h2.875a3.875 3.875 0 000-7.75H3.622l4.146 3.957a.75.75 0 01-1.036 1.085l-5.5-5.25a.75.75 0 010-1.085l5.5-5.25a.75.75 0 011.06.025z"
      clip-rule="evenodd" />
  </svg>
  Go Back
</a>
<article class="prose prose-lg prose-invert mx-auto mt-4">
  <p class="mb-4 border-l-2 border-zinc-700 p-1 text-base font-bold uppercase tracking-wider text-zinc-500">
    {{ $page->date }}
  </p>
  <h1>{{ $page->title }}</h1>
  @yield('content')
</article>
@endsection
