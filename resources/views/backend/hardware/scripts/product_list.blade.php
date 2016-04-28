<script>


    $("#rReservation").change(function () {

        if ($(this).children(":selected").attr("id") == 1) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[0]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[0]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[0]['bonus'] }}');
            input.trigger('input');
        }

        else if ($(this).children(":selected").attr("id") == 2) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[1]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[1]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[1]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 3) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[2]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[2]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[2]['bonus'] }}');
            input.trigger('input');
        }
        //Music / Messaging On Hold
        //Music On Hold:
        else if ($(this).children(":selected").attr("id") == 4) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[3]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[3]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[3]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 5) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[4]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[4]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[4]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 6) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[5]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[5]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[5]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 7) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[6]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[6]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[6]['bonus'] }}');
            input.trigger('input');
        }
        //Message On Hold:
        else if ($(this).children(":selected").attr("id") == 8) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[7]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[7]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[7]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 9) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[8]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[8]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[8]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 10) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[9]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[9]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[9]['bonus'] }}');
            input.trigger('input');
        }
        //Managed MOH / Message On Hold:
        else if ($(this).children(":selected").attr("id") == 11) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[10]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[10]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[10]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 12) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[11]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[11]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[11]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 13) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[12]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[12]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[12]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 14) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[13]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[13]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[13]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 15) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[14]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[14]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[14]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 16) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[15]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[15]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[15]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 17) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[16]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[16]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[16]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 18) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[17]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[17]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[17]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 19) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[18]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[18]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[18]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 20) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[19]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[19]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[19]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 21) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[20]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[20]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[20]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 22) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[21]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[21]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[21]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 23) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[22]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[22]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[22]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 24) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[23]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[23]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[23]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 25) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[24]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[24]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[24]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 26) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[25]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[25]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[25]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 27) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[26]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[26]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[26]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 28) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[27]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[27]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[27]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 29) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[28]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[28]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[28]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 30) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[29]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[29]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[29]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 31) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[30]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[30]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[30]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 32) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[31]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[31]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[31]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 33) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[32]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[32]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[32]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 34) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[33]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[33]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[33]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 35) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[34]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[34]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[34]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 36) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[35]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[35]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[35]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 37) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[36]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[36]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[36]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 38) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[37]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[37]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[37]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 39) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[38]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[38]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[38]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 40) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[39]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[39]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[39]['bonus'] }}');
            input.trigger('input');
        }
//////////////////////////////////////////////////////////////////////////////////
        else if ($(this).children(":selected").attr("id") == 41) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[40]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[40]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[40]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 42) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[41]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[41]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[41]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 43) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[42]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[42]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[42]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 44) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[43]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[43]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[43]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 45) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[44]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[44]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[44]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 46) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[45]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[45]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[45]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 47) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[46]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[46]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[46]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 48) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[47]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[47]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[47]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 49) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[48]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[48]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[48]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 50) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[49]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[49]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[49]['bonus'] }}');
            input.trigger('input');
        }
//////////////////////////////////////////////////////////////////////////////
        else if ($(this).children(":selected").attr("id") == 51) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[50]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[50]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[50]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 52) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[51]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[51]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[51]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 53) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[52]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[52]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[52]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 54) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[53]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[53]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[53]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 55) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[54]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[54]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[54]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 56) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[55]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[55]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[55]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 57) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[56]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[56]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[56]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 58) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[57]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[57]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[57]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 59) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[58]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[58]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[58]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 50) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[49]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[49]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[49]['bonus'] }}');
            input.trigger('input');
        }
        ////////////////////////////////////////////////////////////////////////////////////////////
        else if ($(this).children(":selected").attr("id") == 61) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[60]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[60]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[60]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 62) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[61]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[61]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[61]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 63) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[62]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[62]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[62]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 64) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[63]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[63]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[63]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 65) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[64]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[64]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[64]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 66) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[65]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[65]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[65]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 67) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[66]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[66]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[66]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 68) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[67]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[67]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[67]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 69) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[68]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[68]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[68]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 70) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[69]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[69]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[69]['bonus'] }}');
            input.trigger('input');
        }
        /////////////////////////////////////////////////////////////////////
        else if ($(this).children(":selected").attr("id") == 71) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[70]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[70]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[70]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 72) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[71]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[71]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[71]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 73) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[72]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[72]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[72]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 74) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[73]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[73]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[73]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 75) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[74]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[74]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[74]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 76) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[75]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[75]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[75]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 77) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[76]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[76]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[76]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 78) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[77]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[77]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[77]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 79) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[78]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[78]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[78]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 80) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[79]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[79]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[79]['bonus'] }}');
            input.trigger('input');
        }
        ///////////////////////////////////////////////////////////////////////////////
        else if ($(this).children(":selected").attr("id") == 81) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[80]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[80]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[80]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 82) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[81]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[81]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[81]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 83) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[82]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[82]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[82]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 84) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[83]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[83]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[83]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 85) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[84]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[84]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[84]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 86) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[85]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[85]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[85]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 87) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[86]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[86]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[86]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 88) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[87]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[87]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[87]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 89) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[88]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[88]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[88]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 90) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[89]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[89]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[89]['bonus'] }}');
            input.trigger('input');
        }
        /////////////////////////////////////////////////////////////
        else if ($(this).children(":selected").attr("id") == 91) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[90]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[90]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[90]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 92) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[91]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[91]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[91]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 93) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[92]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[92]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[92]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 94) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[93]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[93]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[93]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 95) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[94]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[94]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[94]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 96) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[95]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[95]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[95]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 97) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[96]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[96]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[96]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 98) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[97]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[97]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[97]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 99) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[98]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[98]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[98]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 100) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[99]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[99]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[99]['bonus'] }}');
            input.trigger('input');
        }
        /////////////////////////////////////////////////////////////////////
        else if ($(this).children(":selected").attr("id") == 101) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[100]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[100]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[100]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 102) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[101]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[101]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[101]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 103) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[102]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[102]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[102]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 104) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[103]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[103]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[103]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 105) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[104]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[104]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[104]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 106) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[105]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[105]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[105]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 107) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[106]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[106]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[106]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 108) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[107]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[107]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[107]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 109) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[108]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[108]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[108]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 110) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[109]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[109]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[109]['bonus'] }}');
            input.trigger('input');
        }
        /////////////////////////////////////////////////////////
        else if ($(this).children(":selected").attr("id") == 111) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[110]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[110]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[110]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 112) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[111]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[111]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[111]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 113) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[112]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[112]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[112]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 114) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[113]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[113]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[113]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 115) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[114]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[114]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[114]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 116) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[115]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[115]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[115]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 117) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[116]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[116]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[116]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 118) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[117]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[117]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[117]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 119) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[118]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[118]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[118]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 120) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[119]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[119]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[119]['bonus'] }}');
            input.trigger('input');
        }
        //////////////////////////////////////////////////////////
        else if ($(this).children(":selected").attr("id") == 121) {
            var input = $('#b_codes');
            input.val('{{ $b_bonds[120]['codes'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#eup');
            input.val('{{ $b_bonds[120]['eup'] }}');
            input.trigger('input');
            /////////////////////////
            var input = $('#bonusBond');
            input.val('{{ $b_bonds[120]['bonus'] }}');
            input.trigger('input');
        }
        else if ($(this).children(":selected").attr("id") == 122) {
                var input = $('#b_codes');
                input.val('{{ $b_bonds[121]['codes'] }}');
                input.trigger('input');
                /////////////////////////
                var input = $('#eup');
                input.val('{{ $b_bonds[121]['eup'] }}');
                input.trigger('input');
                /////////////////////////
                var input = $('#bonusBond');
                input.val('{{ $b_bonds[121]['bonus'] }}');
                input.trigger('input');
            }
    });
    //    }


</script>