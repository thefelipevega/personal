<div
  class="group flex origin-center justify-between transition-colors duration-500 ease-in-out hover:border-sky-400 sm:max-w-3xl sm:space-x-4 sm:border-l-2 sm:border-zinc-800 sm:py-4">
  <p class="hidden flex-shrink-0 p-4 text-sm font-bold tracking-wider text-zinc-500 sm:block">{{ $writing->date }}</p>
  <a
    href="{{ $writing->getPath() }}"
    class="flex flex-1 origin-left flex-col rounded-md p-2 transition-colors duration-300 ease-out hover:bg-zinc-800 sm:p-4">
    <p class="text-sm font-bold tracking-wider text-zinc-500 sm:hidden">{{ $writing->date }}</p>
    <p class="mt-3 text-xl font-semibold sm:mt-0">{{ $writing->title }}</p>
    <p class="mt-3 text-zinc-400">
      {{ $writing->excerpt() }}
    </p>
    <p class="mt-3 flex items-center text-sm font-bold text-sky-400">
      Keep Reading
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
        <path
          fill-rule="evenodd"
          d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
          clip-rule="evenodd" />
      </svg>
    </p>
  </a>
</div>
