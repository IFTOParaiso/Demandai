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




        console.log(idBigArea);

    });
});

