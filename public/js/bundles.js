$(document).ready(function () {
    var fre = $('#bundles').DataTable({

        initComplete: function () {
            this.api().columns().every(function () {
                var column = this;
                var select = $('<select class="form-control"><option value=""></option></select>')
                    .appendTo($(column.footer()).empty())
                    .on('change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
                        column
                            .search(val ? '^' + val + '$' : '', true, false)
                            .draw();
                    });
                column.data().unique().sort().each(function (d, j) {
                    select.append('<option value="' + d + '">' + d + '</option>')
                });
            });
        },
        "order": [[0, "asc"]],
        "ajax": "/admin/bundles",
        "pagingType": "full_numbers",
        "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]],
        "columns": [
            {"data": "name"},
            {"data": "line_type"},
            {"data": "analogue_lines"},
            {"data": "bri_lines"},
            {"data": "pri_lines"},
            {"data": "sip_lines"},
            {"data": "users"},
            {"data": "standard_license"},
            {"data": "multi_user_license"},
            {"data": "vm_license"},


            {"data": "lan_ports"},
            {"data": "supplier_ref"},
            {"data": "bt_ref"},
            {"data": "item_code"},
            {"data": "btbuy"},
            {"data": "bteup"},
            {"data": "discount_status"},
            {"data": "max_discount"},
            {"data": "one_yr_standard_care"},
            {"data": "one_yr_prompt_care"},
            {"data": "one_yr_total_care"},
            {"data": "three_yr_standard_care"},
            {"data": "three_yr_prompt_care"},
            {"data": "three_yr_total_care"},
            {"data": "five_yr_standard_care"},
            {"data": "five_yr_prompt_care"},
            {"data": "five_yr_total_care"},
            {
                "data": function (data) {
                    return '<a href="/admin/product_management/mivb_bundles/' + data.id + '/build" class="btn btn-success">Build</a>';
                }
            },
            {
                "data": function (data) {
                    return '<a href="/admin/product_management/mivb_bundles/' + data.id + '/edit" class="btn btn-primary">Edit</a>';
                }
            }
        ],
        dom: '<"top"Blf>rT<"bottom"p><"clear">',
        //dom: 'B<lf<t>ip>',
        buttons: [{
            extend: 'pdfHtml5',
            orientation: 'landscape',
            pageSize: 'LEGAL'
        },
            'copy', 'excel', 'print']
    });

///////////////////////////////////////////////
/////////////////////////////////////////////////


});

