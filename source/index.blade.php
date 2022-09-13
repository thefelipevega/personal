@extends('_layouts.main') @section('body')
<div class="flex flex-col space-y-4 pb-8 md:flex-row md:space-x-10">
  <a class="hidden flex-shrink-0 md:block" href="/">
    <img class="h-48 w-auto rounded object-cover ring ring-sky-500" src="assets/images/headshot-angled.jpg" />
  </a>
  <div class="space-y-6 xl:space-y-8">
    <h1 class="text-5xl font-bold tracking-tight md:text-6xl">Felipe Vega</h1>
    <h2 class="flex flex-wrap text-4xl font-medium tracking-tight md:text-5xl">
      Product Manager, Developer, and Leader.
    </h2>
  </div>
</div>
@endsection
