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

<body>
  <x-toast />
  <nav class="mb-5 flex items-center h-24 w-full justify-between bg-red-600 font-bold text-white">
    {{-- navigation --}}
    <a href="/">
      <h1 class="ml-6 text-3xl">Jobify</h1>
    </a>

    <div class="flex items-center p-4 gap-2">
      @auth
        <p class="px-4 py-2 hidden text-white font-bold md:block">
          Hello {{auth()->user()->name}}!
        </p>

        <a href="/listings/manage" class="px-4 py-2 bg-gray-900 rounded-md text-white font-bold hover:bg-gray-800">
          <i class="fa-solid fa-gear"></i>
          Manage Listings
        </a>

        <form method="POST" action="/logout">
          @csrf
          <button class="bg-gray-900 py-2 px-4 rounded-md transition-all hover:text-red-600 hover:bg-gray-800"">
            <i class="fa-solid fa-user-minus mr-1"></i>
            Logout
          </button>
        </form>
      
      @else
        <a href="/register" class="px-4 py-2 text-white font-bold hover:opacity-80">
          <i class="fa-solid fa-user-plus"></i>
          Register
        </a>
        
        <a href="/login" class="px-4 py-2 text-white font-bold hover:opacity-80">
          <i class="fa-solid fa-user"></i>
          Login
        </a>
      @endauth

    </div>
  </nav>

  {{-- View ;) im talking about you --}}
  <main class="min-h-full">
    {{ $slot }}
  </main>

  <footer
    class="bg-red-600 absolute mt-24 flex h-24 w-full items-center justify-start font-bold text-white opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

    <a href="/listings/create" class="absolute right-10 top-1/3 bg-black px-5 py-2 text-white">Post Job</a>
  </footer>
</body>

</html>
