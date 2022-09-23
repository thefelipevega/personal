@extends('_layouts.main') @section('body')
<div class="flex flex-col space-y-8">
  <h2 class="text-4xl font-medium text-white sm:text-5xl">Product manager, web developer, & bag of opinions.</h2>
  <x-home.about></x-home.about>
  <x-home.stack></x-home.stack>
  <x-home.work></x-home.work>
  @endsection
</div>
