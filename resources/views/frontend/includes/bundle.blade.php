<h4><strong>Lines: </strong>How many lines are required?</h4>

<form id="myform" class="form-horizontal" action="/bundle_post">
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-4 control-label">Type of Lines:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select id="lines" class="form-control" name="lines" required="">
                    <option>Select</option>
                    <option value="bri_lines">BRI</option>
                    <option value="pri_lines">PRI</option>
                    <option value="sip_lines">SIP</option>
                </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Analogue" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-4 control-label">SIP:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
        {{--<input class="form-control" type="number" name="sip_lines" min="0">--}}
        {{--</div>--}}
        {{--<i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"--}}
        {{--data-toggle="popover" title="SIP" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

    </div>

    <script>
        $("#lines").change(function () {
            var foo = $("#lines").val();
            if (foo == "bri_lines") {
                $("#line_qty").attr('min', '0').attr('max', '8').attr('step', '2').val('0');
            }
            else if (foo == "pri_lines") {
                $("#line_qty").attr('min', '8').attr('max', '30').attr('step', '1').val('8');
            }
            else {
                $("#line_qty").attr('min', '0').attr('max', '15').attr('step', '1').val('0');
            }
        });
    </script>


    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-4 control-label">Qty:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                <input id="line_qty" class="form-control" type="number" name="line_qty">
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="BRI/ISDN2" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-4 control-label">SIP:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
        {{--<select class="form-control" name="sip_lines">--}}
        {{--<option>0</option>--}}
        {{--<option>1</option>--}}
        {{--<option>2</option>--}}
        {{--<option>3</option>--}}
        {{--<option>4</option>--}}
        {{--<option>5</option>--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--<i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"--}}
        {{--data-toggle="popover" title="SIP" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

    </div>

    <div class="col-md-12 col-lg-6">

        <h4><strong>Users: </strong>How many users are required?</h4>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-4 control-label">Users:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                <input class="form-control" type="number" name="users" min="0" value="0">
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Users" data-placement="right"
               data-content="How many and what type of extensions are required?"></i>
        </div>

        <h4><strong>LAN Ports: </strong>How many LAN ports are required from BT?</h4>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">BT Supplied LAN ports:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control" name="lan">
                    <option>0</option>
                    <option>16</option>
                    <option>24</option>
                    <option>48</option>
                </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="BT Supplied LAN ports" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">Customer supplied:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                <select class="form-control">
                    <option>No</option>
                    <option>Yes</option>
                </select>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Customer supplied" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>
        {{--<button id="but" type="submit" class="btn btn-info pull-right">Find Bundle!</button>--}}
    </div>
</form>
<div class="col-lg-12">
    <button id="but" class="btn btn-info pull-right">Find Bundle!</button>
</div>




