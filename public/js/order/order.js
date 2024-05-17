$(document).ready(function() {
    $('#table-unconfirm').hide();
    $('#table-confirmed').show();

    $('#tab-order-confirmed').click(function() {
        $('#table-confirmed').show();
        $('#table-unconfirm').hide();
    });
    $('#tab-order-unconfirm').click(function() {
        $('#table-confirmed').hide();
        $('#table-unconfirm').show();
    });
});