$(document).on('click', '.pilih', function (e) {

    document.getElementById("motor").value = $(this).attr('data-motor');

    document.getElementById("harga_motor").innerHTML = $(this).attr('data-harga_motor');

    document.getElementById("angka_motor").value = $(this).attr('data-angka_motor');

    $('#menu_motor').modal('hide');

});