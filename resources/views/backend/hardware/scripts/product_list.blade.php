
<script>

    $("#rReservation").change(function () {
        var id = $(this).children(":selected").attr("id");
        var x = id - 1;
        var js_array = <?php echo json_encode($json );?>;
        //console.log(js_array[x]['supplier_ref']);

        var input = $('#b_codes');
        input.val(js_array[x]['supplier_ref']);
        input.trigger('input');
        /////////////////////////
        var input = $('#eup');
        input.val(js_array[x]['bt_ref']);
        input.trigger('input');
        /////////////////////////
        var input = $('#bonusBond');
        input.val(js_array[x]['xfer']);
        input.trigger('input');
    });

</script>