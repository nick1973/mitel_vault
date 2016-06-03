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

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
            {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
            <select class="form-control" name="pri">
                <option>No</option>
                <option>Yes</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-7 control-label">
            Are BT to provide a UPS?
        </label>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
            {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
            <select class="form-control" name="pri">
                <option>No</option>
                <option>Yes</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-7 control-label">
            Has an order been raised for BT to supply a UPS?
        </label>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
            {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
            <select class="form-control" name="pri">
                <option>No</option>
                <option>Yes</option>
            </select>
        </div>
    </div>
</div>
