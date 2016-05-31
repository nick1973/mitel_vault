<?php if (!isset($geo))
    $geo = $customer
?>
<div class="panel panel-default">
    <div class="panel-body">

        {!! Form::model($geo,[
        'method' => 'PATCH',
        'route' => ['ipo-echosign.pre-install-requirements.update',$geo->crf_id],
        'class' => 'form-horizontal']) !!}

        <h2>Pre-Install Requirements:</h2>

        <div class="container">
            <button id="solution_btn" type="button" class="btn btn-default collapsed col-md-4" data-toggle="collapse"
                    data-target="#solution">
                System Location: Geography
            </button>
            <div id="solution" class="collapse">

                <br/>
                <br/>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">To assist the installing engineer,
                        please provide a brief overview of the customers install requirements</label>

                    <div class="col-sm-5">
                        {!! Form::textarea('system_location_requirements', null, ['class' => 'form-control']) !!}
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">Nature of customer's business</label>

                    <div class="col-sm-5">
                        {!! Form::input('system_location_nature', 'system_location_nature', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">General Environment, Office, Industrial,
                        warehouse</label>

                    <div class="col-sm-5">
                        {!! Form::input('system_location_environment', 'system_location_environment', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">Is it Single or Multiple buildings?</label>

                    <div class="col-sm-2">
                        {!! Form::input('system_location_buildings', 'system_location_buildings', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">If multiple, are there connecting ducts to
                        each building?</label>

                    <div class="col-sm-1">
                        <div class="onoffswitch">
                            <input name="system_location_connecting" type="hidden" value="No">
                            <input type="checkbox" value="Yes" name="system_location_connecting"
                                   class="toggleBtn onoffswitch-checkbox"
                                   id="geo-multiple" {{$geo->system_location_connecting == 'Yes' ? "checked='checked'" : ''}}>
                            <label for="geo-multiple" class="onoffswitch-label">
                                <div class="onoffswitch-inner"></div>
                                <div class="onoffswitch-switch"></div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">Names of location i.e. Comms room
                        etc</label>

                    <div class="col-sm-5">
                        {!! Form::input('system_location_geo_name', 'system_location_geo_name', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">Floor Location</label>

                    <div class="col-sm-1">
                        {!! Form::input('system_location_geo_floor', 'system_location_geo_floor', null, ['class' =>
                        'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">Confirm adequate space is available for
                        system install</label>

                    <div class="col-sm-1">
                        <div class="onoffswitch">
                            <input name="system_location_geo_space" type="hidden" value="No">
                            <input type="checkbox" value="Yes" name="system_location_geo_space"
                                   class="toggleBtn onoffswitch-checkbox"
                                   id="geo-space" {{$geo->system_location_geo_space == 'Yes' ? "checked='checked'" : ''}}>
                            <label for="geo-space" class="onoffswitch-label">
                                <div class="onoffswitch-inner"></div>
                                <div class="onoffswitch-switch"></div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br/>

        @include('IPO_echosign.preinstallrequirements.cabinet')

        <br/>

        @include('IPO_echosign.preinstallrequirements.power')

        <br/>

        @include('IPO_echosign.preinstallrequirements.ceased-equipment')

        <br/>

        @include('IPO_echosign.preinstallrequirements.cabling')

        <br/>

        @include('IPO_echosign.preinstallrequirements.time')


        <hr>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
        </form>

    </div>
</div>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
<link href="bootstrap-toggle.css" rel="stylesheet">
<script src="bootstrap-toggle.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style>
    /* Icon when the collapsible content is shown */
    #solution_btn:after, #service_btn:after, #terminals_btn:after, #voice_network_btn:after {
        font-family: "Glyphicons Halflings";
        content: "\e114";
        float: right;
        margin-left: 15px;
    }

    /* Icon when the collapsible content is hidden */
    #solution_btn.collapsed:after, #service_btn.collapsed:after, #terminals_btn.collapsed:after, #voice_network_btn.collapsed:after {
        content: "\e080";
    }

    .onoffswitch {
        position: relative;
        width: 80px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    .onoffswitch-checkbox {
        display: none;
    }

    .onoffswitch-label {
        display: block;
        overflow: hidden;
        cursor: pointer;
        border: 2px solid #999999;
        border-radius: 20px;
    }

    .onoffswitch-inner {
        display: block;
        width: 200%;
        margin-left: -100%;
        transition: margin 0.3s ease-in 0s;
    }

    .onoffswitch-inner:before, .onoffswitch-inner:after {
        display: block;
        float: left;
        width: 50%;
        height: 25px;
        padding: 0;
        line-height: 25px;
        font-size: 14px;
        color: white;
        font-family: Trebuchet, Arial, sans-serif;
        font-weight: bold;
        box-sizing: border-box;
    }

    .onoffswitch-inner:before {
        content: "YES";
        padding-left: 10px;
        background-color: #337ab7;
        color: #FFFFFF;
    }

    .onoffswitch-inner:after {
        content: "NO";
        padding-right: 10px;
        background-color: #EEEEEE;
        color: #999999;
        text-align: right;
    }

    .onoffswitch-switch {
        display: block;
        width: 18px;
        margin: 6px;
        background: #ffffff;
        position: absolute;
        top: 0;
        bottom: 0;
        right: 48px;
        border: 2px solid #999999;
        border-radius: 20px;
        transition: all 0.3s ease-in 0s;
    }

    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
        margin-left: 0;
    }

    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
        right: 0px;
    }

</style>