<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>

    @vite(['resources/js/app.js'])

    <style>
        body {
               background-image: url('https://static.nationalgeographicla.com/files/styles/image_3200/public/006-library-biblioteca-angelica-a-roma_0002.jpg?w=1600&h=900');
               
               justify-content: space-between;
           }
   </style>

</head>
<body>

    @include('partials.navbar')

    @yield('contenido')
    @include('partials.footer')

    

</body>
</html>