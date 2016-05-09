<div class="form-group col-lg-12">
    <h4 class="col-lg-6 col-md-6"><strong>Server: </strong>Is a server required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-server"
                   onclick="visible(this.id,'nav-server')">
            <label for="switch-server" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<form id="nav-server" class="form-horizontal collapse animated fadeIn" action="/bundle_post">
    <h4 class="col-lg-12 col-md-12"><strong>Server: </strong>What server is required from BT?</h4>
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">MGB:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
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
               data-toggle="popover" title="MGB" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">MiCollab:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
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
               data-toggle="popover" title="MiCollab" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

    </div>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">MICC:</label>

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
               data-toggle="popover" title="MICC" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label"></label>

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
               data-toggle="popover" title="Multi User" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

    </div>


    <h4><strong>MBG Server: </strong>What MBG Applications and no of users are required from BT?</h4>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Teleworker:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
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
               data-toggle="popover" title="Teleworker " data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">SRC:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
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
        {{--data-toggle="popover" title="SRC" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Nupoint:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
        {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
        {{--<select class="form-control" name="analogue_lines">--}}
        {{--<option>0</option>--}}
        {{--<option>1</option>--}}
        {{--<option>2</option>--}}
        {{--<option>3</option>--}}
        {{--<option>4</option>--}}
        {{--<option>5</option>--}}
        {{--<option>19</option>--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--<i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"--}}
        {{--data-toggle="popover" title="Nupoint" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">MCA:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
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
        {{--data-toggle="popover" title="MCA" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Web Proxy:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
        {{--{!! Form::input('company_name', 'company_name', null, ['class' => 'form-control']) !!}--}}
        {{--<select class="form-control" name="analogue_lines">--}}
        {{--<option>0</option>--}}
        {{--<option>1</option>--}}
        {{--<option>2</option>--}}
        {{--<option>3</option>--}}
        {{--<option>4</option>--}}
        {{--<option>5</option>--}}
        {{--<option>19</option>--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--<i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"--}}
        {{--data-toggle="popover" title="Web Proxy" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">SIP Proxy:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
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
        {{--data-toggle="popover" title="SIP Proxy" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

    </div>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Teleworker Qty:</label>

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
               data-toggle="popover" title="Teleworker  Qty" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">SRC User Qty:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
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
        {{--data-toggle="popover" title="SRC User Qty" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Nupoint User Qty:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
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
        {{--data-toggle="popover" title="Nupoint User Qty" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">MCA User Qty:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
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
        {{--data-toggle="popover" title="MCA User Qty" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Web Proxy User--}}
        {{--Qty:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
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
        {{--data-toggle="popover" title="Web Proxy User Qty" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">DMZ SIP Proxy--}}
        {{--Qty:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
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
        {{--data-toggle="popover" title="DMZ SIP Proxy Qty" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

    </div>


    <h4><strong>MiCollab Server: </strong>What MiCollab Applications and no of users are required from BT?
    </h4>

    <div class="col-md-12 col-lg-6">

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">SRC:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
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
               data-toggle="popover" title="SRC" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Nupoint:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
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
               data-toggle="popover" title="Nupoint" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">MCA:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
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
               data-toggle="popover" title="MCA" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Web Proxy:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
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
               data-toggle="popover" title="Web Proxy" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">SIP Proxy:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
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
        {{--data-toggle="popover" title="SIP Proxy" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

    </div>

    <div class="col-md-12 col-lg-6">
        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Teleworker Qty:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
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
        {{--data-toggle="popover" title="Teleworker  Qty" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">SRC User Qty:</label>

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
               data-toggle="popover" title="SRC User Qty" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Nupoint User Qty:</label>

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
               data-toggle="popover" title="Nupoint User Qty" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">MCA User Qty:</label>

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
               data-toggle="popover" title="MCA User Qty" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">Web Proxy User
                Qty:</label>

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
               data-toggle="popover" title="Web Proxy User Qty" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        {{--<div class="form-group">--}}
        {{--<label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">DMZ SIP Proxy--}}
        {{--Qty:</label>--}}

        {{--<div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">--}}
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
        {{--data-toggle="popover" title="DMZ SIP Proxy Qty" data-placement="right"--}}
        {{--data-content="And here's some amazing content. It's very engaging. Right?"></i>--}}
        {{--</div>--}}

    </div>

    <h4><strong>Sip Proxy Server: </strong>Do you require a SIP Proxy Sever from BT?
    </h4>

    <div class="form-group col-lg-6">

    <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">Server Gateway Mode SIP Proxy
            Qty:</label>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-4">
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
           data-toggle="popover" title="Server Gateway Mode SIP Proxy Qty" data-placement="right"
           data-content="And here's some amazing content. It's very engaging. Right?"></i>
    </div>

</form>






