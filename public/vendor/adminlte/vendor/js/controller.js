function teste() {
    $('#title').css('display','block');
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

        listaAreas = '<tbody id="'+id+'" style="display: block"></tbody>';

        if($('#'+idBigArea[0].big_area_id).length){

        } else{
            $('#tabela-areas').append(listaAreas);
        }

        console.log(idBigArea);

    });
});

