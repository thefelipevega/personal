@extends('_layouts.main') @section('body')
<div class="flex flex-col space-y-8 sm:space-y-4">
  <flex class="flex-col space-y-8 sm:space-y-4">
    <h2 class="text-4xl font-medium text-white sm:text-5xl">Product manager, web developer, & bag of opinions.</h2>
    <x-home.about></x-home.about>
  </flex>
  <div class="flex flex-col space-y-8 sm:flex-row sm:space-y-0 sm:space-x-2">
    <x-home.stack></x-home.stack>
    <x-home.work></x-home.work>
  </div>
  @endsection
</div>
