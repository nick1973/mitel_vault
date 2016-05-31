<div class="form-group">
    <h4 class="col-lg-3 col-md-3 col-lg-offset-3">Existing / Ceased Equipment:</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="equip-install"
                   onclick="visible(this.id,'install_equip')">
            <label for="equip-install" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>

<div id="install_equip" class="collapse">

    <br/><br/>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Is there Ceased Equipment On site?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="ceased_on_site" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="ceased_on_site" class="toggleBtn onoffswitch-checkbox"
                       id="equip2">
                <label for="equip2" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Are BT required to removed the ceased Equipment as part of the order?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="ceased_remove" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="ceased_remove" class="toggleBtn onoffswitch-checkbox"
                       id="equip3">
                <label for="equip3" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            If Yes, has an order been raised to cover the removal of the ceased equipment?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="ceased_ordered" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="ceased_ordered" class="toggleBtn onoffswitch-checkbox"
                       id="equip4">
                <label for="equip4" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Does the customer have the title of the BT legacy switch?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="ceased_legacy_title" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="ceased_legacy_title" class="toggleBtn onoffswitch-checkbox"
                       id="equip5">
                <label for="equip5" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Does the customer agree for BT to collect and take away the BT legacy switch?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="ceased_legacy_take" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="ceased_legacy_take" class="toggleBtn onoffswitch-checkbox"
                       id="equip6">
                <label for="equip6" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>
</div>
