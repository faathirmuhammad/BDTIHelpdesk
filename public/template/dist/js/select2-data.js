/* Select2 Init*/
"use strict";
$(".select2").select2();
$("#input_tags").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});

$('.select3').select2({
    placeholder: 'Search',
    minimumInputLength: 3,
    ajax: {
        url: '/ajax/auto_petugas',
        dataType: 'json',
        delay: 250,
        data: function (params) {
            return {
                q: $.trim(params.term)
            };
        },
        processResults: function (data) {
            return {
                results:  $.map(data, function (item) {
                    return {
                        text: item.nama,
                        id: item.id
                    }
                })
            };
        },
        cache: true
    }
});

$("#input_tags_3").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});