<x-layout>
  <x-card class="mx-auto mt-24 max-w-lg p-10">

    <header class="text-center">
      <h2 class="mb-2 text-2xl font-bold uppercase">
        Login
      </h2>
      <p class="mb-4">To Post a Job</p>
    </header>

    <form method="POST" action="/users/login" class="flex flex-col">
      @csrf

      <div class="mb-6">
        <div class="flex items-center gap-2 text-red-600">
          <i class="fa-solid fa-envelope text-xl"></i>
          <input value="{{ old('email') }}" type="email" name="email" placeholder="Email..."
            class="w-full rounded-br-xl rounded-tl-xl border-2 border-red-600 p-2 outline-none transition-all focus:rounded-none focus:rounded-bl-xl focus:rounded-tr-xl focus:shadow-md focus:shadow-red-300" />
        </div>

        @error('email')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <div class="flex items-center gap-2 text-red-600">
          <i class="fa-solid fa-lock text-xl"></i>
          <input value="{{ old('password') }}" type="password" name="password" placeholder="Password..."
            class="w-full rounded-br-xl rounded-tl-xl border-2 border-red-600 p-2 outline-none transition-all focus:rounded-none focus:rounded-bl-xl focus:rounded-tr-xl focus:shadow-md focus:shadow-red-300" />
        </div>

        @error('password')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>
      
      <div class="self-center">
        <button class="text-white font-bold bg-gray-900 py-2 px-6 rounded-md hover:opacity-80">Login</button>
      </div>

      <a class="self-center mt-5 text-red-600 text-sm underline" href="/register">Don't have an account?</a>

    </form>
  </x-card>
</x-layout>
