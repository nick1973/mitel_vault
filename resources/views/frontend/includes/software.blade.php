<div class="form-group col-lg-12">
    <h4 class="col-lg-7 col-md-7"><strong>System Licenses: </strong>Is System Software required from BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-software"
                   onclick="visible(this.id,'nav-software')" checked>
            <label for="switch-software" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<form id="nav-software" class="form-horizontal animated fadeIn"
      action="/bundle_post">
    <h4 class="col-lg-12 col-md-12"><strong>Bundle Licenses: </strong>The following licenses are included in your BT
        Bundle</h4>
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Standard User:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                <input id="standard_license" name="standard_license" class="form-control">
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Standard User" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Voicemail:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                <input id="vm_license" name="vm_license" class="form-control">
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Voicemail" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>
    </div>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Multi User:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                <input id="multi_user_license" name="multi_user_license" class="form-control">
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Multi User" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>


    </div>

    <div class="col-md-12 col-lg-12">
        <div class="form-group bg-info">
            <label class="col-lg-10 col-md-9 control-label"><strong>Additional User Licenses to be allocated:</strong>
                The following licenses are able to be added to your BT Bundle</label>

            <div class="col-xs-7 col-sm-5 col-md-2 col-lg-1">
                <input id="software_users" name="users" class="form-control">
            </div>
        </div>
    </div>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Standard User:</label>

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
               data-toggle="popover" title="Standard User" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Dynamic Extension User:</label>

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
               data-toggle="popover" title="Voicemail" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>
    </div>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Multi User:</label>

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

    <h4 class="col-lg-12 col-md-12"><strong>Additional Feature Licenses:</strong> The following licenses are able to be
        added to your BT Bundle</h4>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">G729:</label>

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
               data-toggle="popover" title="Standard User" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">External Hot desk:</label>

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
               data-toggle="popover" title="Voicemail" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>
    </div>

    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Voicemail Hospitality:</label>

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

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Network Link:</label>

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

</form>
<button onclick="homePrev()" class="btn btn-default pull-left"><span class="glyphicon glyphicon-hand-left"
                                                                     aria-hidden="true"></span> Previous
</button>
<button onclick="serverNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                             aria-hidden="true"></span></button>
<script>
    $(document).ready(function () {
        $('#reload_cart').load('/cart_reload');
    });

    function homePrev() {
        $('.nav-tabs a[href="#bundle-home"]').tab('show');
    }

    function serverNext() {
        $("#tick-software").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#servers"]').tab('show');
    }
</script>


