<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>


     <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

     @vite('resources/js/app.js')

</head>

<body>
     @include('partials.header')
     <main>
          @yield('content')
     </main>
     @include('partials.footer')
</body>

</html>