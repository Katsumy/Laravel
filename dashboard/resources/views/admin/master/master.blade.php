<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{$title ?? 'Page Title'}} </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/62bd3ebcdc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('css')
</head>
<body>
    <div class="wrapper">
        @include('admin.master._sidebar')

        <div class="main">
            @include('admin.master._profile')

            <main class="content px-3 py-2">
                @yield('content')
            </main>

            <a href="#" class="theme-toogle">
                <i class="fa-regular fa-sun"></i>
                <i class="fa-regular fa-moon"></i>
            </a>

            @include('admin.master._footer')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @yield('js')
    <script src="{{asset('admin/assets/js/script.js')}}"></script>
</body>
</html>