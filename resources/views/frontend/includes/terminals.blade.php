<div class="form-group col-lg-12">
    <h4 class="col-lg-6 col-md-6"><strong>Terminals: </strong>Are Terminals required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-terminals"
                   onclick="visible(this.id,'nav-terminals')" checked>
            <label for="switch-terminals" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<form id="nav-terminals" class="form-horizontal animated fadeIn" action="/bundle_post">
    <h4 class="col-lg-12 col-md-12"><strong>Analogue Terminals: </strong>What Analogue Terminals are required from BT?
    </h4>
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">2100:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5312.jpg'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">7410 DECT:</label>

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
               data-toggle="popover" title="7410 DECT" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5320.jpg'>" data-animation="true"></i>
        </div>

    </div>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">2200:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5312.jpg'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">Multi User:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5312.jpg'>" data-animation="true"></i>
        </div>

    </div>

    <h4><strong>IP Terminals: </strong>What Type and Quantity of terminals are required from BT?</h4>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">5320:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/5320.png'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">5340:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/5340.jpg'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">5310:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5312.jpg'>" data-animation="true"></i>
        </div>


    </div>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">5330:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/5330.png'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">5360:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/5360.png'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">5330e:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/5330.png'>" data-animation="true"></i>
        </div>


    </div>

    <h4><strong>BTB DECT: </strong>What Type and Quantity of BT DECT terminals are required from BT?</h4>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">BTB Single Cell DECT
                Station:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5312.jpg'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">BTB Multi Cell DECT
                Station:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5312.jpg'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">BTB DECT
                Repeater:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5312.jpg'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-5 control-label">BTB DECT MiVoice Standard
                Handset:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5312.jpg'>" data-animation="true"></i>
        </div>


    </div>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">BTB DECT MiVoice
                Enterprise Handset:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5312.jpg'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">BTB DECT MiVoice Standard
                Ruggedized Handset:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5312.jpg'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">BTB DECT MiVoice
                Enterprise Ruggedized Handset:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5312.jpg'>" data-animation="true"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">BTB DECT Headset:</label>

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
               data-toggle="popover" title="2100 Analogue Phone" data-placement="right" data-html="true"
               data-content="<img src='/images/mitel_phones/mitel-5312.jpg'>" data-animation="true"></i>
        </div>

    </div>
</form>
<button onclick="serversPrev()" class="btn btn-default pull-left"><span class="glyphicon glyphicon-hand-left"
                                                                        aria-hidden="true"></span> Previous
</button>
<button onclick="landataNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                              aria-hidden="true"></span></button>
<script>
    function serversPrev() {
        $('.nav-tabs a[href="#servers"]').tab('show');
    }

    function landataNext() {
        $("#tick-terminals").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#lan-data"]').tab('show');
    }
</script>




