<div class="form-group col-lg-12">
    <h4 class="col-lg-8 col-md-8"><strong>Support: </strong>Is support required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-support"
                   onclick="visible(this.id,'nav-support')" checked>
            <label for="switch-support" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>
<h4 class="col-lg-7 col-md-7"><strong>Is Proactive Monitoring is included in your standard system Bundle?</strong></h4>
<br/>
<div id="nav-support" class="col-md-12 col-lg-12 animated fadeIn">
    <div class="form-group">
        <h4 class="col-lg-6 col-md-6 col-lg-offset-2"><strong>Included monitoring:</strong> Foundation Package</h4>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
        </div>

        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
           data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
           data-content="<img src='/images/proactive_monitoring.png'>"
           data-animation="true"></i>
        {{--<i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"--}}
        {{--data-toggle="popover" title="Note:" data-placement="right"--}}
        {{--data-content="A 20 Day standard Lead time" data-animation="true"></i>--}}
    </div>

    <h4 class="col-lg-12 col-md-12"><strong>Additional PRM Options:</strong> The following licenses are able to be added
        to your BT Bundle</h4>
    <br/>

    <div class="form-group">
        <h4 class="col-lg-6 col-md-6 col-lg-offset-2">Security & Advanced Monitoring Package:</h4>
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Security & Advanced Monitoring Package:</label>--}}

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
            {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
            <select class="form-control" name="analogue_lines">
                <option>0</option>
                <option>1</option>
            </select>
        </div>

        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
           data-toggle="popover" title="Note:" data-placement="right"
           data-content="A 20 Day standard Lead time" data-animation="true"></i>
    </div>

    <div class="form-group">
        <h4 class="col-lg-6 col-md-6 col-lg-offset-2">Proactive Remote Maintenance ( Backup) Package:</h4>
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Proactive Remote Maintenance ( Backup) Package:</label>--}}

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-2">
            {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
            <select class="form-control" name="pri">
                <option>0</option>
                <option>1</option>
            </select>
        </div>
        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
           data-toggle="popover" title="7410 DECT" data-placement="right" data-html="true"
           data-content="<img src='/images/mitel_phones/mitel-5320.jpg'>" data-animation="true"></i>
    </div>

</div>
<button onclick="teleworkerPrev()" class="btn btn-default pull-left"><span class="glyphicon glyphicon-hand-left"
                                                                           aria-hidden="true"></span> Previous
</button>
<button onclick="maintNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                            aria-hidden="true"></span></button>
<script>
    function teleworkerPrev() {
        $('.nav-tabs a[href="#remote"]').tab('show');
    }

    function maintNext() {
        $("#tick-support").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#maint"]').tab('show');
    }
</script>