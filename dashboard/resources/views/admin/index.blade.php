@extends('admin.master.master')

@section('title', ' Página Principal')

@section('content')
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Admin Dashboard</h4>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill border-0 illustration">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="p-3 m-1">
                                    <h4>Welcome Back, Admin</h4>
                                    <p class="mb-0">Admin Dashboard, BiecoDev</p>
                                </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                                <img src="" class="img-fluid illustration-image" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill border-0">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h4 class="mb-2">
                                    R$78,00
                                </h4>
                                <p class="mb-2">
                                    Total: 
                                </p>
                                <div class="mb-0">
                                    <span class="badge text-success me-2">
                                    +9.0% 
                                    </span>
                                    <span class="text-muted">
                                        Ultimo mês
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tabela de elementos  -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Tabela Básica
                </h5>
                <h6 class="card-subtitle text-muted">
                    Eu quis adipisicing labore dolore ullamco nulla ex anim exercitation velit amet culpa.
                </h6>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
@endsection