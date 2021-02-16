<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    
</head>
<body>

    @include('layouts.navbar')

    <main class="container mt-5">
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sweetalert2@9.js') }}"></script>
    <script>
        $(document).ready(function() {

            @if (session('message'))
                Swal.fire({
                    title: 'Felicitaciones',
                    text: '{{ session('message') }}',
                    icon: 'success',
                    confirmButtonColor: '#eb596e',
                    confirmButtonText: 'Aceptar'
                });
            @endif
            
            $('.btn-delete').click(function(event) {
                Swal.fire({
                    title: 'Esta usted seguro ?',
                    text: 'Desea eliminar este registro',
                    icon: 'error',
                    showCancelButton: true,
                    cancelButtonColor: '#d0211c',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#1e5f74',
                    confirmButtonText: 'Aceptar',  
                }).then((result) => {
                    if(result.value) {
                        $(this).parent().submit();
                    }
                });
            });
        });
    </script>
</body>
</html>
