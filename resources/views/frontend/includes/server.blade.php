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
                @foreach($base_app as $terminal)
                    <div class="form-group hidden">
                        <label for="inputEmail3"
                               class="col-xs-3 col-sm-4 col-md-4 col-lg-7 control-label">{{ $terminal->item_name }}
                            :</label>

                        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-3">
                            <input class="hidden" value="{{ $terminal->id }}">
                            <input class="hidden" value="{{ $terminal->btbuy }}">
                            <input class="hidden" value="{{ $terminal->item_name }}">
                            <input class="hidden" value="1">
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
                @endforeach

                <div class="form-group">
                    <label for="inputEmail3" class="col-lg-3 control-label">Channel Quantity:</label>

                    <div class="col-lg-2">
                        <input name="channel_qty" type="number" class="form-control">
                    </div>
                </div>

                <h4 class="col-lg-offset-2">Please select from one of the following <strong class="blue">SIP
                        Proxy</strong> Server Build options:</h4>

                <div class="form-group">
                    <label for="inputEmail3" class="col-lg-3 control-label">Server Format:</label>

                    <div class="col-lg-2">
                        <select name="server_form" class="form-control">
                            <option value="rack_mount">Rack Mount</option>
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
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
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
            <div class="pull-right col-lg-1">
                <button id="find_server" class="btn btn-info">Add to quote</button>
        </div>
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
    //    var app = angular.module('myApp', []);
    //    app.controller('myCtrl', function ($scope, $http) {
    //    $("#find_server").click(function () {
    //        var formData = $("#server_post").serializeArray();
    //        var URL = $("#server_post").attr("action");
    //        console.log(formData);
    //        $.post(URL,
    //                formData,
    //                function (data, textStatus, jqXHR){
    //                    $http.get("/server_list/" + data.channel_qty + "/" + data.server_form + "/" + data.raid)
    //                            .then(function (response) {
    //                                console.log(response.data.server);
    //
    //                            });
    //
    //
    //                }).fail(function (jqXHR, textStatus, errorThrown) {
    //                    console.log(errorThrown);
    //                });
    //    });
    //    });

    $(document).ready(function () {
        $('#sipapp').on('show.bs.collapse', function () {
            $(".blue").addClass('text-info');
        });
        $('#sipapp').on('hide.bs.collapse', function () {
            $(".blue").removeClass('text-info');
        });
    });


    function softwarePrev() {
        $('.nav-tabs a[href="#software"]').tab('show');
    }

    function terminalsNext() {
        $("#tick-servers").addClass('animated fadeIn').removeClass('hidden');
        $('.nav-tabs a[href="#terminals"]').tab('show');
    }
</script>





