<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/6667bd0ef7.js" crossorigin="anonymous"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  @vite('resources/css/app.css')
  <title class>Jobify</title>
</head>

<body class="h-screen">
  <x-toast />
  <nav class="mb-5 items-center shadow-md bg-gray-900 flex h-24 w-full justify-between font-bold text-white ">
    {{-- navigation --}}
    <a href="/">
      <h1 class="ml-4 text-3xl rotate-12 underline select-none cursor-pointer">Jobify</h1>
    </a>

    <div class="flex items-center p-4 gap-2">
      @auth
        <p class="px-4 py-2 hidden text-white font-bold md:block">
          Hello {{auth()->user()->name}}!
        </p>

        <a href="/listings/create" class="px-4 py-2 bg-gray-900 rounded-md text-white font-bold hover:text-red-600 hover:bg-gray-800">
          <i class="fa-solid fa-file hidden md:inline"></i>
          Post Job
        </a>

        <a href="/listings/manage" class="px-4 py-2 bg-gray-900 rounded-md text-white font-bold hover:text-red-600 hover:bg-gray-800">
          <i class="fa-solid fa-gear x-rotate hidden md:inline"></i>
          Manage Listings
        </a>

        <form method="POST" action="/logout">
          @csrf
          <button class="bg-gray-900 py-2 px-4 rounded-md transition-all hover:text-red-600 hover:bg-gray-800"">
            <i class="fa-solid fa-user-minus mr-1 hidden md:inline"></i>
            Logout
          </button>
        </form>
      
      @else
        <x-button.secondary href="/register" size="sm" class="">
          <i class="fa-solid fa-user-plus hidden md:inline"></i>
          Register
        </x-button.secondary>


        <x-button.secondary href="/login" size="sm" class="">
          <i class="fa-solid fa-user hidden md:inline"></i>
          Login
        </x-button.secondary>
      
      @endauth

    </div>
  </nav>

  <main class="min-h-full">
    {{ $slot }}
  </main>

  <footer
    class="bg-gray-900 absolute mt-24 flex h-24 w-full items-center font-bold text-white justify-center">
    <p class="ml-2">Copyright &copy; 2024, All Rights reserved</p>

  </footer>
</body>

</html>
