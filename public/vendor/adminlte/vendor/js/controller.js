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

        listaAreas = '<tbody id="' + id + '">';

        for (var ba in idBigArea) {
            listaAreas += '<tr><td><input type="checkbox" name="areas[]" id="areas-0"value="' + idBigArea[ba].id + '">' + idBigArea[ba].name + '</td></tr>';
        }
        listaAreas += '</tbody>';

        if ($('#' + idBigArea[0].big_area_id).length) {
            $('tbody').hide();
            $('#' + id).show();
        }

        else {
            $('#tabela-areas').append(listaAreas);
            $('tbody').hide();
            $('#' + id).show();
        }

    });
});



