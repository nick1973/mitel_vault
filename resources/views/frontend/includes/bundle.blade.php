<h4><strong>Selecting Your base Bundle:</strong></h4>
<h4><strong>Please select form the following options:</strong></h4>

<form id="bundle_post" class="form-horizontal" action="/bundle_post">
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Please select the type of lines
                you require:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
                <select class="form-control" name="line_type">
                    <option>Select</option>
                    <option value="bri">BRI</option>
                    <option value="pri">PRI</option>
                    <option value="sip">SIP</option>
                </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Analogue" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Please select the number of users
                you require:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
                <input id="line_qty" class="form-control" type="number" name="users" value="0" min="0" required>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="SIP" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Please confirm if you wish BT to
                supply the LAN switch:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
                <select id="lan" class="form-control" name="lan" required>
                    <option></option>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="BRI/ISDN2" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>
    </div>
</form>
<br/>
<div class="col-lg-offset-6">
    <button id="but" class="btn btn-warning">Find my BT Bundle</button>
</div>
<br/>

<div id="chosen_bundle" class="col-md-12 col-lg-12 hidden">

    <h4><strong>My BT Bundle Comprises of the following:-</strong></h4>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-4 control-label">BT Bundle Name:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-7">
                <input class="form-control bundle_name" disabled>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Analogue" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>
    <br/>
    <br/>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 col-lg-2 col-md-4 control-label">BRI lines:</label>

            <div class="col-xs-7 col-sm-5 col-md-2 col-lg-1">
                <input id="" class="form-control bundle_bri_lines" disabled>
            </div>
            <label for="inputEmail3" class="col-sm-4 col-lg-2 col-md-1 control-label">PRI lines:</label>

            <div class="col-lg-1 col-md-3">
                <input id="" class="form-control bundle_pri_lines" disabled>
            </div>
            <label for="inputEmail3" class="col-sm-4 col-lg-2 col-md-1 control-label">SIP lines:</label>

            <div class="col-lg-1 col-md-2">
                <input id="" class="form-control bundle_sip_lines" disabled>
            </div>
            <label for="inputEmail3" class="col-sm-4 col-lg-2 col-md-1 control-label">Analogue lines:</label>

            <div class="col-lg-1 col-md-2">
                <input id="" class="form-control bundle_analogue_lines" disabled>
            </div>
        </div>
    <br/>
    <br/>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 col-lg-3 col-md-4 control-label">Standard User License:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-1">
                <input id="" class="form-control bundle_standard_license" disabled>
            </div>
            <label for="inputEmail3" class="col-sm-4 col-lg-3 col-md-1 control-label">Multi Device User License:</label>

            <div class="col-lg-1 col-md-2">
                <input id="" class="form-control bundle_multi_license" disabled>
            </div>
            <label for="inputEmail3" class="col-sm-4 col-lg-3 col-md-1 control-label">Voicemail User License:</label>

            <div class="col-lg-1 col-md-2">
                <input id="" class="form-control bundle_vm_license" disabled>
            </div>
        </div>
    <br/>
    <br/>

    <div class="form-group">
        <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label col-lg-3">BT Supplied LAN Ports:</label>

        <div class="col-lg-1 col-md-2">
            <input id="" class="form-control bundle_ports" disabled>
        </div>
        <div id="upgrade_button">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label col-lg-3">Base Bundle Additions:</label>

            <div class="col-lg-1 col-md-2">
                <input id="bundle_additions" class="form-control" value="Yes" disabled>
            </div>
            <i class="fa fa-plus-circle fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
               data-toggle="modal" data-target="#bundle_upgrades_model"></i>
        </div>
    </div>
    <div class="col-lg-1 col-md-2">
        <button onclick="confirm_bundle()" class="btn btn-info">Add to quote</button>
    </div>

</div>

<div class="modal fade" id="bundle_upgrades_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Bundle Upgrades</h3>
            </div>
            <div class="modal-body">
                <ul id="bundle_upgrades"></ul>
                <div class="col-lg-2">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#lan").click(function () {
        if ($("#lan").val() == 'no') {
            $("#confirm_lan_no").hide();
            $("#confirm_lan_yes").show();
        }
        else {
            $("#confirm_lan_no").show();
            $("#confirm_lan_yes").hide();
        }
    });
</script>




