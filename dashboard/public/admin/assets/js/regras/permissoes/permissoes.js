var pagina = {
    vars : {},
    constantes : {
        abrirPopUp : document.querySelector('#abrirPopUp'),
        modalPopUp : $('#permissao-modal'),
        permissaoForm : $('#permissaoForm'),
        tableFormAjax : $('#ajax-table-form'),
    },
    funcoes : {
        AbrirPopUpPermissao : function abrir() {
            pagina.constantes.permissaoForm.trigger("reset");
            pagina.constantes.modalPopUp.modal('show');
            $('#id').val('');
        },
        FecharPopUpPermissao : function fechar() {
            pagina.constantes.modalPopUp.modal('hide');
            var oTable = pagina.constantes.tableFormAjax.DataTable();
            oTable.draw();
            $('#btn-save').html('Submit');
            $('#btn-save').attr("disabled", false);
        },
        EditarPopUpPermissao : function editar(res) {
            pagina.constantes.modalPopUp.modal('show');
            $('#id').val(res.id);
            $('#name').val(res.name);
        }
    },
}

$().ready(function(){

    pagina.constantes.abrirPopUp.addEventListener('click', () => {
        pagina.funcoes.AbrirPopUpPermissao();
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    pagina.constantes.tableFormAjax.DataTable({
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

    pagina.constantes.permissaoForm.submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'api/permissoes/store',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                pagina.funcoes.FecharPopUpPermissao();
            },
            error: function(data) {

            },
        });
    });
});

function editarPermissao(id) {
    $.ajax({
        type: 'POST',
        url: 'api/permissoes/edit',
        data: {id : id},
        dataType: 'json',
        success: function(res) {
            pagina.funcoes.EditarPopUpPermissao(res);
        }
    });
}