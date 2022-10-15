@extends('_layouts.main') @section('body')
<div
  class="prose prose-lg prose-invert mx-auto flex max-w-none flex-col space-y-8 text-inherit marker:text-sky-400 prose-a:text-inherit prose-a:decoration-sky-400 prose-a:decoration-2 prose-a:underline-offset-8 prose-blockquote:border-none prose-li:[&::marker]:content-['>']">
  <div class="mb-0 max-w-2xl font-bold">
    <h2 class="my-0 text-4xl sm:my-4 sm:text-5xl">What do I use to get stuff done?</h2>
    <p class="mt-2 mb-0 font-normal sm:mb-4">
      I'm glad you asked! Take a look and see if they can help you get stuff done too.
    </p>
  </div>
  <div class="mt-0 grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-y-0">
    <div>
      <h3 class="mt-0 text-left text-sm font-bold uppercase tracking-widest text-zinc-400">Hardware</h3>
      <div class="flex flex-col">
        <p class="my-1"><a href="https://www.apple.com/macbook-air-m1/">M1 MacBook Air </a>is my computer</p>
        <p class="my-1">
          <a href="https://www.logitech.com/en-us/products/keyboards/mx-keys-mac-wireless-keyboard.920-009552.html">
            MX Keys for Mac </a
          >is my keyboard
        </p>
        <p class="my-1">
          <a href="https://www.logitech.com/en-us/products/mice/mx-master-3s-mac-bluetooth-mouse.910-006570.html">
            MX Master 3 for Mac </a
          >is my mouse
        </p>
        <p class="my-1">
          <a href="https://www.amazon.com/dp/B088G1PKKN/ref=cm_sw_em_r_mt_dp_U_uA.cFb2TN27MB">LG 32-Inch Ultrawide</a>
          is my monitor
        </p>
        <p class="my-1">
          <a href="https://www.upliftdesk.com/uplift-v2-standing-desk-v2-or-v2-commercial/"
            >Uplift V1 (w/ Walnut Top)</a
          >
          is my desk
        </p>
      </div>
    </div>
    <div>
      <h3 class="mt-0 text-left text-sm font-bold uppercase tracking-widest text-zinc-400">Software</h3>
      <div class="flex flex-col">
        <p class="my-1"><a href="https://hey.com/">Hey</a> for email</p>
        <p class="my-1"><a href="https://bear.app/">Bear</a> for notes</p>
        <p class="my-1"><a href="https://ticktick.com/home">Things</a> for tasks</p>
        <p class="my-1"><a href="https://tableplus.com">Table Plus</a> for databases</p>
        <p class="my-1"><a href="https://code.visualstudio.com/">Visual Studio Code</a> for code editing</p>
      </div>
      <ul class="col-span-3 mt-0"></ul>
    </div>
  </div>
</div>
@endsection
