<!DOCTYPE html>
<html lang="en">

<x-head></x-head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<body class=" scroll-smooth">

    <x-navbar></x-navbar>
    <main>
        @yield('content') 
    </main>

    <x-profile></x-profile>
   
    <x-footer></x-footer>
</body>
</html>
