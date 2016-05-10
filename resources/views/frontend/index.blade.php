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

                $("#" + id).removeClass('fadeOut').addClass('fadeIn');
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
            $('#list_cart').load('/empty_cart');
        }
        ;

        var app = angular.module('myApp', []);
        app.controller('myCtrl', function ($scope, $http) {

            $("#but").click(function () {

                var $btn = $(this).button('loading');
                var formData = $("#myform").serializeArray();
                var URL = $("#myform").attr("action");
                $.post(URL,
                        formData,
                        function (data, textStatus, jqXHR) {
                            $http.get("/bundle_list/" + data.analogue_lines + "/" + data.analogue_extensions)
                                    .then(function (response) {
                                        $scope.content = response.data.bundle[0];

                                        if (typeof response.data.bundle[0] !== 'undefined') {
                                            $('#overview-button').addClass('animated bounce btn-info');
                                            $('#overview-button').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
                                                    function () {
                                                        $('#overview-button').removeClass('animated bounce');
                                                    });
                                            $("#tick-bundle").addClass('animated fadeIn').removeClass('hidden');
                                            $('#list_cart').load('/cart_reload');
                                        }
                                        ;
                                        console.log(response.data.bundle[0]);
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
                <li role="presentation"><a href="#bundle" aria-controls="bundle" role="tab" data-toggle="tab">Bundle</a></li>
            </ul>

            <!-- Tab panes -->
                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            @include('frontend.includes.customer_details')
                        </div>

                <div role="tabpanel" class="tab-pane fade" id="bundle" class="col-lg-12 col-md-12 col-sm-12" style="padding-top: 15px">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#bundle-home" aria-controls="bundle-home"
                                                                  role="tab" data-toggle="tab">Bundle
                            <span id="tick-bundle" class="hidden">
                            <img src="/images/tick.png" height="18px">
                        </span></a></li>
                        <li role="presentation"><a href="#software" aria-controls="software" role="tab" data-toggle="tab">Software</a></li>
                        <li role="presentation"><a href="#servers" aria-controls="servers" role="tab" data-toggle="tab">Server</a></li>
                        <li role="presentation"><a href="#terminals" aria-controls="terminals" role="tab" data-toggle="tab">Terminals</a></li>
                        <li role="presentation"><a href="#lan-data" aria-controls="lan-data" role="tab" data-toggle="tab">LAN & DATA</a></li>
                        <li role="presentation"><a href="#peripherals" aria-controls="peripherals" role="tab" data-toggle="tab">Peripherals</a></li>
                        <li role="presentation"><a href="#training" aria-controls="training" role="tab" data-toggle="tab">Training</a></li>
                        <li role="presentation"><a href="#remote" aria-controls="remote" role="tab" data-toggle="tab">Teleworker</a>
                        </li>
                        <li role="presentation"><a href="#install" aria-controls="install" role="tab" data-toggle="tab">Install</a></li>
                        <li role="presentation"><a href="#support" aria-controls="support" role="tab" data-toggle="tab">Support</a></li>
                        <li role="presentation"><a href="#maint" aria-controls="maint" role="tab" data-toggle="tab">Maintenance</a></li>
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



