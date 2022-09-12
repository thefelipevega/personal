<!-- This example requires Tailwind CSS v2.0+ -->
<header class="pt-4 pb-8">
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
          class="overflow-hidden rounded-2xl bg-zinc-900 p-10 shadow-md ring-1 ring-sky-500/25">
          <div class="flex items-center justify-between">
            <span class="text-sm font-medium text-zinc-400">Menu</span>
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
            <a href="#" class="block py-2 text-lg hover:text-sky-500">About</a>
            <a href="#" class="block py-2 text-lg hover:text-sky-500">Articles</a>
            <a href="#" class="block py-2 text-lg hover:text-sky-500">Uses</a>
          </div>
        </div>
      </div>
    </div>
    <div class="flex w-full items-center justify-between md:hidden">
      <h1 class="flex-shrink-0 text-2xl font-extrabold">Felipe Vega</h1>
      <button
        type="button"
        id="menu-button"
        @click="open = true"
        :aria-expanded="open"
        aria-haspopup="true"
        class="inline-flex justify-center rounded-md border border-zinc-700 bg-zinc-900 px-4 py-2 text-sm font-medium shadow-sm transition-colors ease-in hover:border-sky-500 focus:outline-none focus:ring-2 focus:ring-zinc-500">
        Menu
        <svg class="-mr-1 ml-2 mt-0.5 h-4 w-4 fill-current" viewBox="0 0 20 20" aria-hidden="true">
          <path
            fill-rule="evenodd"
            d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
            clip-rule="evenodd" />
        </svg>
      </button>
    </div>
    <div class="hidden flex-wrap justify-center space-x-8 rounded-2xl bg-zinc-800 px-8 py-2 md:flex">
      <a href="#" class="text-base font-medium text-white hover:text-sky-500">About</a>

      <a href="#" class="text-base font-medium text-white hover:text-sky-500">Articles</a>

      <a href="#" class="text-base font-medium text-white hover:text-sky-500">Uses</a>
    </div>
  </nav>
</header>
