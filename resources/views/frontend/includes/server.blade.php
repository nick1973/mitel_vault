<div class="form-group col-lg-12">
    <h4 class="col-lg-8 col-md-7"><strong>BT Server & Applications: </strong>Do you require a Server & Applications from
        BT?</h4>

    <div class="col-sm-1">
        <div class="onoffswitch">
            <input name="" type="hidden" value="No">
            <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                   id="switch-server"
                   onclick="visible(this.id,'nav-server')" checked>
            <label for="switch-server" class="onoffswitch-label">
                <div class="onoffswitch-inner"></div>
                <div class="onoffswitch-switch"></div>
            </label>
        </div>
    </div>
</div>
<br/>
<div id="nav-server">
    <div class="form-group col-lg-12">
        <h4 class="col-lg-8 col-md-7">Do you require a <strong>BT Gateway Server</strong> & associated applications?
        </h4>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                       id="switch-gateway"
                       onclick="visible(this.id,'gateway')">
                <label for="switch-gateway" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
        </div>
    </div>
    <br/>

    <div id="gateway" class="collapse">
        <div class="form-group col-lg-12">
            <h4 class="col-lg-offset-2 col-lg-3 blue"><strong>SIP Proxy</strong></h4>

            <div class="col-sm-1">
                <div class="onoffswitch">
                    <input name="" type="hidden" value="No">
                    <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                           id="switch-sipapp"
                           onclick="visible(this.id,'sipapp')">
                    <label for="switch-sipapp" class="onoffswitch-label">
                        <div class="onoffswitch-inner"></div>
                        <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </div>
        </div>
        <br/>

        <div id="sipapp" class="form-group col-lg-12 collapse">
            <form id="server_post" class="form-horizontal animated fadeIn" action="/server_post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-lg-3 control-label">Channel Quantity:</label>
                    <div class="col-lg-2">
                        <input id="channel_qty" name="channel_qty" type="number" class="form-control" min="0">
                    </div>
                </div>

                <h4 class="col-lg-offset-2">Please select from one of the following <strong class="blue">SIP
                        Proxy</strong> Server Build options:</h4>

                <div class="form-group">
                    <label for="inputEmail3" class="col-lg-3 control-label">Server Format:</label>

                    <div class="col-lg-2">
                        <select name="form_factor" class="form-control">
                            <option value="rack">Rack</option>
                            <option value="tower">Tower</option>
                        </select>
                    </div>
                    <div class="col-lg-1">
                        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                           data-toggle="popover" title="" data-placement="right" data-html="true"
                           data-content=""
                           data-animation="true"></i>
                    </div>
                    <label for="inputEmail3" class="col-lg-3 control-label">Data Redundancy (RAID1):</label>

                    <div class="col-lg-2">
                        <select name="raid" class="form-control">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="col-lg-1">
                        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                           data-toggle="popover" title="" data-placement="right" data-html="true"
                           data-content=""
                           data-animation="true"></i>
                    </div>
                </div>
            </form>

            <div class="col-lg-8">
                <h4>When above is selected your server will appear below
                    <button id="find_server" class="btn btn-warning">Find my Server</button>
                </h4>
            </div>
            <table class="table hidden hide_table" style="width:100%">
                <tr class="info">
                    <th>Server Name</th>
                    <th>Max Users</th>
                    <th>Server Form</th>
                    <th>RAID</th>
                    <th>UPS</th>
                    <th></th>
                </tr>
                <tr>
                    <td class="server_name"></td>
                    <td class="max_server_users"></td>
                    <td class="form_factor"></td>
                    <td class="raid"></td>
                    <td class="psu_redundancy"></td>
                    <td>
                        <button onclick="addtoquote('server-post')" class="btn btn-info">Add to quote</button>
                    </td>
                </tr>
            </table>
            <form id="server-post" class="form-horizontal animated fadeIn" action="/hardware_post">
                <input class="hidden server_id" name="id[]">
                <input class="hidden server_btbuy" name="price[]">
                <input class="hidden server_name" name="name[]">
                <input class="hidden" name="qty[]" value="1">
                @foreach($base_app as $terminal)
                    <div class="form-group hidden">
                        <input name="id[]" class="" value="{{ $terminal->id }}">
                        <input name="price[]" class="" value="{{ $terminal->btbuy }}">
                        <input name="name[]" class="" value="{{ $terminal->item_name }}">
                        <input name="qty[]" class="" value="1">
                    </div>
                @endforeach
                @foreach($sip_proxy as $terminal)
                    <div class="form-group hidden">
                        <input name="id[]" class="" value="{{ $terminal->id }}">
                        <input name="price[]" class="" value="{{ $terminal->btbuy }}">
                        <input name="name[]" class="" value="{{ $terminal->item_name }}">
                        <input name="qty[]" class="channel_qty">
                    </div>
                @endforeach
            </form>
        </div>
        <div class="form-group col-lg-12">
            <h4 class="col-lg-offset-2 col-lg-3"><strong>Teleworker</strong></h4>

            <div class="col-sm-1">
                <div class="onoffswitch">
                    <input name="" type="hidden" value="No">
                    <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                           id="switch-teleworker"
                           onclick="visible(this.id,'teleworker')">
                    <label for="switch-teleworker" class="onoffswitch-label">
                        <div class="onoffswitch-inner"></div>
                        <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </div>
        </div>
        <br/>

        <div id="teleworker" class="form-group col-lg-12 collapse">
            <form id="teleworker_post" class="form-horizontal animated fadeIn" action="/server_post">

                <div class="col-md-12 col-lg-6">

                    <?php
                    $total_terminals = count($teleworker);
                    $divided_terminals = $total_terminals / 2;
                    $half_terminals = round($divided_terminals);
                    $i = 1;
                    $x = $half_terminals;
                    ?>

                    @foreach($teleworker as $terminal)
                        <?php
                        preg_match_all('!\d+!', $terminal->item_name, $matches);
                        $num = $matches[0][0];
                        //echo $num;
                        ?>
                        <div class="form-group">
                            <label for="inputEmail3"
                                   class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}
                                :</label>

                            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                                <input name="id[]" class="hidden" value="{{ $terminal->id }}">
                                <input name="price[]" class="hidden" value="{{ $terminal->btbuy }}">
                                <input name="name[]" class="hidden" value="{{ $terminal->item_name }}">
                                <input id="id{{$num}}" onchange="multiply({{$num}})" class="form-control" min="0"
                                       type="number" value="0" name="qty[]">
                                <input id="val{{$num}}" class="form-control val{{$num}} hidden" value="0">
                            </div>
                            @if($terminal->info_view==1)
                                <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                                   data-toggle="popover" title="{{ $terminal->item_name }}" data-placement="right"
                                   data-html="true"
                                   data-content="<?php if($terminal->image) {?><img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'><?php } ?>
                   <p>{{ $terminal->info_description }}</p>"
                                   data-animation="true"></i>
                            @endif
                            @if(count($terminal->upgrades)>0)
                                <i class="fa fa-plus-circle fa-2x"
                                   style="padding-left: 7px; padding-top: 4px; color: #58678F"
                                   onclick="showUpgrades('{{ $terminal->item_name }}', {{ $terminal->upgrades }})"></i>
                            @endif
                        </div>
                        <?php if ($i++ == $half_terminals) break; ?>
                    @endforeach
                </div>

                <div class="col-md-12 col-lg-6">
                    @foreach($teleworker as $k => $terminal)
                        <?php
                        if ($k < $x) continue;
                        preg_match_all('!\d+!', $terminal->item_name, $matches);
                        $num = $matches[0][0];
                        //echo $num;
                        ?>
                        <div class="form-group">
                            <label for="inputEmail3"
                                   class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}
                                :</label>

                            <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                                <input name="id[]" class="hidden" value="{{ $terminal->id }}">
                                <input name="price[]" class="hidden" value="{{ $terminal->btbuy }}">
                                <input name="name[]" class="hidden" value="{{ $terminal->item_name }}">
                                <input id="id{{$num}}" onchange="multiply({{$num}})" class="form-control" min="0"
                                       type="number" value="0">
                                <input id="val{{$num}}" class="form-control val{{$num}} hidden" value="0">
                            </div>
                            @if($terminal->info_view==1)
                                <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                                   data-toggle="popover" title="{{ $terminal->item_name }}" data-placement="right"
                                   data-html="true"
                                   data-content="<?php if($terminal->image) {?><img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'><?php } ?>
                   <p>{{ $line->info_description }}</p>"
                                   data-animation="true"></i>
                            @endif
                            @if(count($terminal->upgrades)>0)
                                <i class="fa fa-plus-circle fa-2x"
                                   style="padding-left: 7px; padding-top: 4px; color: #58678F"
                                   onclick="showUpgrades('{{ $terminal->item_name }}', {{ $terminal->upgrades }})"></i>
                            @endif
                            @if($terminal->warning_view==1)
                                <i class="fa fa-exclamation-circle fa-2x" style="padding-top: 4px; color: #ff0000"
                                   data-toggle="popover" title="{{ $terminal->item_name }}" data-placement="right"
                                   data-html="true"
                                   data-content="<?php if($terminal->image) {?><img height='200px' alt='/{{ $terminal->item_name }}' src='/{{ $terminal->image }}'><?php } ?>
                   <p>{{ $terminal->warning_description }}</p>"
                                   data-animation="true"></i>
                            @endif
                        </div>
                    @endforeach
                </div>

                <h4 class="col-lg-offset-2">Please select from one of the following <strong
                            class="blue">Teleworker</strong> Server Build options:</h4>

                <div class="form-group">
                    <label for="inputEmail3" class="col-lg-3 control-label">Server Format:</label>
                    <input class="channel_qty hidden" name="channel_qty">

                    <div class="col-lg-2">
                        <select name="form_factor" class="form-control">
                            <option value="rack">Rack</option>
                            <option value="tower">Tower</option>
                        </select>
                    </div>
                    <div class="col-lg-1">
                        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                           data-toggle="popover" title="" data-placement="right" data-html="true"
                           data-content=""
                           data-animation="true"></i>
                    </div>
                    <label for="inputEmail3" class="col-lg-3 control-label">Data Redundancy (RAID1):</label>

                    <div class="col-lg-2">
                        <select name="raid" class="form-control">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="col-lg-1">
                        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                           data-toggle="popover" title="" data-placement="right" data-html="true"
                           data-content=""
                           data-animation="true"></i>
                    </div>
                </div>
            </form>

            <div class="col-lg-8">
                <h4>When above is selected your server will appear below
                    <button id="find_server_teleworker" class="btn btn-warning">Find my Server</button>
                </h4>
            </div>
            <table id="hide_teleworker_table" class="table hidden" style="width:100%">
                <tr class="info">
                    <th>Server Name</th>
                    <th>Max Users</th>
                    <th>Server Form</th>
                    <th>RAID</th>
                    <th>UPS</th>
                    <th></th>
                </tr>
                <tr>
                    <td class="server_name"></td>
                    <td class="max_server_users"></td>
                    <td class="form_factor"></td>
                    <td class="raid"></td>
                    <td class="psu_redundancy"></td>
                    <td>
                        <button onclick="addtoquote('teleworker-post')" class="btn btn-info">Add to quote</button>
                    </td>
                </tr>
            </table>
            <form id="teleworker-post" class="form-horizontal animated fadeIn" action="/hardware_post">
                <input class="hidden server_id" name="id[]">
                <input class="hidden server_btbuy" name="price[]">
                <input class="hidden server_name" name="name[]">
                <input class="hidden" name="qty[]" value="1">
                @foreach($teleworker as $k => $terminal)
                    <div class="form-group hidden">
                        <input name="id[]" class="" value="{{ $terminal->id }}">
                        <input name="price[]" class="" value="{{ $terminal->btbuy }}">
                        <input name="name[]" class="" value="{{ $terminal->item_name }}">
                        <input id="tw_service{{ $k }}" name="qty[]" class="" value="0">
                        {{ $k }}
                    </div>
                @endforeach
                @foreach($base_app as $terminal)
                    <div class="form-group hidden">
                        <input name="id[]" class="" value="{{ $terminal->id }}">
                        <input name="price[]" class="" value="{{ $terminal->btbuy }}">
                        <input name="name[]" class="" value="{{ $terminal->item_name }}">
                        <input name="qty[]" class="" value="1">
                    </div>
                @endforeach
                {{--@foreach($sip_proxy as $terminal)--}}
                {{--<div class="form-group hidden">--}}
                {{--<input name="id[]" class="" value="{{ $terminal->id }}">--}}
                {{--<input name="price[]" class="" value="{{ $terminal->btbuy }}">--}}
                {{--<input name="name[]" class="" value="{{ $terminal->item_name }}">--}}
                {{--<input name="qty[]" class="channel_qty">--}}
                {{--</div>--}}
                {{--@endforeach--}}
            </form>
        </div>

        <div class="form-group col-lg-12">
            <h4 class="col-lg-offset-2 col-lg-3"><strong>Web Proxy</strong></h4>

            <div class="col-sm-1">
                <div class="onoffswitch">
                    <input name="" type="hidden" value="No">
                    <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                           id="switch-webproxy"
                           onclick="visible(this.id,'webproxy')">
                    <label for="switch-webproxy" class="onoffswitch-label">
                        <div class="onoffswitch-inner"></div>
                        <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </div>
        </div>
        <br/>

        <div id="webproxy" class="form-group col-lg-12 collapse">
            <form id="web_proxy_post" class="form-horizontal animated fadeIn" action="/server_post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-lg-3 control-label">Web Video User Quantity:</label>

                    <div class="col-lg-2">
                        <input id="web_proxy_qty" name="channel_qty" type="number" class="form-control" min="0">
                    </div>
                </div>

                <h4 class="col-lg-offset-2">Please select from one of the following <strong class="blue">SIP
                        Proxy</strong> Server Build options:</h4>

                <div class="form-group">
                    <label for="inputEmail3" class="col-lg-3 control-label">Server Format:</label>

                    <div class="col-lg-2">
                        <select name="form_factor" class="form-control">
                            <option value="rack">Rack</option>
                            <option value="tower">Tower</option>
                        </select>
                    </div>
                    <div class="col-lg-1">
                        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                           data-toggle="popover" title="" data-placement="right" data-html="true"
                           data-content=""
                           data-animation="true"></i>
                    </div>
                    <label for="inputEmail3" class="col-lg-3 control-label">Data Redundancy (RAID1):</label>

                    <div class="col-lg-2">
                        <select name="raid" class="form-control">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="col-lg-1">
                        <i class="fa fa-info-circle fa-2x" style="padding-top: 4px; color: #58678F"
                           data-toggle="popover" title="" data-placement="right" data-html="true"
                           data-content=""
                           data-animation="true"></i>
                    </div>
                </div>
            </form>

            <div class="col-lg-8">
                <h4>When above is selected your server will appear below
                    <button id="find_server_web_proxy" class="btn btn-warning">Find my Server</button>
                </h4>
            </div>
            <table id="hide_web_proxy_post_table" class="table hidden" style="width:100%">
                <tr class="info">
                    <th>Server Name</th>
                    <th>Max Users</th>
                    <th>Server Form</th>
                    <th>RAID</th>
                    <th>UPS</th>
                    <th></th>
                </tr>
                <tr>
                    <td class="server_name"></td>
                    <td class="max_server_users"></td>
                    <td class="form_factor"></td>
                    <td class="raid"></td>
                    <td class="psu_redundancy"></td>
                    <td>
                        <button onclick="addtoquote('web-proxy-post')" class="btn btn-info">Add to quote</button>
                    </td>
                </tr>
            </table>
            <form id="web-proxy-post" class="form-horizontal animated fadeIn" action="/hardware_post">
                <input class="hidden server_id" name="id[]">
                <input class="hidden server_btbuy" name="price[]">
                <input class="hidden server_name" name="name[]">
                <input class="hidden" name="qty[]" value="1">
                @foreach($base_app as $terminal)
                    <div class="form-group hidden">
                        <input name="id[]" class="" value="{{ $terminal->id }}">
                        <input name="price[]" class="" value="{{ $terminal->btbuy }}">
                        <input name="name[]" class="" value="{{ $terminal->item_name }}">
                        <input name="qty[]" class="" value="1">
                    </div>
                @endforeach
                @foreach($web_proxy as $terminal)
                    <div class="form-group hidden">
                        <input name="id[]" class="" value="{{ $terminal->id }}">
                        <input name="price[]" class="" value="{{ $terminal->btbuy }}">
                        <input name="name[]" class="" value="{{ $terminal->item_name }}">
                        <input name="qty[]" class="channel_qty">
                    </div>
                @endforeach
            </form>
        </div>

        <div class="form-group col-lg-12">
            <h4 class="col-lg-offset-2 col-lg-3"><strong>SIP Proxy & Web Proxy</strong></h4>

            <div class="col-sm-1">
                <div class="onoffswitch">
                    <input name="" type="hidden" value="No">
                    <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                           id="switch-sipwebproxy"
                           onclick="visible(this.id,'sipwebproxy')">
                    <label for="switch-sipwebproxy" class="onoffswitch-label">
                        <div class="onoffswitch-inner"></div>
                        <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </div>
        </div>
        <br/>

        <div class="form-group col-lg-12">
            <h4 class="col-lg-offset-2 col-lg-3"><strong>Teleworker & Web Proxy</strong></h4>

            <div class="col-sm-1">
                <div class="onoffswitch">
                    <input name="" type="hidden" value="No">
                    <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                           id="switch-telewebproxy"
                           onclick="visible(this.id,'telewebproxy')">
                    <label for="switch-telewebproxy" class="onoffswitch-label">
                        <div class="onoffswitch-inner"></div>
                        <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </div>
        </div>
        <br/>
    </div>

    <div class="form-group col-lg-12">
        <h4 class="col-lg-8 col-md-7">Do you require a <strong>BT LAN Server</strong> & associated applications?</h4>

        <div class="col-sm-1">
            <div class="onoffswitch">
                <input name="" type="hidden" value="No">
                <input type="checkbox" value="Yes" name="peripheral" class="toggleBtn onoffswitch-checkbox"
                       id="switch-lan"
                       onclick="visible(this.id,'lan')">
                <label for="switch-lan" class="onoffswitch-label">
                    <div class="onoffswitch-inner"></div>
                    <div class="onoffswitch-switch"></div>
                </label>
            </div>
            </div>
        </div>
    <br/>


</div>
<button onclick="softwarePrev()" class="btn btn-default pull-left"><span class="glyphicon glyphicon-hand-left"
                                                                         aria-hidden="true"></span> Previous
</button>
<button onclick="terminalsNext()" class="btn btn-success pull-right">Next <span class="glyphicon glyphicon-hand-right"
                                                                                aria-hidden="true"></span></button>
<script>
    var gTotal = [0];
    function multiply(val) {

        var foo = $("#id" + val).val();
        var total = foo * val;
        $(".val" + val).val(total);
    }

    $("#channel_qty").click(function () {
        var channel_qty = $("#channel_qty").val();
        $(".channel_qty").val(channel_qty);
    });

    $("#web_proxy_qty").click(function () {
        var channel_qty = $("#web_proxy_qty").val();
        $(".channel_qty").val(channel_qty);
    });

    $(document).ready(function () {
        $('#sipapp').on('show.bs.collapse', function () {
            $(".blue").addClass('text-info');
        });
        $('#sipapp').on('hide.bs.collapse', function () {
            $(".blue").removeClass('text-info');
        });

        $("#id1").change(function () {
            addUsers();
        });

        $("#id10").change(function () {
            addUsers();
        });

        $("#id50").change(function () {
            addUsers();
        });

        $("#id100").change(function () {
            addUsers();
        });

        function addUsers() {
            var user1 = $("#val1").val();
            var user2 = $("#val50").val();
            var user3 = $("#val10").val();
            var user4 = $("#val100").val();
            //single values
            $("#tw_service0").val($("#id1").val());
            $("#tw_service1").val($("#id10").val());
            $("#tw_service2").val($("#id50").val());
            $("#tw_service3").val($("#id100").val());

            user1 = parseInt(user1);
            user2 = parseInt(user2);
            user3 = parseInt(user3);
            user4 = parseInt(user4);
            channel_qty = user1 + user2 + user3 + user4;
            $(".channel_qty").val(channel_qty);

        }

    });

    function addtoquote(id) {
        var formData = $("#" + id).serializeArray();
        var URL = $("#" + id).attr("action");
        console.log(formData);
        $.post(URL,
                formData,
                function (data, textStatus, jqXHR) {
                    $('#reload_cart').load('/cart_reload');
                });
    }

    function softwarePrev() {
        $('.nav-tabs a[href="#software"]').tab('show');
    }

    function terminalsNext() {
        $("#tick-servers").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#terminals"]').tab('show');
    }
</script>





