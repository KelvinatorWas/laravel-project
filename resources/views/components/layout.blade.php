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
  <nav class="mb-5 flex h-24 w-full items-center justify-between bg-red-600 font-bold text-white">
    {{-- navigation --}}
    <h1 class="mb-5 text-3xl">Jobify</h1>
  </nav>

  {{-- View ;) im talking about you --}}
  <main>
    {{ $slot }}
  </main>

  <footer
    class="bg-red-600 fixed bottom-0 left-0 mt-24 flex h-24 w-full items-center justify-start font-bold text-white opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

    <a href="/listings/create" class="absolute right-10 top-1/3 bg-black px-5 py-2 text-white">Post Job</a>
  </footer>
</body>

</html>
