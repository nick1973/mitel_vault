<div class="form-group">
    <h4 class="col-lg-3 col-md-3 col-lg-offset-3">System Power:</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="install_power" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="install_power"
                   onclick="visible(this.id,'power-install')">
            <label for="install_power" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>

<div id="power-install" class="collapse">

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-7 control-label">
            Confirm 4 x 240V 13A power sockets are within 2m of the desired system location
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="system_location_power" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="system_location_power" class="toggleBtn onoffswitch-checkbox"
                       id="power-4">
                <label for="power-4" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-7 control-label">
            Are BT to provide a UPS?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="system_location_power_ups" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="system_location_power_ups"
                       class="toggleBtn onoffswitch-checkbox" id="power-ups">
                <label for="power-ups" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-7 control-label">
            Has an order been raised for BT to supply a UPS?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="system_location_power_ups_po" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="system_location_power_ups_po"
                       class="toggleBtn onoffswitch-checkbox" id="power-supply">
                <label for="power-supply" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>
</div>
