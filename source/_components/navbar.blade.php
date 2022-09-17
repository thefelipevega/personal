<header class="pt-4">
  <nav class="flex items-center justify-center" x-data="{open: false}">
    <div
      x-cloak
      x-show="open"
      x-transition:enter="ease-out duration-300"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="ease-in duration-200"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="md:hidden">
      <div class="fixed inset-0 z-50 bg-black/80 opacity-100 backdrop-blur" aria-hidden="true"></div>
      <div
        x-show="open"
        x-transition:enter="duration-150 ease-out"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="duration-100 ease-in"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute inset-x-0 top-5 z-50 mx-auto max-w-xl origin-top transform p-6 transition md:hidden">
        <div
          @click.away="open = false"
          class="overflow-hidden rounded-2xl bg-zinc-900 p-10 shadow-md ring-2 ring-sky-400/50">
          <div class="flex items-center justify-between">
            <span class="text-xs font-medium uppercase text-zinc-400">Go To</span>
            <button
              type="button"
              @click="open = false"
              class="inline-flex items-center justify-center rounded-md p-1 text-zinc-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
              <span class="sr-only">Close menu</span>
              <svg viewBox="0 0 24 24" class="h-4 w-4 fill-transparent stroke-current stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="space-y-3 py-6">
            <a href="#" class="block py-2 text-lg hover:text-sky-400">About</a>
            <a href="#" class="block py-2 text-lg hover:text-sky-400">Writing</a>
            <a href="#" class="block py-2 text-lg hover:text-sky-400">Uses</a>
          </div>
        </div>
      </div>
    </div>
    <div class="flex w-full items-center justify-between md:hidden">
      <h1 class="border-b-4 border-sky-400 pb-2 text-5xl font-bold">Felipe Vega</h1>
      <button
        type="button"
        id="menu-button"
        @click="open = true"
        :aria-expanded="open"
        aria-haspopup="true"
        class="-mr-1 rounded-lg border-2 border-zinc-600 p-1 text-xs font-semibold uppercase tracking-wider shadow-sm transition-colors ease-in hover:border-sky-400 focus:outline-none focus:ring-2 focus:ring-sky-400">
        <svg viewBox="0 0 24 24" class="h-6 w-6 stroke-current stroke-2">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
        </svg>
      </button>
    </div>
    <div class="hidden flex-wrap justify-center space-x-8 rounded-2xl bg-zinc-800 px-8 py-2 md:flex">
      <a href="#" class="text-base font-medium text-white hover:text-sky-400">About</a>

      <a href="#" class="text-base font-medium text-white hover:text-sky-400">Writing</a>

      <a href="#" class="text-base font-medium text-white hover:text-sky-400">Uses</a>
    </div>
  </nav>
</header>
