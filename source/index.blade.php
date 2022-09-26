@extends('_layouts.main') @section('body')
<div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
    <h2 class="sm:col-span-2 text-4xl font-medium text-white sm:text-5xl">Product manager, web developer, & bag of opinions.</h2>
    <x-home.about class="sm:col-span-2"></x-home.about>
    <x-home.stack></x-home.stack>
    <x-home.work></x-home.work>
  </div>
  @endsection
</div>
