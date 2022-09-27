@extends('_layouts.main') @section('body')
<div class="grid h-full gap-4 sm:mx-auto sm:max-w-prose sm:grid-cols-2 sm:gap-6 md:max-w-none lg:grid-cols-3 lg:gap-8">
  <x-home.about class="sm:col-span-2 lg:col-start-2 lg:row-span-2"></x-home.about>
  <x-home.stack class="lg:row-start-2"></x-home.stack>
  <x-home.work class="lg:row-start-1"></x-home.work>
</div>
@endsection
