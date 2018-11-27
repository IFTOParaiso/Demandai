function teste() {
    $('#title').css('display', 'block');
}

$(document).on('click', '#big-area', function () {
    var id = event.target.id;
    var idBigArea = $("#" + id).val();

    $.ajax({
        url: "areas/" + idBigArea,
        method: "GET",
        data: idBigArea
    }).done(function (idBigArea) {

       id = idBigArea[0].big_area_id;

        listaAreas = '<div class="areas'+id+'"><table id="' + id + '" class="table table-bordered table-hover"><thead><tr><th>Áreas</th></tr></thead>';
        listaAreas += '<tbody>';

        for (var ba in idBigArea) {
            listaAreas += '<tr><td><input type="checkbox" name="areas[]" id="areas-0"value="' + idBigArea[ba].id + '">' + idBigArea[ba].name + '</td></tr>';
        }
        listaAreas += '</tbody>';
        listaAreas += '</table></div>';

        if ($('#' + idBigArea[0].big_area_id).length) {
            $('table').hide();
            $('table').DataTable().destroy();
            $('#' + id).show();
            paginacao(id);
        }

        else {
            $('#tabela-areas').append(listaAreas);
            $('table').hide();
            $('table').DataTable().destroy();
            $('#' + id).show();
            paginacao(id);
        }

    });
});

function paginacao(id) {
    $('#'+id).DataTable( {
        "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "Todos"]],
        "language": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    } );
}


$('.btnNext').click(function(){
    $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

$('.btnPrevious').click(function(){
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});





