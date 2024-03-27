<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/6667bd0ef7.js" crossorigin="anonymous"></script>
  @vite('resources/css/app.css')
  <title class>Jobify</title>
</head>
<body>
  <nav class="flex w-full items-center justify-between font-bold bg-red-600 text-white h-24 mb-5">
    {{-- navigation --}}
    <h1 class="text-3xl mb-5">Jobify</h1>
  </nav>

  {{-- View ;) im talking about you --}}
  <main>
    {{$slot}}
  </main>

  <footer class="static bottom-0 left-0 w-full flex items-center font-bold bg-red-600 text-white h-24 mt-24 justify-center">
    {{-- footer --}}
    <p class="ml-2">Copyright &copy;2024, All Rights Reserved</p>
  </footer>
</body>
</html>