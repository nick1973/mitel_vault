<div class="form-group col-lg-12">
    <h4 class="col-lg-8 col-md-8"><strong>Support: </strong>Is support required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-remote"
                   onclick="visible(this.id,'nav-remote')" checked>
            <label for="switch-remote" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<div id="nav-remote" class="form-horizontal animated fadeIn">
    <div class="form-group">
        <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-6 control-label">How many Teleworkers require
            a POE adaptor to power to their terminals?:</label>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
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
           data-toggle="popover" title="MICC" data-placement="right"
           data-content="And here's some amazing content. It's very engaging. Right?"></i>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-6 control-label">How many Teleworkers require
            a BT Router to be supplied?:</label>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
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
           data-toggle="popover" title="MICC" data-placement="right"
           data-content="And here's some amazing content. It's very engaging. Right?"></i>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-6 control-label">How many Teleworkers require
            BT Install assistance to be supplied?:</label>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
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
           data-toggle="popover" title="MICC" data-placement="right"
           data-content="And here's some amazing content. It's very engaging. Right?"></i>
    </div>
</div>
<button onclick="trainingPrev()" class="btn btn-default pull-left"><span class="glyphicon glyphicon-hand-left"
                                                                         aria-hidden="true"></span> Previous
</button>
<button onclick="installNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                              aria-hidden="true"></span></button>
<script>
    function trainingPrev() {
        $('.nav-tabs a[href="#training"]').tab('show');
    }

    function installNext() {
        $("#tick-remote").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#install"]').tab('show');
    }
</script>