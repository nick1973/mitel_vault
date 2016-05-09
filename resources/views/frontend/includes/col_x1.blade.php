
    <h4><strong>Lines: </strong>How many lines are required?</h4>

    <form id="myform" class="form-horizontal" action="/bundle_post">
        <div class="col-md-12 col-lg-6">
            <div class="form-group">
                <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">Analogue:</label>
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
                   data-toggle="popover" title="Analogue" data-placement="right"
                   data-content="And here's some amazing content. It's very engaging. Right?"></i>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">PRI/ISDN30:</label>
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
                   data-toggle="popover" title="PRI/ISDN30" data-placement="right"
                   data-content="And here's some amazing content. It's very engaging. Right?"></i>
            </div>
        </div>

        <div class="col-md-12 col-lg-6">
            <div class="form-group">
                <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">BRI/ISDN2:</label>
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
                   data-toggle="popover" title="BRI/ISDN2" data-placement="right"
                   data-content="And here's some amazing content. It's very engaging. Right?"></i>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">SIP:</label>
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
                   data-toggle="popover" title="SIP" data-placement="right"
                   data-content="And here's some amazing content. It's very engaging. Right?"></i>
            </div>

        </div>

        <h4><strong>Extensions: </strong>How many and what type of extensions are required?</h4>

        <div class="col-md-12 col-lg-6">
            <div class="form-group">
                <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">Analogue:</label>
                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-6">
                    {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
                    <select class="form-control" name="analogue_extensions">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                   data-toggle="popover" title="Analogue" data-placement="right"
                   data-content="And here's some amazing content. It's very engaging. Right?"></i>
            </div>
        </div>
        {{--<div class="col-md-12 col-lg-6">--}}
        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">IP:</label>--}}
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
        {{--data-toggle="popover" title="PRI/ISDN30" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}
        {{--</div>--}}

        <h4><strong>LAN Ports: </strong>How many LAN ports are required from BT?</h4>

        <div class="col-md-12 col-lg-9">
            <div class="form-group">
                <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">BT Supplied LAN ports:</label>
                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
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
                   data-toggle="popover" title="BT Supplied LAN ports" data-placement="right"
                   data-content="And here's some amazing content. It's very engaging. Right?"></i>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-xs-3 col-sm-4 control-label">Customer supplied:</label>
                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
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
                   data-toggle="popover" title="Customer supplied" data-placement="right"
                   data-content="And here's some amazing content. It's very engaging. Right?"></i>
            </div>
            {{--<button id="but" type="submit" class="btn btn-info pull-right">Find Bundle!</button>--}}
        </div>
    </form>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <button id="but" class="btn btn-info pull-right">Find Bundle!</button>



