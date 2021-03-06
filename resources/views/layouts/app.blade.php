

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">


<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>

<div class="min-h-screen bg-gray-100">

    <!-- Page Heading -->


    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

@stack('modals')

@livewireScripts
