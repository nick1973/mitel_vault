@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
    {{--<a class="btn btn-danger pull-right" href="/admin/product_management/software/create">Add New!</a>--}}
    {{--<br/>--}}
@endsection

@section('content')

    <h1><?php $name = Request::input('bundle_name'); echo $name; ?></h1>

    <div class="box box-success">
        <div class="box-header with-border">
            <div class="col-lg-10">
                <h3 class="box-title">Add Hardware to bundle: <span ng-bind="name"></span></h3>
                <button id="change-name" style="display: none" class="btn btn-danger">Change Bundle Name</button>
            </div>
            {{--{!! Form::open(array('url' => '','class' => 'form-horizontal', 'id' => 'form-create')) !!}--}}
            <div class="col-lg-10">
                <div id="create" class="form-group" style="padding-top: 15px">
                    <label class="col-md-3 col-lg-2 control-label">Create Bundle Name:</label>

                    <div class="col-md-3 col-lg-3">
                        <input id="name" ng-model="name" name="bundle_name" type="text" class="form-control">
                    </div>

                    <div class="col-md-3 col-lg-2">
                        <input onclick="created()" type="button" class="btn btn-primary form-control" value="Create">
                    </div>
                </div>
            </div>
            {{--{!! Form::close() !!}--}}
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            <!-- /.box tools -->
            <?php if(Session::has('exists')) { ?>
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><?php echo Request::segment(3)?> Duplicate bundle name have been entered!</p>
            </div>
            <?php
            }
            ?>
        </div>
        <!-- /.box-header -->
        <div id="block" class="box-body" style="display: none">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                          data-toggle="tab">Hardware</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                           data-toggle="tab">Software</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Terminals</a>
                </li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">


                    <div class="panel panel-default">
                        <div class="panel-body" ng-controller="CompanyCtrl">
                            <h2>Add Hardware to bundle:</h2>

                            <form class="form-horizontal" role="form" ng-submit="addRow()">
                                <input ng-value="name" hidden="">

                                <div class="col-md-8">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Products</label>

                                        <div class="col-md-6">
                                            <select id="rReservation" ng-model='products' class="form-control">
                                                <?php
                                                foreach ($json as $obj) {
                                                    echo "<option id='" . $obj{'id'} . "' value='" . $obj{'name'} . "'>" . $obj{'name'} . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Qty</label>

                                        <div class="col-md-3">
                                            <input type="text" class="form-control"
                                                   ng-model="qtys"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Bond Value £</label>

                                        <div class="col-md-3">
                                            <input ng-model='bonus' class='form-control' ng-model='bonus'
                                                   id='bonusBond'>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div style="padding-left:110px">
                                            <input type="submit" value="Add" class="btn btn-primary addproduct"/>
                                            <input type="button" value="Clear Totals"
                                                   class="btn btn-warning clearproduct"/>
                                        </div>
                                    </div>


                                </div>

                                <!--                COLUMN 2-->
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Code</label>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="b_codes"
                                                   ng-model="codes"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">EUP £</label>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="eup"
                                                   ng-model="eup"/>
                                        </div>
                                    </div>
                                    <br/>
                                    {{--<a href="/peripherals/{{ $customer->crf_id }}" class="btn btn-success">Auto Add Bonds Override!</a>--}}
                                </div>

                            </form>

                            {!! Form::model($customer,[
                            'method' => 'PATCH',
                            'route' => ['admin.product_management.software.update',$customer],
                            'class' => 'form-horizontal'])
                            !!}
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <input class="hidden users" name="crf_id" value="<?php //echo $customer->crf_id; ?>">
                            <table class="table">
                                <tr>
                                    <th>Products
                                    </th>
                                    <th>Code
                                    </th>
                                    <th>Qty
                                    </th>
                                    <th>EUP £
                                    </th>
                                    <th>Bond Value £
                                    </th>
                                </tr>
                                <tr ng-repeat="bond in bonds">
                                    <td>
                                        <input name="products[]" class="form-control users" type="text"
                                               value="@{{bond.products}}" required>
                                    </td>
                                    <td>
                                        <input name="codes[]" class="form-control users" type="text"
                                               value="@{{bond.codes}}" required>
                                    </td>
                                    <td>
                                        <input name="qty[]" class="form-control users" type="text"
                                               value="@{{bond.qtys}}" required>
                                    </td>
                                    <td>
                                        <input name="eup[]" class="form-control users" type="text" value="@{{bond.eup}}"
                                               required>
                                    </td>
                                    <td>
                                        <input name="bonus[]" class="form-control users" type="text"
                                               value="@{{bond.qtys * bond.bonus}}" required>
                                        {{--<input name="bonus[]" class="form-control users" type="text" value="@{{bond.bonus}}" required>--}}
                                    </td>
                                    <td>
                                        <input type="button" value="Remove" class="btn btn-danger addproduct"
                                               ng-click="removeRow(bond.products)"/>
                                    </td>
                                </tr>
                                <tfoot>
                                <tr>
                                    <td>
                                        <label class="col-md-5 control-label">Status</label>
                                        <select name="status_bonds" class="form-control">
                                            <option value="Not Actioned">Not Actioned</option>
                                            <option value="Paid / Complete">Paid / Complete</option>
                                            <option value="Sale Verified">Sale Verified</option>
                                            <option value="Sale In Query">Sale In Query</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>
                                        {{--{!! Form::select('status_bonds', ['','Sale Verified','Not Actioned','Sale In Query','Cancelled'], null, ['class' => 'form-control']) !!}--}}
                                    </td>
                                    <td>
                                        <label class="col-md-7 control-label">Bond Ref:</label>
                                        {!! Form::input('bond_ref', 'bond_ref', null, ['class' => 'form-control']) !!}
                                    </td>
                                    <td>
                                        <label class="col-md-7 control-label">Qty Total:</label>
                                        {!! Form::input('totalQuantity', 'totalQuantity', null, ['id'=>'qty', 'class' =>
                                        'form-control','required']) !!}
                                    </td>
                                    <td>
                                        <label class="col-md-7 control-label">EUP Total:</label>
                                        {!! Form::input('totalEUP', 'totalEUP', null, ['id'=>'eupval', 'class' =>
                                        'form-control','required']) !!}
                                    </td>
                                    <td>
                                        <label class="col-md-7 control-label">Bond Total:</label>
                                        {!! Form::input('totalBonus', 'totalBonus', null, ['id'=>'bonus', 'class' =>
                                        'form-control','required']) !!}
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="col-md-2">
                                <label class="control-label">NS Ref:</label>
                                {{--<input type="text" class="form-control col-md-1" name="ns_job" required/>--}}
                                {!! Form::input('ns_job', 'ns_job', null, ['class' => 'form-control col-md-1']) !!}
                                <br/><br/><br/>
                                <input type="submit" value="Submit" class="btn btn-primary"/>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="profile">...</div>
                <div role="tabpanel" class="tab-pane" id="messages">...</div>
                <div role="tabpanel" class="tab-pane" id="settings">...</div>
            </div>


        </div>
        <!-- /.box-body -->
    </div><!--box box-success-->

    @include('backend.hardware.scripts.product_list')

    <script>

        $(document).ready(function () {
            $(".addproduct").click(function () {
                var sum = 0;
                var sum2 = 0;
                var sum3 = 0;
                var sum4 = 0;
                $('input[name^="qty"]')
                        .each(function (i, e) {
                            var v = parseInt($(e).val());
                            if (!isNaN(v))
                                $("#qty").val(sum += v);
                            console.log(sum += v);
                        });

                $('input[name^="eup"]')
                        .each(function (i, e) {
                            var v = parseFloat($(e).val());
                            if (!isNaN(v))
                                $("#eupval").val(sum2 += v);
                            //console.log(sum += v);
                        });

                $('input[name^="bonus"]')
                        .each(function (i, e) {
                            var v = parseFloat($(e).val());
                            if (!isNaN(v))
                                $("#bonus").val(sum3 += v);
                            //console.log(sum += v);
                        });

                $('input[name^="btb_total"]')
                        .each(function (i, e) {
                            var v = parseFloat($(e).val());
                            if (!isNaN(v))
                                $("#forecast_total").val(sum4 += v);
                            //console.log(sum += v);
                        });
            });

            $(".clearproduct").click(function () {
                $("#qty").val("");
                $("#eupval").val("");
                $("#bonus").val("");
                $("#forecast_total").val("");
            });
        });

        var helloApp = angular.module("helloApp", []);
        helloApp.controller("CompanyCtrl", function ($scope, $http) {


            $http.get("bundle_set")
                    .then(function (response) {
                        $scope.bonds = response.data;
                    });


            $scope.addRow = function () {
                $scope.bonds.push({
                    'products': $scope.products,
                    'codes': $scope.codes,
                    'qtys': $scope.qtys,
                    'eup': $scope.eup,
                    'bonus': $scope.bonus
                });
                $scope.products = '';
                $scope.codes = '';
                $scope.qtys = '';
                $scope.eup = '';
                $scope.bonus = '';
            };

            $scope.removeRow = function (products) {
                var index = -1;
                var comArr = eval($scope.bonds);
                for (var i = 0; i < comArr.length; i++) {
                    if (comArr[i].products === products) {
                        index = i;
                        break;
                    }
                }
                //if( index === -1 ) {
                //    alert( "Something gone wrong" );
                //}
                $scope.bonds.splice(index, 1);
            };
        });

        $("#change-name").click(function () {
            $("#create").show('slow');
        });

        function created() {
            if ($("#name").val()) {
                $("#block").show('slow');
                $("#create").hide('slow');
                $("#change-name").show('slow');
            }
            else {
                alert("Please create a bundle name!");
            }
        }
        ;
    </script>

@endsection



