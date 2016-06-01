<div class="form-group">
    <h4 class="col-lg-3 col-md-3 col-lg-offset-3">System Mounting:</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="cabinet-install"
                   onclick="visible(this.id,'install-cabinet')">
            <label for="cabinet-install" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>

<div id="install-cabinet" class="collapse">
    <br/>
    <br/>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">System Mounting</label>

        <div class="col-sm-2">
            {!! Form::input('system_mounting', 'system_mounting', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Confirm 5U space (225mm) is available in the cabinet for ordered equipment
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="system_location_5u_space" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="system_location_5u_space"
                       class="toggleBtn onoffswitch-checkbox" id="cabinet-space">
                <label for="cabinet-space" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Confirm the cabinet depth is 600mm deep for the ordered equipment
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="system_location_cab_depth" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="system_location_cab_depth"
                       class="toggleBtn onoffswitch-checkbox" id="cabinet-depth">
                <label for="cabinet-depth" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Confirm there is free access around the cabinet and there are no restrictions / obstructions
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="system_location_restricted" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="system_location_restricted"
                       class="toggleBtn onoffswitch-checkbox" id="cabinet-access">
                <label for="cabinet-access" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Confirm if the New Switch CCU to be fitted in the same location as the existing CCU?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="system_ccu_same_loc" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="system_ccu_same_loc" class="toggleBtn onoffswitch-checkbox"
                       id="cabinet-ccu">
                <label for="cabinet-ccu" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>


    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Are BT required to provide patch leads? If yes, how many?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="system_provide_patch" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="system_provide_patch" class="toggleBtn onoffswitch-checkbox"
                       id="cabinet-leads">
                <label for="cabinet-leads" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
        <div class="col-sm-1">
            {!! Form::input('system_provide_patch_qty', 'system_provide_patch_qty', null, ['class' => 'form-control'])
            !!}
        </div>
    </div>
</div>