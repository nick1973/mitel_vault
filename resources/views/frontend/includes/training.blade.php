<div class="form-group col-lg-12">
    <h4 class="col-lg-8 col-md-8"><strong>Training: </strong>Is training required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-training"
                   onclick="visible(this.id,'nav-training')" checked>
            <label for="switch-training" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<div class="form-group col-lg-12">
    <h4 class="col-lg-8 col-md-8">Is on-site training required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="onsite_training"
                   onclick="visible(this.id,'onsite-training')">
            <label for="onsite_training" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<div class="form-group col-lg-12">
    <h4 class="col-lg-8 col-md-8">Is web training required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="web_training"
                   onclick="visible(this.id,'web-training')">
            <label for="web_training" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<form id="nav-training" class="form-horizontal animated fadeIn" action="/bundle_post">

    <div id="onsite-training" class="col-md-12 col-lg-12 collapse">
        <h4 class="col-lg-offset-6"><strong>On-Site Training: </strong></h4>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-7 col-lg-7 control-label">1 Day On-site System
                Training Course:</label>

            <div class="col-xs-7 col-sm-5 col-md-2 col-lg-2">
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
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-7 col-lg-7 control-label">MiVB ICP System Admin
                Training Course (CALDICOT):</label>

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
    </div>

    <div id="web-training" class="col-md-12 col-lg-12 collapse">
        <h4 class="col-lg-offset-6"><strong>Web Training: </strong></h4>
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-7 col-lg-7 control-label">MiVB Quick Start Web
                Cast Training:</label>

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
               data-toggle="popover" title="Full PC Client" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-7 col-lg-7 control-label">MiVB System and Tel
                Admin Web Cast Training:</label>

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
               data-toggle="popover" title="PC Softphone" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-7 col-lg-7 control-label">MiVB Voicemail and Auto
                Attendant Web Cast Training:</label>

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
               data-toggle="popover" title="PC Softphone" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-7 col-lg-7 control-label">MiVB Phone Features and
                Call Handling Web Cast Training:</label>

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
               data-toggle="popover" title="PC Softphone" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-7 col-lg-7 control-label">MiVB Mobile Extn and
                Remote Worker Web Cast Training:</label>

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
               data-toggle="popover" title="PC Softphone" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-7 col-lg-7 control-label">MiVB UC Express Web
                Cast Training:</label>

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
               data-toggle="popover" title="PC Softphone" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-7 col-lg-7 control-label">MiVB Call Accountant
                Web Cast Training:</label>

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
               data-toggle="popover" title="PC Softphone" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-7 col-lg-7 control-label">MiVB WebCast Passport 3
                x Web Cast Training:</label>

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
               data-toggle="popover" title="PC Softphone" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-7 col-lg-7 control-label">MiVB WebCast MAX
                Passport 1 year unlimited (Included In CX/CXI Bundles):</label>

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
               data-toggle="popover" title="PC Softphone" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-7 col-lg-7 control-label">MiVB WebCast MAX
                Passport 1 year unlimited 3yr LTM:</label>

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
               data-toggle="popover" title="PC Softphone" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-7 col-lg-7 control-label">MiVB WebCast MAX
                Passport 1 year unlimited 5yr LTM:</label>

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
               data-toggle="popover" title="PC Softphone" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>
    </div>
</form>
<button onclick="peripheralsPrev()" class="btn btn-default pull-left"><span class="glyphicon glyphicon-hand-left"
                                                                            aria-hidden="true"></span> Previous
</button>
<button onclick="teleworkerNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                                 aria-hidden="true"></span></button>
<script>
    function peripheralsPrev() {
        $('.nav-tabs a[href="#peripherals"]').tab('show');
    }

    function teleworkerNext() {
        $("#tick-training").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#remote"]').tab('show');
    }
</script>