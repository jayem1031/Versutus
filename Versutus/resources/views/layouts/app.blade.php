<body class="bg-white text-gray-800">

    @include('partials.header')

    <main class="pt-24">
        @yield('content')
    </main>

    @include('partials.footer')
<link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
 <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

</body>
