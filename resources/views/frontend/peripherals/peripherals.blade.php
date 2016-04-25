<div class="form-group col-lg-12">
    <h4 class="col-lg-6 col-md-6"><strong>Peripherals: </strong>Are peripherals are required from BT?</h4>
    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox" id="periph"
                   onclick="visible(this.id,'collapseExample')">
            <label for="periph" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>


<div id="collapseExample" class="col-lg-12 col-lg-offset-1 collapse animated fadeIn" style="padding-top: 20px">
    <div class="form-group col-lg-10 col-md-10">
        <label for="inputEmail3" class="col-sm-4 col-lg-4 col-md-4 control-label">
            BTB Music On Hold?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox" id="on-hold"
                       onclick="visible(this.id,'moh')">
                <label for="on-hold" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>

        <div id="moh" class="col-lg-12 col-lg-offset-1 collapse animated fadeIn" style="padding-top: 20px">
            @include('frontend.peripherals.includes.moh')
        </div>
    </div>

    <div class="form-group col-lg-10 col-md-10">
        <label for="inputEmail3" class="col-sm-4 col-lg-4 col-md-4 control-label">
            BTB On Hold Messaging?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                       id="messaging" onclick="visible(this.id,'message')">
                <label for="messaging" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>

        <div id="message" class="col-lg-12 col-lg-offset-1 collapse animated fadeIn" style="padding-top: 20px">
            @include('frontend.peripherals.includes.message')
        </div>
    </div>

    <div class="form-group col-lg-10 col-md-10">
        <label for="inputEmail3" class="col-sm-4 col-lg-4 col-md-4 control-label">
            BTB Door Access?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                       id="door-access" onclick="visible(this.id,'de')">
                <label for="door-access" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>

        <div id="de" class="col-lg-12 col-lg-offset-1 collapse animated fadeIn" style="padding-top: 20px">
            @include('frontend.peripherals.includes.door_access')
        </div>
    </div>

    <div class="form-group col-lg-10 col-md-10">
        <label for="inputEmail3" class="col-sm-4 col-lg-4 col-md-4 control-label">
            BTB UC?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox" id="btuc"
                       onclick="visible(this.id,'uc')">
                <label for="btuc" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>

        <div id="uc" class="col-lg-12 col-lg-offset-1 collapse animated fadeIn" style="padding-top: 20px">
            @include('frontend.peripherals.includes.btuc')
        </div>
    </div>

    <div class="form-group col-lg-10 col-md-10">
        <label for="inputEmail3" class="col-sm-4 col-lg-4 col-md-4 control-label">
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

    <div class="form-group col-lg-10 col-md-10">
        <label for="inputEmail3" class="col-sm-4 col-lg-4 col-md-4 control-label">
            Headsets?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                       id="headsets" onclick="visible(this.id,'head')">
                <label for="headsets" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
        <div id="head" class="col-lg-12 col-lg-offset-1 collapse animated fadeIn" style="padding-top: 20px">
            @include('frontend.peripherals.includes.headset')
        </div>
    </div>

    <div class="form-group col-lg-10 col-md-10">
        <label for="inputEmail3" class="col-sm-4 col-lg-4 col-md-4 control-label">
            BTB Voice Recording?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox" id="btvr"
                       onclick="visible(this.id,'vr')">
                <label for="btvr" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
        <div id="vr" class="col-lg-12 collapse animated fadeIn" style="padding-top: 20px">
            @include('frontend.peripherals.includes.btvr')
        </div>
    </div>

    <div class="form-group col-lg-10 col-md-10">
        <label for="inputEmail3" class="col-sm-4 col-lg-4 col-md-4 control-label">
            BTB AV Endpoints?
        </label>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="peripheral" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox" id="btav"
                       onclick="visible(this.id,'av')">
                <label for="btav" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
        <div id="av" class="col-lg-12 col-lg-offset-1 collapse animated fadeIn" style="padding-top: 20px">
            @include('frontend.peripherals.includes.av_endpoints')
        </div>
    </div>
</div>
<br/>
<hr>

