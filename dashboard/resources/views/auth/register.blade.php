@extends('layouts.master')

@section('content')
    <div class="text-center mb-5">
        <h3 class="fw-bold">Cadastro</h3>
        <p class="text-secondary" id="text-login">Faça uma conta agora mesmo</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fa-solid fa-user"></i>
            </span>
            <input type="text" name="name" id="name" class="form-control form-control-lg fs-6" placeholder="Insira o seu nome">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fa-solid fa-envelope"></i>
            </span>
            <input type="email" name="email" id="email" class="form-control form-control-lg fs-6" placeholder="Insira o seu e-mail">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fa-solid fa-lock"></i>
            </span>
            <input type="password" name="password" id="password" class="form-control form-control-lg fs-6" placeholder="Insira a sua senha">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fa-solid fa-lock"></i>
            </span>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg fs-6" placeholder="Insira a sua senha novamente">
        </div>

        <button class="btn btn-primary btn-lg w-100 mb-3">Cadastrar</button>
    </form>

    <div class="text-center">
        <small>Você já tem uma conta? <a href="{{route('login')}}" class="fw-bold"> Acesse aqui</a></small>
    </div>
@endsection
