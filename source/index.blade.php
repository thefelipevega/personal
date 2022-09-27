@extends('_layouts.main') @section('body')
<div class="grid gap-4 sm:grid-cols-2 sm:gap-6 lg:grid-cols-3 lg:gap-4">
  <x-home.about class="sm:col-span-2 lg:col-start-2"></x-home.about>
  <x-home.stack class="lg:row-start-2"></x-home.stack>
  <x-home.work class="lg:row-start-1"></x-home.work>
</div>
@endsection
