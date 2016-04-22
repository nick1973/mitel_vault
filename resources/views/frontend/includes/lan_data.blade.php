<h4><strong>LAN Switch: </strong>Which LAN Switch is required from BT?</h4>

<form id="" class="form-horizontal" action="/bundle_post">
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 col-lg-4 col-md-4 control-label">
                LAN Switches Required?
            </label>

            <div class="col-sm-1 col-lg-1 col-md-1">
                <div class="onoffswitch">
                    <input name="peripheral" type="hidden" value="No">
                    <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                           id="lan-switch">
                    <label for="lan-switch" class="onoffswitch-label">
                        <div class="onoffswitch-inner"></div>
                        <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </div>
            <label for="inputEmail3" class="col-sm-4 col-lg-1 col-md-1 control-label">Qty</label>

            <div class="col-lg-2 col-md-2">
                <input class="form-control">
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Voicemail" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 col-lg-6 col-md-6 control-label">Type:</label>

            <div class="col-xs-7 col-sm-5 col-md-2 col-lg-2">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="pri">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Voicemail" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 col-lg-5 col-md-5 control-label">
                Is the LAN switch to be used customer supplied?
            </label>

            <div class="col-sm-1 col-lg-3 col-md-3">
                <div class="onoffswitch">
                    <input name="peripheral" type="hidden" value="No">
                    <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                           id="lan-type">
                    <label for="lan-type" class="onoffswitch-label">
                        <div class="onoffswitch-inner"></div>
                        <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Voicemail" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 col-lg-5 col-md-5 control-label">
                If customer supplied, confirm it will support both QoS and POE?
            </label>

            <div class="col-sm-1 col-lg-3 col-md-3">
                <div class="onoffswitch">
                    <input name="peripheral" type="hidden" value="No">
                    <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                           id="lan-poe">
                    <label for="lan-poe" class="onoffswitch-label">
                        <div class="onoffswitch-inner"></div>
                        <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Voicemail" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 col-lg-5 col-md-5 control-label">
                Are POE PSU's required and what quantity is needed?
            </label>

            <div class="col-sm-1 col-lg-1 col-md-1">
                <div class="onoffswitch">
                    <input name="peripheral" type="hidden" value="No">
                    <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                           id="lan-psu">
                    <label for="lan-psu" class="onoffswitch-label">
                        <div class="onoffswitch-inner"></div>
                        <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </div>
            <label for="inputEmail3" class="col-sm-4 col-lg-1 col-md-1 control-label">Qty</label>

            <div class="col-lg-1 col-md-1">
                <input class="form-control">
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Voicemail" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

    </div>


</form>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<button id="but" class="btn btn-info pull-right">Find Bundle!</button>
