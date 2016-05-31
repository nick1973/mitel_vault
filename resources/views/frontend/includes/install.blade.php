<div class="form-group col-lg-12">
    <h4 class="col-lg-6 col-md-6"><strong>BT Install: </strong>Is BT installation service and Project Management
        required? </h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-install"
                   onclick="visible(this.id,'nav-install')" checked>
            <label for="switch-install" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<form id="nav-install" class="form-horizontal animated fadeIn" action="/bundle_post">

    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Standard 20 Day BT
                Installation service:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="analogue_lines">
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </div>

            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Note:" data-placement="right"
               data-content="A 20 Day standard Lead time" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Express 10 Day BT
                Installation service:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="pri">
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="7410 DECT" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5320.jpg'>" data-animation="true"></i>
        </div>
    </div>
    <br/>

    <div class="col-md-12 col-lg-12">

        <div class="form-group">
            <h4 class="col-lg-3 col-md-3 col-lg-offset-3">System Location:</h4>

            <div class="col-sm-1">
                <div class="onoffswitch">
                    <input name="" type="hidden" value="No">
                    <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                           id="system-install"
                           onclick="visible(this.id,'system_location')">
                    <label for="system-install" class="onoffswitch-label">
                        <div class="onoffswitch-inner"></div>
                        <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </div>
        </div>

        <div id="system_location" class="collapse">

            <br/>
            <br/>
            {{--<div class="form-group">--}}
            {{--<label for="inputEmail3" class="col-sm-5 control-label">To assist the installing engineer,--}}
            {{--please provide a brief overview of the customers install requirements</label>--}}
            {{--<div class="col-sm-5">--}}
            {{--{!! Form::textarea('system_location_requirements', null, ['class' => 'form-control']) !!}--}}
            {{--</div>--}}
            {{--</div>--}}


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
                <label for="inputEmail3" class="col-sm-5 control-label">If multiple, are there connecting ducts to each
                    building?</label>

                <div class="col-sm-1">
                    <div class="onoffswitch">
                        <input name="system_location_connecting" type="hidden" value="No">
                        <input type="checkbox" value="Yes" name="system_location_connecting"
                               class="toggleBtn onoffswitch-checkbox" id="geo-multiple">
                        <label for="geo-multiple" class="onoffswitch-label">
                            <div class="onoffswitch-inner"></div>
                            <div class="onoffswitch-switch"></div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Names of location i.e. Comms room etc</label>

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
                <label for="inputEmail3" class="col-sm-5 control-label">Confirm adequate space is available for system
                    install</label>

                <div class="col-sm-1">
                    <div class="onoffswitch">
                        <input name="system_location_geo_space" type="hidden" value="No">
                        <input type="checkbox" value="Yes" name="system_location_geo_space"
                               class="toggleBtn onoffswitch-checkbox" id="geo-space">
                        <label for="geo-space" class="onoffswitch-label">
                            <div class="onoffswitch-inner"></div>
                            <div class="onoffswitch-switch"></div>
                        </label>
                    </div>
                </div>
            </div>
        </div>


        @include('frontend.includes.preinstallrequirements.cabinet')

        @include('frontend.includes.preinstallrequirements.power')

        @include('frontend.includes.preinstallrequirements.ceased-equipment')

        @include('frontend.includes.preinstallrequirements.cabling')

        @include('frontend.includes.preinstallrequirements.time')

        <hr>
    </div>

</form>
<button onclick="teleworkerPrev()" class="btn btn-default pull-left"><span class="glyphicon glyphicon-hand-left"
                                                                           aria-hidden="true"></span> Previous
</button>
<button onclick="supportNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                              aria-hidden="true"></span></button>
<script>
    function teleworkerPrev() {
        $('.nav-tabs a[href="#remote"]').tab('show');
    }

    function supportNext() {
        $("#tick-install").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#support"]').tab('show');
    }
</script>