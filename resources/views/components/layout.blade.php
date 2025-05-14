<!DOCTYPE html>
<html lang="en">

<x-head></x-head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<body class="bg-[#5e6f52] scroll-smooth">

    <main>
        <x-navbar></x-navbar>
        @yield('content') 
    </main>

</body>
</html>
