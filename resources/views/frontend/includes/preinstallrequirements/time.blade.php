<div class="form-group">
    <h4 class="col-lg-3 col-md-3 col-lg-offset-3">System Connection Day / Time:</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="time-install"
                   onclick="visible(this.id,'install_time')">
            <label for="time-install" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>

<div id="install_time" class="collapse">

    <br/><br/>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-5 control-label">
            Confirm the preferred connection time of your new system
        </label>

        <div class="col-sm-3">
            {!! Form::date('name', \Carbon\Carbon::now()) !!}
        </div>
    </div>
</div>
