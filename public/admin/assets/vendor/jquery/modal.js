$(document).ready(function() {

    $(document).on('click','.edit-tim', function() {
    var id = $(this).data('id');
    var nip = $(this).data('nip');
    var nama = $(this).data('pegawai');
    var kedudukan = $(this).data('kedudukan');
    var jabatan = $(this).data('jabatan');
    var kode_tim = $(this).data('kode_tim');
    $('.modal-body #id').val(id);
    $('.modal-body #nip').val(nip);
    $('.modal-body #nama_pegawai').val(nama);
    $('.modal-body #kedudukan').val(kedudukan);
    $('.modal-body #jabatan').val(jabatan);
    $('.modal-body #kode_tim').val(kode_tim);

});

    $(document).on('click','.edit-st', function() {
    var id = $(this).data('id');
    var no_st = $(this).data('no_st');
    var tgl_st = $(this).data('tgl_st');
    var hari_penugasan = $(this).data('hari_penugasan');
    var tgl_mulai = $(this).data('tgl_mulai');
    var tgl_selesai = $(this).data('tgl_selesai');
    var tugas = $(this).data('tugas');
    var file = $(this).data('file');
    $('.modal-body #id').val(id);
    $('.modal-body #no_st').val(no_st);
    $('.modal-body #tgl_st').val(tgl_st);
    $('.modal-body #hari_penugasan').val(hari_penugasan);
    $('.modal-body #tgl_mulai').val(tgl_mulai);
    $('.modal-body #tgl_selesai').val(tgl_selesai);
    $('.modal-body #tugas').val(tugas);
    $('.modal-body #file').val(file);

});

$(document).on('click','.idk-pp', function() {
    var id = $(this).data('id');
    var nama_idk_pp = $(this).data('nama_idk_pp');
    var stn_idk_pp = $(this).data('stn_idk_pp');
    var tgt_idk_pp = $(this).data('tgt_idk_pp');
    var ktr_idk_pp = $(this).data('ktr_idk_pp');
    $('.modal-body #id').val(id);
    $('.modal-body #nama_idk_pp').val(nama_idk_pp);
    $('.modal-body #stn_idk_pp').val(stn_idk_pp);
    $('.modal-body #tgt_idk_pp').val(tgt_idk_pp);
    $('.modal-body #ktr_idk_pp').val(ktr_idk_pp);

});

$(document).on('click','.idk-kp', function() {
    var id = $(this).data('id');
    var nama_idk_kp = $(this).data('nama_idk_kp');
    var stn_idk_kp = $(this).data('stn_idk_kp');
    var tgt_idk_kp = $(this).data('tgt_idk_kp');
    var ktr_idk_kp = $(this).data('ktr_idk_kp');
    $('.modal-body #id').val(id);
    $('.modal-body #nama_idk_kp').val(nama_idk_kp);
    $('.modal-body #stn_idk_kp').val(stn_idk_kp);
    $('.modal-body #tgt_idk_kp').val(tgt_idk_kp);
    $('.modal-body #ktr_idk_kp').val(ktr_idk_kp);

});

$(document).on('click','.cek-pemda', function() {
    var id = $(this).data('id');
    var kriteria = $(this).data('kriteria');
    var pertimbangan = $(this).data('pertimbangan');
    var kesimpulan = $(this).data('kesimpulan');
    $('.modal-body #id').val(id);
    $('.modal-body #kriteria').val(kriteria);
    $('.modal-body #pertimbangan').val(pertimbangan);
    $('.modal-body #kesimpulan').val(kesimpulan);

});

$(document).on('click','.editModal', function() {
    var id = $(this).data('id');
    var nip = $(this).data('nip');
    var nama = $(this).data('nama');
    var kedudukan = $(this).data('kedudukan');
    var jabatan = $(this).data('jabatan');
    var kode_tim = $(this).data('kode_tim');
    $('.modal-body #id').val(id);
    $('.modal-body #nip').val(nip);
    $('.modal-body #nama_pegawai').val(nama);
    $('.modal-body #kedudukan').val(kedudukan);
    $('.modal-body #jabatan').val(jabatan);
    $('.modal-body #kode_tim').val(kode_tim);
  });

});
