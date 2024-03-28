@if (session()->has('success'))
  <div
    x-data="{ show:true }"
    x-init="
      setTimeout(() => show = false, 2500);
    "
    x-show="show"
    class="fixed z-10 left-1/2 top-10 -translate-x-1/2 transform bg-red-700 px-16 py-8 text-white font-bold rounded-lg border-2 border-red-900">
    <p>{{session('success')}}</p>
  </div>
@endif
