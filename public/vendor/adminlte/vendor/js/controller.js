const urlBase = "http://localhost/Demandai/public/";

$(document).on('click', '#big-area', function () {
    var id = event.target.id;
    var idBigArea = $("#" + id).val();

    $.ajax({
        url: urlBase + "areas/" + idBigArea,
        method: "GET",
        data: idBigArea
    }).done(function (idBigArea) {

        id = idBigArea[0].big_area_id;

        listaAreas = '<div class="areas' + id + '"><table id="' + id + '" class="table table-bordered table-hover"><thead><tr><th>Áreas</th></tr></thead>';
        listaAreas += '<tbody>';

        for (var ba in idBigArea) {
            listaAreas += '<tr><td><input type="checkbox" name="areas[]" value="' + idBigArea[ba].id + '">' + idBigArea[ba].name + '</td></tr>';
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


$(document).on('click', '#big-area-research', function () {
    var id = event.target.id;
    var idBigArea = $("#" + id).val();

    $.ajax({
        url: urlBase + "areas/" + idBigArea,
        method: "GET",
        data: idBigArea
    }).done(function (idBigArea) {

        id = idBigArea[0].big_area_id;

        listaAreas = '<div class="areas-reseacher' + id + '"><table id="' + id + '" class="table table-bordered table-hover"><thead><tr><th>Áreas</th></tr></thead>';
        listaAreas += '<tbody>';

        for (var ba in idBigArea) {
            listaAreas += '<tr><td><input type="checkbox" name="areas[]" value="' + idBigArea[ba].id + '">' + idBigArea[ba].name + '</td></tr>';
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
    $('#' + id).DataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"]],
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
    });
}


$('.btnNext').click(function () {
    $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

$('.btnPrevious').click(function () {
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});


function pesquisadoresIteressados() {
    var checkeds = new Array();
    $("input[name='areas[]']:checked").each(function () {
        // valores inteiros usa-se parseInt
        checkeds.push(parseInt($(this).val()));
        // string
        // checkeds.push( $(this).val());

    });

    checkeds = checkeds.toString();

    $.ajax({
        url: urlBase + "listar-interessados-edital/" + '%5B' + checkeds + '%5D',
        method: "GET",
    }).done(function (checkeds) {

        console.log(checkeds);

        listaInteressados = '<table id="tabela-pesquisadores" class="table table-bordered table-hover"><thead><tr><th>Pesquisadores interessados</th></tr></thead>';
        listaInteressados += '<tbody>';
        for (var i in checkeds) {
            listaInteressados += '<tr><td><input type="checkbox" name="pesquisadores[]" id="pesquisadores" value="' + checkeds[i].id + '" checked> ' + checkeds[i].name + '</td></tr>';
        }
        listaInteressados += '<tbody>';

        if ($('#tabela-pesquisadores').length) {
            $('#tabela-pesquisadores').replaceWith(listaInteressados);
        } else {
            $('#pesquisadores-interessados').append(listaInteressados);
        }
    });
}

function updateAreas() {
    if (confirm("Tem certeza que deseja alterar?  As áreas atualmente selecionadas, serão removidas!")){
        $('#areas-edital').remove();
        $('#alterar').remove();
        $('#update-areas').css('display', 'block');
    }

}

$(document).ready(function() {
    $('#usuarios-propi').DataTable();
    $('#usuarios-pesquisador').DataTable();
} );

