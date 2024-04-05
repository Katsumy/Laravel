<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/62bd3ebcdc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('login-asset/assets/css/style.css')}}">
</head>
<body>
    <div class="row vh-100 g-0">
        {{-- Lado esquerdo --}}
        <div class="col-lg-6 position-relative d-none d-lg-block">
            <div class="bg-holder" id="bg-login"></div>
        </div>

        {{-- Lado direito --}}
        <div class="col-lg-6">
            <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">
                    {{-- Logo --}}
                    <a href="#" class="d-flex justify-content-center mb-4">
                        {{-- <img src="" alt="Logo" class="logo-login"> --}}
                        BiecoDev 
                    </a>

                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>