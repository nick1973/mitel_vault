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

<form id="nav-software" class="form-horizontal animated fadeIn" action="/hardware_post">
    <h4 class="col-lg-12 col-md-12"><strong>Bundle Licenses: </strong>The following licenses are included in your BT
        Bundle</h4>
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Standard User:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                <input id="standard_license" name="standard_license" class="form-control" disabled>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Standard User" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-xs-3 col-sm-4 col-lg-5 control-label">Voicemail:</label>

            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                <input id="vm_license" name="vm_license" class="form-control" disabled>
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
                <input id="multi_user_license" name="multi_user_license" class="form-control" disabled>
            </div>
            <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
               data-toggle="popover" title="Multi User" data-placement="right"
               data-content="And here's some amazing content. It's very engaging. Right?"></i>
        </div>


    </div>


    <div class="col-md-12 col-lg-12">
        <div id="bar" class="form-group bg-info">
            <label class="col-lg-10 col-md-9 control-label"><strong>Additional User Licenses to be allocated:</strong>
                The following licenses are able to be added to your BT Bundle</label>
            <div class="col-xs-7 col-sm-5 col-md-2 col-lg-1">
                <input name="users" class="form-control licence_users" disabled>
                <input class="form-control licence_users_hidden hidden">
            </div>
        </div>
    </div>
    <div id="licences">
    <div class="col-md-12 col-lg-6">

        <?php
        $total_terminals = count($user_license);
        $divided_terminals = $total_terminals / 2;
        $half_terminals = round($divided_terminals);
        $i = 1;
        $x = $half_terminals;
        ?>

        @foreach($user_license as $terminal)
            <div class="form-group">
                <label for="inputEmail3"
                       class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}:</label>

                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                    <input class="hidden" name="id[]" value="{{ $terminal->id }}">
                    <input class="hidden" name="price[]" value="{{ $terminal->btbuy }}">
                    <input class="hidden" name="name[]" value="{{ $terminal->item_name }}">
                    <select class="form-control" name="qty[]">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>19</option>
                    </select>
                </div>
                @if($terminal->info_view==1)
                    <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                       data-toggle="popover" title="{{ $terminal->item_name }}" data-placement="right" data-html="true"
                       data-content="<?php if($terminal->image) {?><img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'><?php } ?>
                   <p>{{ $terminal->info_description }}</p>"
                       data-animation="true"></i>
                @endif
                @if(count($terminal->upgrades)>0)
                    <i class="fa fa-plus-circle fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                       onclick="showUpgrades('{{ $terminal->item_name }}', {{ $terminal->upgrades }})"></i>
                @endif
            </div>
            <?php if ($i++ == $half_terminals) break; ?>
        @endforeach
    </div>

    <div class="col-md-12 col-lg-6">
        @foreach($user_license as $k => $terminal)
            <?php if ($k < $x) continue; ?>
            <div class="form-group">
                <label for="inputEmail3"
                       class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}:</label>

                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                    <input class="hidden" name="id[]" value="{{ $terminal->id }}">
                    <input class="hidden" name="price[]" value="{{ $terminal->btbuy }}">
                    <input class="hidden" name="name[]" value="{{ $terminal->item_name }}">
                    <select class="form-control" name="qty[]">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>19</option>
                    </select>
                </div>
                @if($terminal->info_view==1)
                    <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                       data-toggle="popover" title="{{ $terminal->item_name }}" data-placement="right" data-html="true"
                       data-content="<?php if($terminal->image) {?><img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'><?php } ?>
                   <p>{{ $terminal->info_description }}</p>"
                       data-animation="true"></i>
                @endif
                @if(count($terminal->upgrades)>0)
                    <i class="fa fa-plus-circle fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                       onclick="showUpgrades('{{ $terminal->item_name }}', {{ $terminal->upgrades }})"></i>
                @endif
            </div>
        @endforeach
    </div>


    <h4 class="col-lg-12 col-md-12"><strong>Additional Feature Licenses:</strong> The following licenses are able to be
        added to your BT Bundle</h4>

    <div class="col-md-12 col-lg-6">

        <?php
        $total_terminals = count($feature_license);
        $divided_terminals = $total_terminals / 2;
        $half_terminals = round($divided_terminals);
        $i = 1;
        $x = $half_terminals;
        ?>

            @foreach($base_app as $terminal)
            <div class="form-group">
                <label for="inputEmail3"
                       class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}:</label>

                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                    <input class="hidden" name="id[]" value="{{ $terminal->id }}">
                    <input class="hidden" name="price[]" value="{{ $terminal->btbuy }}">
                    <input class="hidden" name="name[]" value="{{ $terminal->item_name }}">
                    <select class="form-control" name="qty[]">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>19</option>
                    </select>
                </div>
                @if($terminal->info_view==1)
                    <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                       data-toggle="popover" title="{{ $terminal->item_name }}" data-placement="right" data-html="true"
                       data-content="<?php if($terminal->image) {?><img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'><?php } ?>
                   <p>{{ $terminal->info_description }}</p>"
                       data-animation="true"></i>
                @endif
                @if(count($terminal->upgrades)>0)
                    <i class="fa fa-plus-circle fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                       onclick="showUpgrades('{{ $terminal->item_name }}', {{ $terminal->upgrades }})"></i>
                @endif
            </div>
            <?php if ($i++ == $half_terminals) break; ?>
        @endforeach
    </div>

    <div class="col-md-12 col-lg-6">
        @foreach($feature_license as $k => $terminal)
            <?php if ($k < $x) continue; ?>
            <div class="form-group">
                <label for="inputEmail3"
                       class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}:</label>

                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                    <input class="hidden" name="id[]" value="{{ $terminal->id }}">
                    <input class="hidden" name="price[]" value="{{ $terminal->btbuy }}">
                    <input class="hidden" name="name[]" value="{{ $terminal->item_name }}">
                    <select class="form-control" name="qty[]">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>19</option>
                    </select>
                </div>
                @if($terminal->info_view==1)
                <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                   data-toggle="popover" title="{{ $terminal->item_name }}" data-placement="right" data-html="true"
                   data-content="<?php if($terminal->image) {?><img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'><?php } ?>
                   <p>{{ $terminal->info_description }}</p>"
                   data-animation="true"></i>
                @endif
                @if(count($terminal->upgrades)>0)
                    <i class="fa fa-plus-circle fa-2x" style="padding-left: 7px; padding-top: 4px; color: #58678F"
                       onclick="showUpgrades('{{ $terminal->item_name }}', {{ $terminal->upgrades }})"></i>
                @endif
                @if($terminal->warning_view==1)
                    <i class="fa fa-exclamation-circle fa-2x" style="padding-top: 4px; color: #ff0000"
                       data-toggle="popover" title="{{ $terminal->item_name }}" data-placement="right" data-html="true"
                       data-content="<?php if($terminal->image) {?><img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'><?php } ?>
                   <p>{{ $terminal->warning_description }}</p>"
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
<button onclick="serverNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                             aria-hidden="true"></span></button>
<script>
    $("#licences :input").change(function () {
        var inputValues = [];
        $("#licences option:selected").each(function () {
            inputValues.push($(this).val());
        });
        console.log("inputValues:=" + inputValues);

        var total = 0;
        for (var i = 0; i < inputValues.length; i++) {
            total += inputValues[i] << 0;
        }
        var licence_users = $(".licence_users_hidden").val();
        var licenseNeeded = (licence_users - total);
        $(".licence_users").val(licenseNeeded);

        if ($(".licence_users").val() < 0) {
            //$("#licences :input").prop('disabled', 'disabled');
            $("#bar").removeClass('bg-info').addClass('bg-danger');
            alert("All additional user licenses have been exhausted");

        } else {
            $("#bar").removeClass('bg-danger').addClass('bg-info');
            $("#licences :input").prop('disabled', false);
        }
        console.log("inputs:=" + total);
        console.log("licence users:=" + licence_users);
        console.log("licence needed:=" + licenseNeeded);
    });

    function homePrev() {
        $('.nav-tabs a[href="#bundle-home"]').tab('show');
    }

    function serverNext() {
        $("#tick-software").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#servers"]').tab('show');

        var formDataLan = $("#nav-software").serializeArray();
        var URL = $("#nav-software").attr("action");
        console.log(formDataLan);
        $.post(URL,
                formDataLan,
                function (data, textStatus, jqXHR) {
                    $('#reload_cart').load('/cart_reload');
                    $http.get("#")
                            .then(function (response) {
                            }).fail(function (jqXHR, textStatus, errorThrown) {
                                console.log(errorThrown);
                            });
                });
    }
</script>


