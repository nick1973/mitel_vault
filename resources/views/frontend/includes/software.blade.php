<div class="form-group col-lg-12">
    <h4 class="col-lg-6 col-md-6"><strong>Software: </strong>Is Software required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-software"
                   onclick="visible(this.id,'nav-software')">
            <label for="switch-software" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<form id="nav-software" class="form-horizontal collapse animated fadeIn" action="/bundle_post">
    <h4 class="col-lg-12 col-md-12"><strong>Software: </strong>What user features are required from BT?</h4>
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">Standard User:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-6">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="analogue_lines">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>19</option>
                </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Standard User" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">Voicemail:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-6">
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

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">Full PC Client:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-6">--}}
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
        {{--<select class="form-control" name="pri">--}}
        {{--<option>0</option>--}}
        {{--<option>1</option>--}}
        {{--<option>2</option>--}}
        {{--<option>3</option>--}}
        {{--<option>4</option>--}}
        {{--<option>5</option>--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--<i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"--}}
        {{--data-toggle="popover" title="Full PC Client" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">PC Softphone:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-6">--}}
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
        {{--<select class="form-control" name="pri">--}}
        {{--<option>0</option>--}}
        {{--<option>1</option>--}}
        {{--<option>2</option>--}}
        {{--<option>3</option>--}}
        {{--<option>4</option>--}}
        {{--<option>5</option>--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--<i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"--}}
        {{--data-toggle="popover" title="PC Softphone" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

    </div>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">External Twinning:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-6">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="External Twinning" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">Multi User:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-6">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Multi User" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">Teleworker:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-6">--}}
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
        {{--<select class="form-control">--}}
        {{--<option>0</option>--}}
        {{--<option>1</option>--}}
        {{--<option>2</option>--}}
        {{--<option>3</option>--}}
        {{--<option>4</option>--}}
        {{--<option>5</option>--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--<i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"--}}
        {{--data-toggle="popover" title="Teleworker" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">Audio/Web Client:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-6">--}}
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
        {{--<select class="form-control">--}}
        {{--<option>0</option>--}}
        {{--<option>1</option>--}}
        {{--<option>2</option>--}}
        {{--<option>3</option>--}}
        {{--<option>4</option>--}}
        {{--<option>5</option>--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--<i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"--}}
        {{--data-toggle="popover" title="Audio / Web Client" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

    </div>

</form>




