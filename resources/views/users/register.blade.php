<x-layout>
  <x-card class="mx-auto mt-20 max-w-lg p-10">

    <header class="text-center">
      <h2 class="mb-2 text-2xl font-bold uppercase">
        Register
      </h2>
      <p class="mb-4">To Post a Job</p>
    </header>

    <form method="POST" action="/users" class="flex flex-col">
      @csrf

      <div class="mb-6">
        <div class="flex items-center gap-2 text-red-600">
          <i class="fa-solid fa-user text-xl"></i>
          <input value="{{ old('name') }}" type="text" name="name" placeholder="Name..."
            class="w-full rounded-br-xl rounded-tl-xl border-2 border-red-600 p-2 outline-none transition-all focus:rounded-none focus:rounded-bl-xl focus:rounded-tr-xl focus:shadow-md focus:shadow-red-300" />
        </div>

        @error('name')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

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

      <div class="mb-6">
        <div class="flex items-center gap-2 text-red-600">
          <i class="fa-solid fa-lock text-xl"></i>
          <input value="{{ old('password_confirmation') }}" type="password" name="password_confirmation"
            placeholder="Confirm Password..."
            class="w-full rounded-br-xl rounded-tl-xl border-2 border-red-600 p-2 outline-none transition-all focus:rounded-none focus:rounded-bl-xl focus:rounded-tr-xl focus:shadow-md focus:shadow-red-300" />
        </div>

        @error('password_confirmation')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>
      
      <div class="self-center">
        <x-button.primary type="submit" size="sm" class="">Sign Up</x-button.primary>
      </div>

      <a class="self-center mt-5 text-red-600 text-sm underline text-shadow" href="/login">Already have an account?</a>

    </form>
  </x-card>
</x-layout>
