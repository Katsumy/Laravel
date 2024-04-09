var pagina = {
    vars : {},
    constantes : {},
    funcoes : {},
}

$().ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#ajax-table-form').DataTable({
        processing: true,
        serverSide: true,
        ajax: "permissoes",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'action', name: 'action', orderable: false},
        ],
        order: [[0, 'desc']],
    });
})