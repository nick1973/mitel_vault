
<script>

    $("#rReservation").change(function () {
        var id = $(this).children(":selected").attr("id");
        var x = id - 1;
        var js_array = <?php echo json_encode($json );?>;
        //console.log(js_array[x]['supplier_ref']);

        var input = $('#b_codes');
        input.val('test');
        input.trigger('input');
        /////////////////////////
        var input2 = $('#eup');
        input2.val(js_array[x]['bt_ref']);
        input2.trigger('input');
        /////////////////////////
        var input3 = $('#bonusBond');
        input3.val(js_array[x]['xfer']);
        input3.trigger('input');
    });

</script>