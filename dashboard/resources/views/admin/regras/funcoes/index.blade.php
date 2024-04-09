@extends('admin.master.master')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
@endsection

@section('content')
    <a href="javascript:void(0)" class="btn btn-success btn-sm mb-2" id="abrirPopUp"><i class="fa-solid fa-plus"></i> Criar nova função</a>
    <table class="table" id="ajax-table-form">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
    </table>
@endsection

@section('js')
    <script src="{{asset('admin/assets/js/regras/funcoes/funcoes.js')}}"></script>
@endsection