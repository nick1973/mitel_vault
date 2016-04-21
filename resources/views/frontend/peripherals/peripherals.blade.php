<script>

    function visible() {
        if ($("#periph").prop('checked') == true) {
            $("#peripherals-show").show().removeClass('animated fadeOut').addClass('animated fadeIn');
        }
        else if ($("#periph").prop('checked') == false) {
            $("#peripherals-show").removeClass('animated fadeIn').addClass('animated fadeOut', function () {
                $("#peripherals-show").hide();
            });
        }
    }
</script>

<div class="form-group col-lg-12">
    <label for="inputEmail3" class="col-sm-3 control-label">
        Add BT Peripherals?
    </label>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="peripheral" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox" id="periph"
                   onclick="visible()">
            <label for="periph" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>


<div id="peripherals-show" style="display: none" class="col-lg-12 col-lg-offset-1">
    <div class="form-group col-lg-8">
        <label for="inputEmail3" class="col-sm-4 control-label">
            BTB Music On Hold?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox" id="on-hold"
                       onclick="">
                <label for="on-hold" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group col-lg-8">
        <label for="inputEmail3" class="col-sm-4 control-label">
            BTB On Hold Messaging?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                       id="messaging" onclick="">
                <label for="messaging" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group col-lg-8">
        <label for="inputEmail3" class="col-sm-4 control-label">
            BTB Door Access?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                       id="door-access" onclick="">
                <label for="door-access" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group col-lg-8">
        <label for="inputEmail3" class="col-sm-4 control-label">
            BTB UC?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox" id="btuc"
                       onclick="">
                <label for="btuc" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group col-lg-8">
        <label for="inputEmail3" class="col-sm-4 control-label">
            Call Logging?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                       id="call-logging" onclick="">
                <label for="call-logging" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group col-lg-8">
        <label for="inputEmail3" class="col-sm-4 control-label">
            Headsets?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                       id="headsets" onclick="">
                <label for="headsets" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group col-lg-8">
        <label for="inputEmail3" class="col-sm-4 control-label">
            BTB Voice Recording?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox" id="btvr"
                       onclick="">
                <label for="btvr" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group col-lg-8">
        <label for="inputEmail3" class="col-sm-4 control-label">
            BTB AV Endpoints?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox" id="btav"
                       onclick="">
                <label for="btav" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>
</div>

