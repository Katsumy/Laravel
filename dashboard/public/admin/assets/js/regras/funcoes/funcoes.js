var pagina = {
    vars : {},
    constantes : {
        abrirPopUp : document.querySelector('#abrirPopUp'),
        modalPopUp : $('#funcao-modal'),
        funcaoForm : $('#funcaoForm'),
        tableFormAjax : $('#ajax-table-form'),
    },
    funcoes : {
        AbrirPopUpFuncao : function abrir() {
            pagina.constantes.funcaoForm.trigger("reset");
            pagina.constantes.modalPopUp.modal('show');
            $('#id').val('');
        },
        FecharPopUpFuncao : function fechar() {
            pagina.constantes.modalPopUp.modal('hide');
            var oTable = pagina.constantes.tableFormAjax.DataTable();
            oTable.draw();
            $('#btn-save').html('Submit');
            $('#btn-save').attr("disabled", false);
        },
        EditarPopUpFuncao : function editar(res) {
            pagina.constantes.modalPopUp.modal('show');
            $('#id').val(res.id);
            $('#name').val(res.name);
        }
    },
}

$().ready(function(){

    pagina.constantes.abrirPopUp.addEventListener('click', () => {
        pagina.funcoes.AbrirPopUpFuncao();
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    pagina.constantes.tableFormAjax.DataTable({
        processing: true,
        serverSide: true,
        ajax: "funcoes",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'action', name: 'action', orderable: false},
        ],
        order: [[0, 'desc']],
    });

    pagina.constantes.funcaoForm.submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'api/funcoes/store',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                pagina.funcoes.FecharPopUpFuncao();
            },
            error: function(data) {

            },
        });
    });
});

function editarFuncao(id) {
    $.ajax({
        type: 'POST',
        url: 'api/funcoes/edit',
        data: {id : id},
        dataType: 'json',
        success: function(res) {
            pagina.funcoes.EditarPopUpFuncao(res);
        }
    });
}