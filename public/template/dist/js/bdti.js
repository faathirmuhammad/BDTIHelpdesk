$(document).ready(function(){
    //AJAX INITIATE
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //TAMBAH TIKET
    $("#tambah_jenis_tiket").on("change", function () {
        var selected_jenis = $(this).children("option:selected").val();
        if(selected_jenis == "1"){
            $(".tambah_form_dinas").fadeIn();
            $(".tambah_form_dinas").prop("required", true);
        }else{
            $(".tambah_form_dinas").hide();
            $(".tambah_form_dinas").prop("required", false);
        }
    })

    $("#tambah_kategori_kasus").on("change", function () {
        var selected_kategori = $(this).children("option:selected").val();
        if(selected_kategori == "1"){
            $(".tambah_barang").fadeIn();
            $(".tambah_barang").prop('required', true);
        }else{
            $(".tambah_barang").hide();
            $(".tambah_barang").prop('required', false);
        }
    })

    $("#tambah_kategori_kasus").on("change", function () {
        var selected_kategori = $(this).children("option:selected").val();
        if(selected_kategori == "Lain-lain"){
            $(".tambah_kategori").fadeIn();
            $(".tambah_kategori").prop('required', true);
        }else{
            $(".tambah_kategori").hide();
            $(".tambah_kategori").prop('required', false);
        }
    })

    $("#tambah_pelapor").on("change", function () {
        var selected_pelapor = $(this).children("option:selected").val();
        if(selected_pelapor == "Pegawai" || selected_pelapor == "Anggota"){
            $(".tambah_namanyaa").removeAttr("required");
            $("#tambah_nama_input").hide();

            $("#tambah_nama_select").fadeIn();
            $(".tambah_nama").prop("required", true);

            $(".tambah_nama").empty();
            $("#tambah_fraksi").val('')
            $("#tambah_gedung").val('')
            $("#tambah_lantai").val('')
            $("#tambah_ruangan").val('')
            $("#tambah_telepon").val('')

            $(".tambah_nama").append('<option selected class="bg-dark-100 text-white" disabled></option>');
            $.ajax({
                type:'POST',
                url:'/ajax/list_pelapor',
                data:{
                    pelapor: selected_pelapor
                },
                success:function(data){
                    var response = JSON.parse(data);
                    // console.log(response.length);
                    for(var x = 0; x<response.length; x++){
                        $(".tambah_nama").append('<option value="'+response[x]["id"]+'">'+response[x]["nama"]+'</option>');
                    }
                }
            });
        }else{
            $("#tambah_nama_select").hide();
            $(".tambah_nama").removeAttr("required")

            $("#tambah_nama_input").fadeIn();
            $(".tambah_namanyaa").prop("required", true);

            $("#tambah_fraksi").val('')
            $("#tambah_fraksi").removeAttr('readonly');
            $("#tambah_gedung").val('')
            $("#tambah_gedung").removeAttr('readonly');
            $("#tambah_lantai").val('')
            $("#tambah_lantai").removeAttr('readonly');
            $("#tambah_ruangan").val('')
            $("#tambah_ruangan").removeAttr('readonly');
            $("#tambah_telepon").val('')
            $("#tambah_telepon").removeAttr('readonly');
        }
    })

    $(".tambah_nama").on("change", function () {
        var selected_nama = $(this).children("option:selected").val();
        var selected_pelapor = $("#tambah_pelapor").children("option:selected").val();
        console.log(selected_nama);
        $.ajax({
            type:'POST',
            url:'/ajax/list_nama',
            data:{
                id: selected_nama,
                pelapor: selected_pelapor
            },
            success:function(data){
                var response = JSON.parse(data);
                console.log(response);
                $("#tambah_fraksi").val(response["fraksi"])
                $("#tambah_fraksi").prop("readonly", true)
                $("#tambah_gedung").val(response["gedung"])
                $("#tambah_gedung").prop("readonly", true)
                $("#tambah_lantai").val(response["lantai"])
                $("#tambah_lantai").prop("readonly", true)
                $("#tambah_ruangan").val(response["ruang"])
                $("#tambah_ruangan").prop("readonly", true)
                $("#tambah_telepon").val(response["telp"])
                $("#tambah_telepon").prop("readonly", true)
            }
        });
    })

    $(".tambah_barang").on("change", function () {
        var jumlah = $(this).children("option:selected").data("value");
        $(".jumlah_barang").prop('max',jumlah);
        $("#jumlah_maksimum").text(jumlah);
    })

    //VIEW TIKET

    $("#view_tiket_status").on("change", function () {
        var status = $(this).children("option:selected").val();
        var id = $(this).data("value");

        if(status == 4){
            $("#closed").modal("show");
        }else{
            $.ajax({
                type:'POST',
                url:'/ajax/ganti_status',
                data:{
                    id: id,
                    statusnya: status
                },
                success:function(data){
                    var response = JSON.parse(data);
                    console.log(response);
                }
            });
        }

    })

    //MISC

    $(".number_only").keydown(function(event) {
        // Allow only backspace and delete
        if ( event.keyCode == 46 || event.keyCode == 8 ) {
            // let it happen, don't do anything
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.keyCode < 48 || event.keyCode > 57 ) {
                event.preventDefault();
            }
        }
    });

    $(".space_disable").keypress(function (evt) {

        var keycode = evt.charCode || evt.keyCode;
        if (keycode  == 32) {
            return false;
        }
    });

})

