$(document).ready(function() {
    // untuk menampilkan edit
    $('.btn-edit').click(function() {
        var id = $(this).data('id');
        $.ajax({
            url: '/admin/karyawan/edit-karyawan/' + id,
            type: 'GET',
            success: function(response) {
                console.log(response);
                $('#edit-karyawan-modal #id').val(response.id);
                $('#edit-karyawan-modal #name').val(response.name);
                $('#edit-karyawan-modal #no_telp').val(response.no_telp);
                $('#edit-karyawan-modal #email').val(response.email);
                $('#edit-karyawan-modal #jenis_kelamin').val(response.jenis_kelamin);
                $('#edit-karyawan-modal #tanggal_lahir').val(response.tanggal_lahir);
                $('#edit-karyawan-modal #tempat_lahir').val(response.tempat_lahir);
            },
            error: function(xhr) {
                console.log('error');
                console.log(xhr.responseText);
            }
        });
    });

    // untuk melakukan update data
    $('#form-edit-karyawan').submit(function(e) {
        e.preventDefault();
        var id = $('#edit-karyawan-modal #id').val();
        var actionUrl = '/admin/karyawan/update-karyawan/' + id;
        $(this).attr('action', actionUrl);
        this.submit();
    })

    // untuk menutup modal
    $('.close').click(function() {
        $('#edit-karyawan-modal').hide();
    });
});