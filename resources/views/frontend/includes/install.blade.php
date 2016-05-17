<div class="form-group col-lg-12">
    <h4 class="col-lg-6 col-md-6"><strong>BT Install: </strong>Is BT Install required from BT?</h4>

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
    <h4 class="col-lg-12 col-md-12"><strong>BT Install: </strong>What BT Installation service is required from BT?

    </h4>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Standard Install:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
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
    </div>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Express Install:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
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