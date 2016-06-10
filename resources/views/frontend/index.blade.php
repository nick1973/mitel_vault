@extends('frontend.layouts.master')

@section('content')
    <style>
        .collapsing {
            transition: height 1.0s;
        }
    </style>
    <script>
        function visible(button, id) {
            if ($("#" + button).prop('checked') == true) {
                $("#" + button).attr({
                    "data-toggle": 'collapse',
                    "data-target": '#' + id,
                    "data-target": '#' + id,
                    "aria-expanded": 'false',
                    "aria-controls": '#' + id
                });

                $("#" + id).removeClass('fadeOut').addClass('fadeIn').delay("slow");
            }
            else if ($("#" + button).prop('checked') == false) {
                $("#" + id).removeClass('fadeIn').addClass('fadeOut').delay("slow");
            }
            ;
        }
        ;

        $(document).ready(function () {
            $(".collapse1").collapse('show');
            $(".expand").removeClass('col-lg-4 col-md-4 col-sm-4');
            $(".expand").addClass('col-lg-8 col-md-6 col-sm-6');
            $("#collapse2").collapse('show');

//            $("#toggle-button").html('<span class="glyphicon glyphicon-collapse-down"></span> Hide Order Overview');

            $("#collapse2").on("show.bs.collapse", function () {
//                $("#toggle-button").html('<span class="glyphicon glyphicon-collapse-up"></span> Show Order Overview');

                $(".expand").removeClass('col-lg-4 col-md-4 col-sm-4');
                $(".expand").addClass('col-lg-8 col-md-8 col-sm-8');
                $(".collapse1").collapse('show');
                $("#collapse3").collapse('hide');

            });
            $("#collapse2").on("hide.bs.collapse", function () {
//                $("#toggle-button").html('<span class="glyphicon glyphicon-collapse-down"></span> Hide Order Overview');
                $(".expand").removeClass('col-lg-8 col-md-8 col-sm-8');
                $(".expand").addClass('col-lg-4 col-md-4 col-sm-4');
                $(".collapse1").collapse('show');
                $("#collapse3").collapse('show');
            });

            $('#overview-button').click(function () {
                $('#overview-button').removeClass('btn-info');
                $('#overview-button').addClass('btn-success');
            });
        });

        function emptyCart() {
            $('#reload_cart').load('/empty_cart');
            $('#overview-button').removeClass('animated bounce btn-info');
            $("#tick-bundle").removeClass('animated fadeIn').addClass('hidden');
        }
        ;

        function remove_item(id) {
            $('#reload_cart').load('/remove_bundle_cart/' + id);
            //$( "#but" ).trigger( "click" );
            $('#overview-button').removeClass('animated bounce btn-info');
            $("#tick-bundle").removeClass('animated fadeIn').addClass('hidden');
        }
        ;


        function confirm_bundle() {
            $('#overview-button').addClass('animated bounce btn-info');
            $('#overview-button').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
                    function () {
                        $('#overview-button').removeClass('animated bounce');
                    });
            $("#tick-bundle-home").addClass('animated fadeIn').removeClass('hidden');
            $('.nav-tabs a[href="#hardware"]').tab('show');
            $('#reload_cart').load('/cart_reload');
        }
        ;

        var app = angular.module('myApp', []);
        app.controller('myCtrl', function ($scope, $http) {

            $("#but").click(function () {

                var $btn = $(this).button('loading');
                var formData = $("#bundle_post").serializeArray();
                var URL = $("#bundle_post").attr("action");
                var users = formData[1]['value'];
                //console.log(users);
                $.post(URL,
                        formData,
                        function (data, textStatus, jqXHR) {
                            $http.get("/bundle_list/" + data.line_type + "/" + data.users + "/" + data.lan)
                                    .then(function (response) {
                                        $scope.content = response.data.bundle;
                                        //console.log(response.data.bundle_products);
                                        if (typeof response.data.bundle !== 'undefined') {

                                            $('#chosen_bundle').removeClass('hidden').addClass('animated pulse');
                                            var standard_license = response.data.bundle['standard_license'];
                                            $("#standard_license").val(standard_license);
                                            var vm_license = response.data.bundle['vm_license'];
                                            $("#vm_license").val(vm_license);
                                            var multi_user_license = response.data.bundle['multi_user_license'];
                                            $("#multi_user_license").val(multi_user_license);

                                            var port_users = response.data.bundle['lan_ports'];
                                            //$("#chosen_bundle").addClass('animated pulse');
                                            $('#chosen_bundle').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
                                                    function () {
                                                        $('#chosen_bundle').removeClass('animated pulse');
                                                    });
                                            $(".port_users").val(users);
                                            $(".bundle_users").val(response.data.bundle['users'])
                                            $(".bundle_name").val(response.data.bundle['name'])
                                            $(".bundle_bri_lines").val(response.data.bundle['bri_lines'])
                                            $(".bundle_pri_lines").val(response.data.bundle['pri_lines'])
                                            $(".bundle_sip_lines").val(response.data.bundle['sip_lines'])
                                            $(".bundle_analogue_lines").val(response.data.bundle['analogue_lines'])
                                            $(".bundle_standard_license").val(response.data.bundle['standard_license'])
                                            $(".bundle_multi_license").val(response.data.bundle['multi_user_license'])
                                            $(".bundle_vm_license").val(response.data.bundle['vm_license'])
                                            $(".bundle_ports").val(response.data.bundle['lan_ports'])

                                            if (typeof response.data.bundle_upgrades !== 'undefined') {
                                                //bundle_upgrades
                                                $("#upgrade_button").hide();
                                                if (response.data.bundle_upgrades.length > 0) {
                                                    $("#upgrade_button").show();
                                                }

                                                var upgrades = response.data.bundle_upgrades;
                                                $("#bundle_upgrades").empty();
                                                jQuery.each(upgrades, function (index, value) {
                                                    var li = "<li>";
                                                    $("#bundle_upgrades").append(li.concat(value['item_name']));
                                                });
                                            }
                                        }
                                        else {
                                            $('#no_results').modal('show');
                                            //alert("BOO");
                                        }
                                        var remaining_users = port_users - users;
                                        $(".remaining-users").val(remaining_users);
                                        //console.log("Remaining" + remaining_users);
                                        $btn.button('reset');
                                    });

                            //console.log(jQuery.isEmptyObject({}));

                            //Button Formatting Control.
                            $btn.button('reset');

                        }).fail(function (jqXHR, textStatus, errorThrown) {
                            console.log(errorThrown);
                        });
            });

        });
    </script>
    {{--<p>{{$cart}}</p>--}}
            <ol class="breadcrumb">
                <li>PBX: <span>MiVB</span></li>
                <li>QUOTE TYPE: <span>New</span></li>
                <li>BUNDLE TYPE: <span>Bundle</span></li>
            </ol>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                          data-toggle="tab">Originator / Customer Details
                        <span id="tick-customer-details" class="hidden">
                            <img src="/images/tick.png" height="18px">
                        </span></a></li>
                <li role="presentation"><a href="#bundle" aria-controls="bundle" role="tab" data-toggle="tab">Bundle
                    <span id="tick-bundle" class="hidden">
                            <img src="/images/tick.png" height="18px">
                        </span>
                    </a></li>
            </ul>

            <!-- Tab panes -->
    <div class="tab-content" id="product-tabs">

                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            @include('frontend.includes.customer_details')
                        </div>

                <div role="tabpanel" class="tab-pane fade" id="bundle" class="col-lg-12 col-md-12 col-sm-12" style="padding-top: 15px">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#bundle-home" aria-controls="bundle-home" role="tab" data-toggle="tab">System
                                Bundle
                                <span id="tick-bundle-home" class="hidden">
                                    <img src="/images/tick.png" height="18px">
                                </span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#hardware" aria-controls="hardware" role="tab" data-toggle="tab">System Hardware
                                <span id="tick-hardware" class="hidden">
                                    <img src="/images/tick.png" height="18px">
                                </span>
                            </a>
                        </li>
                        <li role="presentation"><a href="#lan-data" aria-controls="lan-data" role="tab"
                                                   data-toggle="tab">System LAN
                            <span id="tick-lan-data" class="hidden">
                                    <img src="/images/tick.png" height="18px">
                                </span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#software" aria-controls="software" role="tab" data-toggle="tab">System Licenses
                            <span id="tick-software" class="hidden">
                                    <img src="/images/tick.png" height="18px">
                                </span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#servers" aria-controls="servers" role="tab" data-toggle="tab">Server/Licenses
                            <span id="tick-servers" class="hidden">
                                    <img src="/images/tick.png" height="18px">
                                </span>
                            </a>
                        </li>
                        <li role="presentation"><a href="#terminals" aria-controls="terminals" role="tab"
                                                   data-toggle="tab">Terminals
                            <span id="tick-terminals" class="hidden">
                                    <img src="/images/tick.png" height="18px">
                                </span>
                            </a>
                        </li>

                        <li role="presentation"><a href="#peripherals" aria-controls="peripherals" role="tab"
                                                   data-toggle="tab">Peripherals
                            <span id="tick-peripherals" class="hidden">
                                    <img src="/images/tick.png" height="18px">
                                </span>
                            </a>
                        </li>
                        <li role="presentation"><a href="#training" aria-controls="training" role="tab"
                                                   data-toggle="tab">Training
                            <span id="tick-training" class="hidden">
                                    <img src="/images/tick.png" height="18px">
                                </span>
                            </a>
                        </li>
                        <li role="presentation"><a href="#remote" aria-controls="remote" role="tab" data-toggle="tab">Teleworker
                            <span id="tick-remote" class="hidden">
                                    <img src="/images/tick.png" height="18px">
                                </span>
                            </a>
                        </li>
                        <li role="presentation"><a href="#install" aria-controls="install" role="tab" data-toggle="tab">Install
                            <span id="tick-install" class="hidden">
                                    <img src="/images/tick.png" height="18px">
                                </span>
                            </a>
                        </li>
                        <li role="presentation"><a href="#support" aria-controls="support" role="tab" data-toggle="tab">Support
                            <span id="tick-support" class="hidden">
                                    <img src="/images/tick.png" height="18px">
                                </span>
                            </a>
                        </li>
                        <li role="presentation"><a href="#maint" aria-controls="maint" role="tab" data-toggle="tab">Maintenance
                            <span id="tick-maint" class="hidden">
                                    <img src="/images/tick.png" height="18px">
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <br/>

                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 15px">
                            <div class="pull-right">
                                <button type="button" class="btn btn-success hidden-xs hidden-sm hidden-md">
                                    <span class="glyphicon glyphicon-eye-open"></span> Preview BT AX
                                </button>
                                <button id="overview-button" type="button" class="btn btn-success" data-toggle="modal"
                                        data-target=".bs-example-modal-lg">
                                    <span class="glyphicon glyphicon-eye-open"></span> Preview Order Overview
                                </button>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade in active" id="bundle-home">
                            <div class="collapse fade collapse1" id="">
                                <div id="expand" class="col-lg-4 col-md-4 col-sm-4 expand">
                                    @include('frontend.includes.bundle')
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="hardware">
                            <div class="collapse fade collapse1" id="">
                                <div id="expand" class="col-lg-4 col-md-4 col-sm-4 expand">
                                    @include('frontend.includes.hardware')
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="software">
                            <div class="collapse fade collapse1" id="">
                                <div id="expand" class="col-lg-4 col-md-4 col-sm-4 expand">
                                    @include('frontend.includes.software')
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="servers">
                            <div class="collapse fade collapse1" id="">
                                <div id="expand" class="col-lg-4 col-md-4 col-sm-4 expand">
                                    @include('frontend.includes.server')
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="terminals">
                            <div class="collapse fade collapse1" id="">
                                <div id="expand" class="col-lg-4 col-md-4 col-sm-4 expand">
                                    @include('frontend.includes.terminals')
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="lan-data">
                            <div class="collapse fade collapse1" id="">
                                <div id="expand" class="col-lg-4 col-md-4 col-sm-4 expand">
                                    @include('frontend.includes.lan_data')
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="peripherals">
                            <div class="collapse fade collapse1" id="">
                                <div id="expand" class="col-lg-4 col-md-4 col-sm-4 expand">
                                    @include('frontend.peripherals.peripherals')
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="training">
                            <div class="collapse fade collapse1" id="">
                                <div id="expand" class="col-lg-4 col-md-4 col-sm-4 expand">
                                    @include('frontend.includes.training')
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="remote">
                            <div id="expand" class="col-lg-4 col-md-4 col-sm-4 expand">
                                @include('frontend.includes.remote')
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="install">
                            <div id="expand" class="col-lg-4 col-md-4 col-sm-4 expand">
                                @include('frontend.includes.install')
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="support">
                            <div id="expand" class="col-lg-4 col-md-4 col-sm-4 expand">
                                @include('frontend.includes.support')
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="maint">
                            <div id="expand" class="col-lg-4 col-md-4 col-sm-4 expand">
                                @include('frontend.includes.maint')
                            </div>
                        </div>


                        <div class="collapse fade collapse2" id="collapse2">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                @include('frontend.includes.cart_static')
                            </div>
                        </div>

                        {{--<div class="collapse fade collapse3" id="collapse3">--}}
                        {{--<div class="col-lg-4 col-md-8 col-sm-8 hidden-xs hidden-sm hidden-md">--}}
                        {{--@include('frontend.includes.col_x2')--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-4 col-md-8 col-sm-8">--}}
                        {{--@include('frontend.includes.cart_static')--}}
                        {{--</div>--}}
                        {{--</div>--}}

                    </div>
                </div>
            </div>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title " id="gridSystemModalLabel">Order Overview</h4>
                </div>
                <div class="modal-body">
                    {{--@include('frontend.includes.col_x2')--}}
                    <div class="panel panel-default">
                        {{--<div class="panel-heading">--}}
                        {{--<h3 class="panel-title">Order Overview.</h3>--}}
                        {{--</div>--}}
                        <div id="results" class="panel-body bg-info">
                            <div ng-app="myApp" ng-controller="myCtrl">
                                <p><strong>Bundle Name:</strong> @{{ content.name }}</p>

                                <p ng-show="content.analogue_lines > 0" class="ng-hide"><strong>Lines:</strong> Analogue
                                    Lines = @{{ content.analogue_lines }}</p>

                                <p ng-show="content.bri_lines > 0" class="ng-hide"><strong>Lines:</strong> BRI / ISDN 2
                                    Channels = @{{ content.bri_lines }}</p>

                                <p ng-show="content.pri_lines > 0" class="ng-hide"><strong>Lines:</strong> PRI / ISDN 30
                                    Channels = @{{ content.pri_lines }}</p>

                                <p ng-show="content.sip_lines > 0" class="ng-hide"><strong>Lines:</strong> SIP Trunks
                                    = @{{ content.sip_lines }}</p>

                                <p><strong>DN's:</strong></p>

                                <p><strong>Voicemail:</strong></p>

                                <p><strong>Standard User:</strong> @{{ content.standard_users }}</p>

                                <p><strong>Multi User:</strong></p>

                                <p><strong>External Twinning:</strong></p>

                                <p><strong>LAN/IP Ports:</strong> @{{ content.lan_ports }}</p>

                                <p><strong>Analogue Extensions:</strong> @{{ content.analogue_extensions }}</p>

                                <p><strong>Description:</strong> @{{ content.product_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="no_results" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title " id="gridSystemModalLabel">No Bundles Match Your Selection.</h4>
                </div>
                <div class="modal-body">
                    <p>Please Search Again.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <style>
        .modal-body {
            max-height: calc(100vh - 210px);
            overflow-y: auto;
        }
    </style>

@endsection

@section('after-scripts-end')
    <script>
        //Being injected from FrontendController
        console.log(test);
    </script>
@stop



