$(document).ready(function() {
    var table = $('#example').DataTable( {

        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        },
        "order": [[ 0, "asc" ]],
        "ajax": "/admin/product_management/test",
        "pagingType": "full_numbers",
        "columns": [
            { "data": "name" },
            { "data": "vendor_ref" },
            { "data": "bt_ref" },
            { "data": "btbuy" },
            { "data": "eup" },
            { "data": "max_discount" },
            { "data": "quote_type" },
            { "data": "pbx_ref" },
            { "data": "category_ref" },
            { "data": "one_yr_standard_care" },
            { "data": "one_yr_prompt_care" },
            { "data": "one_yr_total_care" },
            { "data": "three_yr_standard_care" },
            { "data": "three_yr_prompt_care" },
            { "data": "three_yr_total_care" },
            { "data": "five_yr_standard_care" },
            { "data": "five_yr_prompt_care" },
            { "data": "five_yr_total_care" },
            { "data": function (data) {
                return '<a href="/admin/product_management/' + data.id + '/edit" class="btn btn-success">Edit</a>';
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
            'copy','excel', 'print']
    });

///////////////////////////////////////////////
/////////////////////////////////////////////////


} );

