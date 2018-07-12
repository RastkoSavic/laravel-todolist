<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <title>Todo List</title>

   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

   <div id="app">
      {{-- Navbar --}}
      @include('inc.navbar')

      <div class="container">
         {{-- Success and Error Messages --}}
         @include('inc.messages')

         <br>
         
         {{-- Space for Main Content --}}
         @yield('content')
      </div>
   </div>

   <br>
   <footer id="main-footer">
      <p class="text-center">Copyright &copy; 2018 Todolist</p>
   </footer>

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}"></script>
   
</body>
</html>