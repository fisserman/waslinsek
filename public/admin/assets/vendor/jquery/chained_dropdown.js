$(document).ready(function() {

    $('select[name="prinas"]').on('change', function(){
        var prinasid = $(this).val();
        if(prinasid) {
            $.ajax({
                url: 'program/getProgram/'+prinasid,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {
    
                    $('select[name="program"]').empty();

                    $('select[name="program"]').append('<option value="">--Select Program Prioritas--</option>');
    
                    $.each(data, function(key, value){
    
                        $('select[name="program"]').append('<option value="'+ key +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="program"]').empty();
        }
    
    });

    $('select[name="program"]').on('change', function(){
        var programid = $(this).val();
        if(programid) {
            $.ajax({
                url: 'program/getKegiatan/'+programid,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {
    
                    $('select[name="kegiatan"]').empty();

                    $('select[name="kegiatan"]').append('<option value="">--Select Kegiatan Prioritas--</option>');
    
                    $.each(data, function(key, value){
    
                        $('select[name="kegiatan"]').append('<option value="'+ key +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="kegiatan"]').empty();
        }
    
    });

    $('select[name="prinas"]').on('change', function(){
        var prinasid = $(this).val();
        if(prinasid) {
            $.ajax({
                url: '/getProgram/'+prinasid,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {
    
                    $('select[name="program"]').empty();

                    $('select[name="program"]').append('<option value="">--Select Program Prioritas--</option>');
    
                    $.each(data, function(key, value){
    
                        $('select[name="program"]').append('<option value="'+ key +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="program"]').empty();
        }
    
    });

    $('select[name="program"]').on('change', function(){
        var programid = $(this).val();
        if(programid) {
            $.ajax({
                url: '/getKegiatan/'+programid,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {
    
                    $('select[name="kegiatan"]').empty();

                    $('select[name="kegiatan"]').append('<option value="">--Select Kegiatan Prioritas--</option>');
    
                    $.each(data, function(key, value){
    
                        $('select[name="kegiatan"]').append('<option value="'+ key +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="kegiatan"]').empty();
        }
    
    });

        $('select[name="kegiatan"]').on('change', function(){
        var kegiatanid = $(this).val();
        if(kegiatanid) {
            $.ajax({
                url: '/getSasaranKegiatan/'+kegiatanid,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {
    
                    $('select[name="sasaran_kp"]').empty();

                    $('select[name="sasaran_kp"]').append('<option value="">--Select Sasaran Kegiatan Prioritas--</option>');
    
                    $.each(data, function(key, value){
    
                        $('select[name="sasaran_kp"]').append('<option value="'+ key +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="sasaran_kp"]').empty();
        }
    
    });

    $('select[name="kegiatan"]').on('change', function(){
        var kegiatanid = $(this).val();
        if(kegiatanid) {
            $.ajax({
                url: '/getSasaranProgram/'+kegiatanid,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {
    
                    $('select[name="sasaran_pp"]').empty();

                    $('select[name="sasaran_pp"]').append('<option value="">--Select Sasaran Program Prioritas--</option>');
    
                    $.each(data, function(key, value){
    
                        $('select[name="sasaran_pp"]').append('<option value="'+ key +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="sasaran_pp"]').empty();
        }
    
    });

    $('select[name="provinsi"]').on('change', function(){
        var provinsiId = $(this).val();
        if(provinsiId) {
            $.ajax({
                url: 'wilayah/getKabupaten/'+provinsiId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {
    
                    $('select[name="kabupaten"]').empty();

                    $('select[name="kabupaten"]').append('<option value="">--Select Kabupaten--</option>');
    
                    $.each(data, function(key, value){
    
                        $('select[name="kabupaten"]').append('<option value="'+ key +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="kabupaten"]').empty();
        }
    
    });
    
    $('select[name="kabupaten"]').on('change', function(){
        var kabupatenId = $(this).val();
        if(kabupatenId) {
            $.ajax({
                url: 'wilayah/getKecamatan/'+kabupatenId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {
    
                    $('select[name="kecamatan"]').empty();

                    $('select[name="kecamatan"]').append('<option value="">--Select Kecamatan--</option>');
    
                    $.each(data, function(key, value){
    
                        $('select[name="kecamatan"]').append('<option value="'+ key +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="kecamatan"]').empty();
        }
    
    });

    $('select[name="urusan"]').on('change', function(){
        var urusanid = $(this).val();
        if(urusanid) {
            $.ajax({
                url: 'wilayah/getBidang/'+urusanid,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {
    
                    $('select[name="bidang"]').empty();

                    $('select[name="bidang"]').append('<option value="">--Select Bidang--</option>');
    
                    $.each(data, function(key, value){
    
                        $('select[name="bidang"]').append('<option value="'+ key +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="bidang"]').empty();
        }
    
    });

    $('select[name="bidang"]').on('change', function(){
        var bidangid = $(this).val();
        if(bidangid) {
            $.ajax({
                url: 'wilayah/getUnit/'+bidangid,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {
    
                    $('select[name="unit"]').empty();

                    $('select[name="unit"]').append('<option value="">--Select Unit--</option>');
    
                    $.each(data, function(key, value){
    
                        $('select[name="unit"]').append('<option value="'+ key +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="unit"]').empty();
        }
    
    });
    
    $('select[name="unit"]').on('change', function(){
        var unitid = $(this).val();
        if(unitid) {
            $.ajax({
                url: 'wilayah/getSubunit/'+unitid,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {
    
                    $('select[name="subunit"]').empty();

                    $('select[name="subunit"]').append('<option value="">--Select Sub Unit--</option>');

                    $.each(data, function(key, value){
    
                        $('select[name="subunit"]').append('<option value="'+ key +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="subunit"]').empty();
        }
    
    });
    $('select[name="provinsi"]').on('change', function(){
        var provinsiId = $(this).val();
        if(provinsiId) {
            $.ajax({
                url: '/pelaksanaan/getKabupaten/'+provinsiId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {
    
                    $('select[name="kabupaten"]').empty();

                    $('select[name="kabupaten"]').append('<option value="">--Select Kabupaten--</option>');
    
                    $.each(data, function(key, value){
    
                        $('select[name="kabupaten"]').append('<option value="'+ value +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="kabupaten"]').empty();
        }
    
    });

    $('select[name="sasaran"]').on('change', function(){
        var sasaranId = $(this).val();
        if(sasaranId) {
            $.ajax({
                url: '/pelaksanaan/getSasaran/'+sasaranId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {
    
                    $('select[name="indikator"]').empty();

                    $('select[name="indikator"]').append('<option value="">--Select Indikator PP--</option>');
    
                    $.each(data, function(key, value){
    
                        $('select[name="indikator"]').append('<option value="'+ key +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="indikator"]').empty();
        }
    
    });

    $('select[name="indikator"]').on('change', function(){
        var indikatorId = $(this).val();
        if(indikatorId) {
            $.ajax({
                url: '/pelaksanaan/getUsia/'+indikatorId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {

                    $('select[name="usia"]').empty();
    
                    $.each(data, function(key, value){
    
                        $('select[name="usia"]').append('<option value="'+ value +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="usia"]').empty();
        }
    
    });

    $('select[name="indikator"]').on('change', function(){
        var indikatorId = $(this).val();
        if(indikatorId) {
            $.ajax({
                url: '/pelaksanaan/getTarget/'+indikatorId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },
    
                success:function(data) {

                    $('select[name="target"]').empty();
    
                    $.each(data, function(key, value){
    
                        $('select[name="target"]').append('<option value="'+ value +'">' + value + '</option>');
    
                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="target"]').empty();
        }
    
    });

});
	

