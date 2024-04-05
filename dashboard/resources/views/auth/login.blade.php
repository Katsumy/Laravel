@extends('layouts.master')

@section('content')
    <div class="text-center mb-5">
        <h3 class="fw-bold">Log In</h3>
        <p class="text-secondary" id="text-login">Realize o acesso a sua conta</p>
    </div>

    <!-- Social Login -->
    <button class="btn btn-lg btn-outline-secondary w-100 btn-outline-custom mb-3"><i class="fa-brands fa-google text-danger me-1 fs-6"></i> Login com Google</button>
    <button class="btn btn-lg btn-outline-secondary w-100 btn-outline-custom"><i class="fa-brands fa-facebook-f text-primary me-1 fs-6"></i> Login com Facebook</button>
    <!--/ Social Login -->

    <!-- Divider -->
    <div class="position-relative">
        <hr class="text-secondary divider">
        <div class="divider-content-center">ou</div>
    </div>
    <!--/ Divider -->

    <!-- Form -->
    <form method="POST" action="{{route('login')}}">
        @csrf

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fa-solid fa-user"></i>
            </span>
            <input type="email" name="email" id="email" class="form-control form-control-lg fs-6" placeholder="Insira o seu e-mail">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fa-solid fa-lock"></i>
            </span>
            <input type="password" name="password" id="password" class="form-control form-control-lg fs-6" placeholder="Insira a sua senha">
        </div>

        <div class="input-group mb-3 d-flex justify-content-between">
            <div class="form-check">
                <input type="checkbox" name="remember" id="formCheck" class="form-check-input">
                <label for="formCheck" class="form-check-label text-secondary"><small>Lembrar acesso</small></label>
            </div>
            @if (Route::has('password.request'))
                <div class="">
                    <small><a href="{{ route('password.request') }}">Esqueceu à senha?</a></small>
                </div>
            @endif
        </div>

        <button class="btn btn-primary btn-lg w-100 mb-3">Login</button>
    </form>
    <!--/ Form -->
    <div class="text-center">
        <small>Você não tem uma conta ? <a href="{{route('register')}}" class="fw-bold"> Criar Conta</a></small>
    </div>
@endsection