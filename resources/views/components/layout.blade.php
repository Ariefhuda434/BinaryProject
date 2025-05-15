<!DOCTYPE html>
<html lang="en">

<x-head></x-head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<body class=" scroll-smooth">

    <main>
        <x-navbar></x-navbar>
        @yield('content') 
    </main>

</body>
</html>
