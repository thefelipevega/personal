@extends('_layouts.main') @section('body')
<div class="pb-20 lg:pb-28">
  <h2 class="text-4xl font-bold tracking-tight sm:my-4 sm:text-5xl">
    Bag of <span class="line-through decoration-sky-400 decoration-wavy decoration-8">Holding</span> Writing
  </h2>
  <p class="mt-3 max-w-2xl text-lg leading-relaxed sm:mt-4">
    Dive into my oeuvre of hastily typed ramblings and painstakingly edited pieces, like "Where's Waldo?" with words!
    It's a veritable grab-bag sure to delight you, your friends, and their friends. There's something in here for
    everyone, probably, most-likely, maybe...
  </p>
  <div class="grid gap-16 pt-12 sm:gap-0">
    @forelse($writings as $writing)
    <x-writing.card :writing="$writing"></x-writing.card>
    @empty
    <p class="text-lg font-bold tracking-wide">
      🤔 hmm... <br />
      There doesn't seem to be anything here. Check back later...
    </p>
    @endforelse
  </div>
</div>
@endsection
