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

        listaAreas = '<table id="' + id + '" class="table table-bordered table-hover"><thead><tr><th>Áreas</th></tr></thead>';
        listaAreas += '<tbody>';

        for (var ba in idBigArea) {
            listaAreas += '<tr><td><input type="checkbox" name="areas[]" id="areas-0"value="' + idBigArea[ba].id + '">' + idBigArea[ba].name + '</td></tr>';
        }
        listaAreas += '</tbody>';
        listaAreas += '</table>';

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
    $('#'+id).DataTable();
}







