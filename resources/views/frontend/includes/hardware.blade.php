<h4 class="col-lg-12 col-md-12"><strong>BT Bundle Lines: </strong>The following lines are included in your chosen BT
    Bundle:</h4>
<div class="col-md-12 col-lg-6">
    <div class="form-group">
        <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Analogue Lines:</label>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
            <input name="" class="form-control bundle_analogue_lines" disabled>
        </div>
        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
           data-toggle="popover" title="Standard User" data-placement="right"
           data-content="And here's some amazing content. It's very engaging. Right?"></i>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">BRI Lines:</label>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
            <input name="" class="form-control bundle_bri_lines" disabled>
        </div>
        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
           data-toggle="popover" title="Voicemail" data-placement="right"
           data-content="And here's some amazing content. It's very engaging. Right?"></i>
    </div>
</div>

<div class="col-md-12 col-lg-6">
    <div class="form-group">
        <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">PRI Lines:</label>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
            <input id="" name="" class="form-control bundle_pri_lines" disabled>
        </div>
        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
           data-toggle="popover" title="Multi User" data-placement="right"
           data-content="And here's some amazing content. It's very engaging. Right?"></i>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">SIP Lines:</label>

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
            <input id="" name="" class="form-control bundle_sip_lines" disabled>
        </div>
        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
           data-toggle="popover" title="Multi User" data-placement="right"
           data-content="And here's some amazing content. It's very engaging. Right?"></i>
    </div>
</div>
<br/>
<div class="form-group col-lg-12">
    <h4 class="col-lg-4 col-md-7"><strong>Do you want additional lines?</strong></h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-lines"
                   onclick="visible(this.id,'nav-lines')">
            <label for="switch-lines" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>

<form id="hardware-post" class="form-horizontal animated fadeIn" action="/hardware_post">
    <div id="nav-lines" class="col-md-12 col-lg-12 collapse">
        <h4 class="col-lg-12 col-md-7">Please select only <span style="color: #ff0000"><u>One</u></span> of the
            following 2 options:</h4>
        @foreach($lines as $line)
            <div class="form-group">

                <label class="col-xs-3 col-sm-4 col-lg-3 control-label">{{ $line->item_name }}:</label>
                {{--<input type="text" class="form-control" name="qty[]" value="0">--}}
                <input class="hidden" name="id[]" value="{{ $line->id }}">
                <input class="hidden" name="price[]" value="{{ $line->btbuy }}">
                <input class="hidden" name="name[]" value="{{ $line->item_name }}">

                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-1">
                    <select class="form-control" name="qty[]">
                        <option>0</option>
                        <option>1</option>
                    </select>
                </div>
                @if($line->info_view==1)
                    <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                       data-toggle="popover" title="{{ $line->item_name }}" data-placement="right" data-html="true"
                       data-content="<?php if($line->image) {?><img height='200px' alt='/{{ $line->item_name }}' src='/{{ $line->image }}'><?php } ?>
                   <p>{{ $line->info_description }}</p>"
                       data-animation="true"></i>
                @endif
                @if(count($line->upgrades)>0)
                    <i class="fa fa-plus-circle fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                       onclick="showUpgrades('{{ $line->item_name }}', {{ $line->upgrades }})"></i>
                @endif
                @if($line->warning_view==1)
                    <i class="fa fa-exclamation-circle fa-2x" style="padding-top: 4px; color: #ff0000"
                       data-toggle="popover" title="{{ $line->item_name }}" data-placement="right" data-html="true"
                       data-content="<?php if($line->image) {?><img height='200px' alt='/{{ $line->item_name }}' src='/{{ $line->image }}'><?php } ?>
                   <p>{{ $line->warning_description }}</p>"
                       data-animation="true"></i>
                @endif
            </div>
        @endforeach


        <div class="form-group col-lg-12">
            <h4 class="col-lg-4 col-md-7"><strong>SIP channel licenses?</strong></h4>

            <div class="col-sm-1">
                <div class="onoffswitch">
                    <input name="" type="hidden" value="No">
                    <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                           id="switch-sip"
                           onclick="visible(this.id,'nav-sip')">
                    <label for="switch-sip" class="onoffswitch-label">
                        <div class="onoffswitch-inner"></div>
                        <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </div>
        </div>
        <br/>

        <div id="nav-sip" class="collapse">
            @foreach($sip_lines as $line)
                <div class="form-group">
                    <label class="col-xs-3 col-sm-4 col-lg-3 control-label">{{ $line->item_name }}:</label>
                    {{--<input type="text" class="form-control" name="qty[]" value="0">--}}
                    <input class="hidden" name="id[]" value="{{ $line->id }}">
                    <input class="hidden" name="price[]" value="{{ $line->btbuy }}">
                    <input class="hidden" name="name[]" value="{{ $line->item_name }}">

                    <div class="col-xs-7 col-sm-5 col-md-5 col-lg-1">
                        <select class="form-control" name="qty[]">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                        {{--<input type="radio" class="form-control" name="qty[]" value="1">--}}
                    </div>
                    @if($line->info_view==1)
                        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                           data-toggle="popover" title="{{ $line->item_name }}" data-placement="right" data-html="true"
                           data-content="<?php if($line->image) {?><img height='200px' alt='/{{ $line->item_name }}' src='/{{ $line->image }}'><?php } ?>
                   <p>{{ $line->info_description }}</p>"
                           data-animation="true"></i>
                    @endif
                    @if(count($line->upgrades)>0)
                        <i class="fa fa-plus-circle fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                           onclick="showUpgrades('{{ $line->item_name }}', {{ $line->upgrades }})"></i>
                    @endif
                    @if($line->warning_view==1)
                        <i class="fa fa-exclamation-circle fa-2x" style="padding-top: 4px; color: #ff0000"
                           data-toggle="popover" title="{{ $line->item_name }}" data-placement="right" data-html="true"
                           data-content="<?php if($line->image) {?><img height='200px' alt='/{{ $line->item_name }}' src='/{{ $line->image }}'><?php } ?>
                   <p>{{ $line->warning_description }}</p>"
                           data-animation="true"></i>
                    @endif
                </div>
            @endforeach
        </div>


    </div>


</form>

<button onclick="homePrev()" class="btn btn-default pull-left"><span class="glyphicon glyphicon-hand-left"
                                                                     aria-hidden="true"></span> Previous
</button>
<button onclick="licensesNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                               aria-hidden="true"></span></button>
<script>
    function homePrev() {
        $('.nav-tabs a[href="#bundle-home"]').tab('show');
    }

    function licensesNext() {

        $("#tick-hardware").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#lan-data"]').tab('show');

        var formData = $("#hardware-post").serializeArray();
        var URL = $("#hardware-post").attr("action");
        console.log(formData);
        $.post(URL,
                formData,
                function (data, textStatus, jqXHR) {
                    $('#reload_cart').load('/cart_reload');
                    $http.get("#")
                            .then(function (response) {
                            }).fail(function (jqXHR, textStatus, errorThrown) {
                                console.log(errorThrown);
                            });

                });

    }

    $(document).ready(function () {
        $('input[type=radio]').change(function () {
            // When any radio button on the page is selected,
            // then deselect all other radio buttons.
            $('input[type=radio]:checked').not(this).prop('checked', false);
        });
    })
</script>


